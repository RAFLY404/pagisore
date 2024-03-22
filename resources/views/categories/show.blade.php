<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="container">
        <h2>Category Details</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th>Icon:</th>
                    <td>{{ $category->icon }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>