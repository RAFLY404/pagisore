<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" id="name" name="name" value="{{ $product->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div>
                            <label for="current_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Current Image</label>
                            @if ($product->image)
                                <div class="mt-1">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="max-w-xs">
                                </div>
                            @else
                                <div>No Image</div>
                            @endif
                        </div>

                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Choose New Image (Optional)</label>
                            <input type="file" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="image" name="image" accept="image/*">
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                            <input type="number" id="price" name="price" value="{{ $product->price }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" step="0.01" required>
                        </div>

                        <div class="mb-4">
                            <label for="categories_id" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <select id="categories_id" name="categories_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($product->categories_id == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                            <input type="number" id="stock" name="stock" value="{{ $product->stock }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" step="0.01" required>
                        </div>

                        <div class="mb-4">
                            <label for="unit_type" class="block text-gray-700 text-sm font-bold mb-2">Unit Type:</label>
                            <input type="text" id="unit_type" name="unit_type" value="{{ $product->unit_type }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" step="0.01" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="branch_id" class="block text-gray-700 text-sm font-bold mb-2">Branch:</label>
                            <select id="branch_id" name="branch_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}" @if ($product->branch_id == $branch->id) selected @endif>{{ $branch->branch_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
