<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-4">
        <h2 class="text-lg font-semibold mb-4">Create Category</h2>
        <form action="{{ route('categories.store') }}" method="POST" class="max-w-sm">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" class="form-input mt-1 block w-full" id="name" name="name">
            </div>
            <div class="mb-4">
                <label for="icon" class="block text-gray-700">Icon:</label>
                <input type="text" class="form-input mt-1 block w-full" id="icon" name="icon">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</x-app-layout>
