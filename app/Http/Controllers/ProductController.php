<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product.
    public function create()
    {
        $categories = Category::all();
        $branch = Branch::all();
        return view('products.create', compact('categories', 'branch'));
    }

    // Store a newly created product in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required',
            'price' => 'required|numeric',
            'categories_id' => 'required|exists:categories,id',
            'stock' => 'required|string',
            'unit_type' => 'required|string',
            'branch_id' => 'required|exists:branches,id',
        ]);

        $gambar_menu_path = '';
        // Store the image
        if ($request->hasFile('image')) {
            $gambar_menu = $request->file('image');
            $gambar_menu_path = $gambar_menu->store('product_photos','public'); // Store the image in storage
            $gambar_menu_path = str_replace('public/', 'storage/', $gambar_menu_path); // Update the path to make it accessible
        }

        $product = new Product;
        $product->name = $request->name;
        $product->image = $gambar_menu_path; // Save the image path
        $product->price = $request->price;
        $product->categories_id = $request->categories_id;
        $product->stock = $request->stock;
        $product->unit_type = $request->unit_type;
        $product->branch_id = $request->branch_id;
        $product->save();

        
        
        return redirect()->route('products.index')
                         ->with('success','Product created successfully.');
    }

    // Display the specified product.
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    // Show the form for editing the specified product.
    public function edit(Product $product)
    {
        $categories = Category::all();
        $branches = Branch::all();
        return view('products.edit',compact('product','categories','branches'));
    }

    // Update the specified product in storage.
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

    // Update other fields
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->stock = $request->input('stock');
    $product->unit_type = $request->input('unit_type');
    // Assuming 'category_id' is the foreign key for category
    $product->categories_id = $request->input('categories_id');
    $product->branch_id = $request->input('branch_id');

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('product_images', 'public');
        $imagePath = str_replace('public/', 'storage/', $imagePath);
        $product->image = $imagePath;
    }

    $product->save();

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}

    // Remove the specified product from storage.
    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()->route('products.index')
                         ->with('success','Product deleted successfully');
    }
}
