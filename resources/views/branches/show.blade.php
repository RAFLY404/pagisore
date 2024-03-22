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
                    <h2 class="text-lg font-semibold text-gray-800">Branch Details</h2>
                </div>

                <div class="border-t border-gray-200">
                    <dl class="divide-y divide-gray-200">
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $branch->branch_name }}</dd>
                        </div>

                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Address</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $branch->address }}</dd>
                        </div>

                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $branch->phone_number }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>