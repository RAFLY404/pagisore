<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto pt-10">
    <div class="flex justify-center">
        <div class="w-full lg:w-8/12">
            <div class="bg-white shadow-md rounded-lg">
                <div class="px-4 py-3 sm:px-6">
                    <h2 class="text-lg font-semibold text-gray-800">Edit Branch</h2>
                </div>

                @if ($errors->any())
                    <div class="px-4 py-2 sm:px-6">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="px-4 py-3 sm:px-6">
                    <form method="POST" action="{{ route('branches.update', $branch->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="branch_name" class="block text-sm font-medium text-gray-700">Branch Name</label>
                            <input type="text" id="branch_name" name="branch_name" value="{{ $branch->branch_name }}" required class="form-input mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" id="address" name="address" value="{{ $branch->address }}" required class="form-input mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ $branch->phone_number }}" required class="form-input mt-1 block w-full">
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>