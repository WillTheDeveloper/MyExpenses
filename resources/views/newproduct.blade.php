<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create product') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">

                <form class="space-y-6" action="#" method="POST">
                    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can receive mail.</p>
                            </div>
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Item name</label>
                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Details</label>
                                        <textarea type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">Brand</label>
                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            @foreach($brand as $b)
                                                <option value="{{$b->id}}">{{$b->item}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="region" class="block text-sm font-medium text-gray-700">Card</label>
                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">Supplier</label>
                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
                        <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>