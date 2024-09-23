<x-app-layout>
    @section('sidebar#dashboard','bg-gray-100 dark:bg-gray-700')    

    @section('container');
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-4">
            <div class="flex items-center justify-between my-2 mb-10 sm:mx-16 max-sm:px-2"> 
                <p class="text-5xl font-bold dark:text-white">Dashboard</p>              
            </div>
        </div>

        {{-- CARD --}}
        <div class="grid grid-cols-3 gap-8 mx-auto max-md:grid-cols-1 max-w-7xl max-md:px-6 lg:px-10">
            {{-- CARD ORDER --}}
            <div class="overflow-hidden bg-white rounded-md shadow-lg dark:bg-gray-700">
                <div class="flex items-center justify-between px-10 py-6">
                    <div class="relative items-center">
                        <p class="text-4xl font-extrabold text-blue-600">{{ $totalCurrentMonthOrder }}</p>
                        <p class="text-lg font-semibold text-gray-600 dark:text-gray-300">Total Order</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="m-4 bi bi-cart2 w-14 h-14 dark:text-white" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                          </svg>
                    </div>
                </div>
                <div class="flex items-center justify-between px-10 py-3 text-white bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500">
                    <p>{{ $totalOrderPercentageChange }}% Change</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" stroke-width="2"/>
                    </svg>
                </div>
            </div>

            {{-- CARD CUSTOMER --}}
            <div class="overflow-hidden bg-white rounded-md shadow-lg dark:bg-gray-700">
                <div class="flex items-center justify-between px-10 py-6">
                    <div class="relative items-center">
                        <p class="text-4xl font-extrabold text-orange-600">{{ $totalCurrentMonthCust }}</p>
                        <p class="text-lg font-semibold text-gray-600 dark:text-gray-300">Total Customer</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="m-4 bi bi-person-fill-add w-14 h-14 dark:text-white" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                          </svg>
                    </div>
                </div>
                <div class="flex items-center justify-between px-10 py-3 text-white bg-gradient-to-r from-orange-700 via-orange-600 to-orange-500">
                    <p>{{ $totalCustPercentageChange }}% Change</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" stroke-width="2"/>
                    </svg>
                </div>
            </div>

            {{-- CARD PENJUALAN --}}
            <div class="overflow-hidden bg-white rounded-md shadow-lg dark:bg-gray-700">
                <div class="flex items-center justify-between px-10 py-6">
                    <div class="relative items-center">
                        <p class="text-3xl ml-[-15px] font-extrabold text-green-600">Rp.{{ $totalCurrentMonthIncome }}</p>
                        <p class="text-lg font-semibold text-gray-600 dark:text-gray-300">Total Penjualan</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="m-4 bi bi-box-seam w-14 h-14 dark:text-white" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                          </svg>
                    </div>
                </div>
                <div class="flex items-center justify-between px-10 py-3 text-white bg-gradient-to-r from-green-700 via-green-600 to-green-500">
                    <p>{{ $totalIncomePercentageChange }}% Change</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" stroke-width="2"/>
                    </svg>
                </div>                
            </div>
        </div>

        {{-- GRAFIK --}}
        <div class="mx-auto my-8 max-w-7xl max-md:px-6 lg:px-10">
            <div class="flex items-center justify-center gap-4 p-2 bg-white rounded-md dark:bg-gray-700">
                <div class="w-[70%]">                     
                    <div class="w-full p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-6">
                        <div class="flex justify-between">
                            <div>
                                <h5 class="pb-2 text-3xl font-bold leading-none text-gray-900 dark:text-white">Rp.{{ $totalCurrentMonthIncome }}</h5>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Total Penjualan /bulan</p>
                            </div>
                            @if ($totalIncomePercentageChange >= 0)
                                <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                                    <p>{{ $totalIncomePercentageChange }}%</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 stroke-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
                                    </svg>
                                </div>
                            @else
                            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-red-500 dark:text-red-500 text-center">
                                <p>{{ $totalIncomePercentageChange }}%</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 stroke-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
                                </svg>
                            </div>
                            @endif
                            
                            
                        </div>
                        <div id="area-chart"></div>
                        <div class="grid items-center justify-between grid-cols-1 my-4 border-t border-gray-200 dark:border-gray-700">

                        </div>
                    </div>
                </div>

                <div class="w-[30%]">
                    <div class="w-full p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-6">
                        <div class="flex items-start justify-between w-full">
                            <div class="flex-col items-center">
                                <div class="flex items-center mb-1">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Analis Order</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Line Chart -->
                        <div class="py-6" id="pie-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>   
    document.addEventListener('DOMContentLoaded', function () {
        const monthlyIncomes = @json($monthlyIncomes);
        const labels = Object.keys(monthlyIncomes);
        const data = Object.values(monthlyIncomes);
        
        const options = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                enabled: false,
                },
                toolbar: {
                show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                show: false,
                },
                y: {
                    formatter: function (value) {
                        return "Rp. " + value.toLocaleString();
                    },
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
                },
            },
            dataLabels: {
                enabled: false,
                formatter: function (value) {
                    return "Rp." + value.toLocaleString();
                },
            },
            stroke: {
                width: 6,
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                left: 2,
                right: 2,
                top: 0
                },
            },
            series: [
                {
                name: "Total Penjualan",
                data: data,
                color: "#1A56DB",
                },
            ],
            xaxis: {
                categories: labels,
                labels: {
                show: false,
                },
                axisBorder: {
                show: false,
                },
                axisTicks: {
                show: false,
                },
            },
            yaxis: {
                show: false,
            },
        }

        if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("area-chart"), options);
            chart.render();
        }
    
        // CHART PIE    
        const getChartOptions = () => {
            return {
                series: [{{ $PercentageA3 }}, {{ $PercentageOutdoor }}, {{ $PercentageIndoor }}],
                colors: ["#1C64F2", "#16BDCA", "#9061F9"],
                chart: {
                height: 300,
                width: "100%",
                type: "pie",
                },
                stroke: {
                colors: ["white"],
                lineCap: "",
                },
                plotOptions: {
                pie: {
                    labels: {
                    show: true,
                    },
                    size: "100%",
                    dataLabels: {
                    offset: -25
                    }
                },
                },
                labels: ["A3+", "Outdoor", "Indoor"],
                dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
                },
                legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                labels: {
                    formatter: function (value) {
                    return value + "%"
                    },
                },
                },
                xaxis: {
                labels: {
                    formatter: function (value) {
                    return value  + "%"
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                },
            }
        }

        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
        chart.render();
        }
    });
</script>