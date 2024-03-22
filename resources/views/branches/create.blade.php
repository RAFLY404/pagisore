<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branch') }}
        </h2>
    </x-slot>

    <div class="container mx-auto pt-10">
    <div class="flex justify-center">
        <div class="w-full lg:w-8/12">
            <div class="bg-white shadow-md rounded-lg">
                <div class="px-4 py-3 sm:px-6">
                    <h2 class="text-lg font-semibold text-gray-800">Create Branch</h2>
                </div>

                <div class="p-4">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('branches.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="branch_name" class="block text-gray-700">Branch Name</label>
                            <input type="text" class="form-input mt-1 block w-full" id="branch_name" name="branch_name" required>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block text-gray-700">Address</label>
                            <input type="text" class="form-input mt-1 block w-full" id="address" name="address" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone_number" class="block text-gray-700">Phone Number</label>
                            <input type="text" class="form-input mt-1 block w-full" id="phone_number" name="phone_number" required>
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>