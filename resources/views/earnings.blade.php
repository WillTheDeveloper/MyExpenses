<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Earning') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">

                <div class="py-2">
                    <a href="{{route('earning.add')}}" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add earnings</a>
                </div>

                <div>
                    <dl class="grid grid-cols-1 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow md:grid-cols-3 md:divide-y-0 md:divide-x">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">Expected salary</dt>
                            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                    £72,000
                                </div>
                            </dd>
                        </div>

                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">Currently earned</dt>
                            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                    £{{$earned}}
                                </div>
                            </dd>
                        </div>

                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">Monthly average</dt>
                            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                    £{{round($average, 2)}}
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>


                <div>
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">From</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">To</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Amount</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">

                                        @foreach($list as $l)
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$l->from}}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$l->Card->name}} ({{$l->Card->lastfour}})</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$l->paid->diffForHumans()}}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">£{{$l->amount}}</td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, {{$l->from}}</span></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</x-app-layout>