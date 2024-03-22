<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Branch') }}
            </h2>
            <a href="{{ route('branches.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Branch</a>
        </div>
    </x-slot>

    <div class="container mx-auto pt-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-8/12">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="px-4 py-3 sm:px-6">
                        <h2 class="text-lg font-semibold text-gray-800">Branches</h2>
                    </div>

                    @if (session('success'))
                        <div class="px-4 py-2 sm:px-6">
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($branches as $index => $branch)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $branch->branch_name }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $branch->address }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $branch->phone_number }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right">
                                            <a href="{{ route('branches.show', $branch->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                            <a href="{{ route('branches.edit', $branch->id) }}" class="text-gray-600 hover:text-gray-900 ml-2">Edit</a>
                                            <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Are you sure you want to delete this branch?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
