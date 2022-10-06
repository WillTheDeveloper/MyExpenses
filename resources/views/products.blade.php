<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">

                <div class="pt-4">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900"></h1>
{{--                            <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>--}}
                        </div>
                        <div class="sm:mt-0 sm:ml-16 sm:flex-none">
                            <a href="{{route('product.new')}}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Create</a>
                        </div>
                    </div>
                    <div class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Item</th>
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Brand</th>
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Supplier</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Cost</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($list as $l)
                                <tr>
                                    <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        {{$l->item}}
                                        <dl class="font-normal lg:hidden">
                                            <dt class="sr-only">Item</dt>
                                            <dd class="mt-1 truncate text-gray-700">Front-end Developer</dd>
                                            <dt class="sr-only sm:hidden">Cost</dt>
                                            <dd class="mt-1 truncate text-gray-500 sm:hidden">lindsay.walton@example.com</dd>
                                        </dl>
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">Front-end Developer</td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">lindsay.walton@example.com</td>
                                    <td class="px-3 py-4 text-sm text-gray-500">Member</td>
                                    <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                    </td>
                                </tr>
                            @endforeach()

                            <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>