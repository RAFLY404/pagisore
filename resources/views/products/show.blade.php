<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Price:</strong> {{ $product->price }}</p>
                    <div>
                    <label for="current_image" class="block text-m font-medium text-gray-700 dark:text-gray-300"><strong>Product Image:</strong></label>
                            @if ($product->image)
                                <div class="mt-1">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-24 object-cover rounded-full">
                                </div>
                            @else
                                <div>No Image</div>
                            @endif
                        </div>
                    <p><strong>Category:</strong> {{ $product->category->name }}</p>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    <p><strong>Unit Type:</strong> {{ $product->unit_type }}</p>
                    <p><strong>Branch:</strong> {{ $product->branch->branch_name }}</p>
                    <!-- Add more details as needed -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
