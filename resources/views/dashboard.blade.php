<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div>
                    <dl class="grid grid-cols-1 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow md:grid-cols-3 md:divide-y-0 md:divide-x">
                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">Total month expense</dt>
                            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                    £{{$thismonth}}
                                    <span class="ml-2 text-sm font-medium text-gray-500">from £70,946</span>
                                </div>

                                <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
                                    <!-- Heroicon name: mini/arrow-up -->
                                    <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Increased by </span>
                                    {{round($difference, 2)}}%
                                </div>
                            </dd>
                        </div>

                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">Last month expense</dt>
                            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                    £{{$lastmonth}}
                                    <span class="ml-2 text-sm font-medium text-gray-500">from £56.14</span>
                                </div>

                                <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
                                    <!-- Heroicon name: mini/arrow-up -->
                                    <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Increased by </span>
                                    2.02%
                                </div>
                            </dd>
                        </div>

                        <div class="px-4 py-5 sm:p-6">
                            <dt class="text-base font-normal text-gray-900">Total year expense</dt>
                            <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                                <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                    £{{$thisyear}}
                                    <span class="ml-2 text-sm font-medium text-gray-500">from 28.62%</span>
                                </div>

                                <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800 md:mt-2 lg:mt-0">
                                    <!-- Heroicon name: mini/arrow-down -->
                                    <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Decreased by </span>
                                    4.05%
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>


                @foreach($chart as $c)
                    {{$c}}
                @endforeach

                        <div class="flex flex-1 flex-col p-8">

                            <div>
                                <canvas id="chart01"></canvas>
                            </div>

                            <script>
                                const labels1 = [
                                    @foreach($chart as $c)
                                            '{{\Carbon\Carbon::parse($c->ordered_on)->monthName}}',
                                    @endforeach
                                ];

                                const data1 = {
                                    labels: labels1,
                                    datasets: [{
                                        label: 'Monthly expenditure',
                                        backgroundColor: 'rgb(255, 99, 132)',
                                        borderColor: 'rgb(255, 99, 132)',
                                        data: [
                                            @foreach($chart as $c)
                                                {{$c->where('user_id', auth()->id())->sum('cost')}},
                                            @endforeach
                                        ],

                                    },
                                        {
                                            label: 'Shipping costs',
                                            backgroundColor: 'rgb(255,0,55)',
                                            borderColor: 'rgb(255,0,55)',
                                            data: [
                                                @foreach($chart as $c)
                                                        {{$c->where('user_id', auth()->id())->sum('shipping')}},
                                                @endforeach
                                            ],

                                        }
                                    ]
                                };

                                const config1 = {
                                    type: 'line',
                                    data: data1,
                                    options: {}
                                };
                            </script>

                            <script>
                                const myChart1 = new Chart(
                                    document.getElementById('chart01'),
                                    config1
                                );
                            </script>
                        </div>
            </div>
        </div>
    </div>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



            </div>
        </div>
    </div>
</x-app-layout>
