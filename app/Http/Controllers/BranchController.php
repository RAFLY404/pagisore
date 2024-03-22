<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    // Display a listing of the branches.
    public function index()
    {
        $branches = Branch::all();
        return view('branches.index', compact('branches'));
    }

    // Show the form for creating a new branch.
    public function create()
    {
        return view('branches.create');
    }

    // Store a newly created branch in storage.
    public function store(Request $request)
    {
        $request->validate([
            'branch_name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        Branch::create($request->all());
        
        return redirect()->route('branches.index')
                         ->with('success','Branch created successfully.');
    }

    // Display the specified branch.
    public function show(Branch $branch)
    {
        return view('branches.show',compact('branch'));
    }

    // Show the form for editing the specified branch.
    public function edit(Branch $branch)
    {
        return view('branches.edit',compact('branch'));
    }

    // Update the specified branch in storage.
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'branch_name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $branch->update($request->all());
        
        return redirect()->route('branches.index')
                         ->with('success','Branch updated successfully');
    }

    // Remove the specified branch from storage.
    public function destroy(Branch $branch)
    {
        $branch->delete();
        
        return redirect()->route('branches.index')
                         ->with('success','Branch deleted successfully');
    }
}
