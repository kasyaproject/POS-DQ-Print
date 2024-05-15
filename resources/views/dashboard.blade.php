<x-app-layout>
    @section('sidebar#dashboard','bg-gray-100 dark:bg-gray-700')    

    @section('container');
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="flex items-center justify-between mb-10 my-2 sm:mx-16 max-sm:px-2"> 
                <p class="text-5xl font-bold dark:text-white">Dashboard</p>              
            </div>
        </div>

        {{-- CARD --}}
        <div class="grid grid-cols-3 max-md:grid-cols-1 gap-8 max-w-7xl mx-auto max-md:px-6 lg:px-10">
            {{-- CARD ORDER --}}
            <div class="rounded-md overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                <div class="flex justify-between items-center py-6 px-10">
                    <div class="relative items-center">
                        <p class="text-4xl font-extrabold text-blue-600">800</p>
                        <p class="text-lg font-semibold text-gray-600 dark:text-gray-300">Total Order</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart2 w-14 h-14 m-4 dark:text-white" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                          </svg>
                    </div>
                </div>
                <div class="flex justify-between items-center text-white py-3 px-10 bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500">
                    <p>% Change</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" stroke-width="2"/>
                    </svg>
                </div>
            </div>

            {{-- CARD CUSTOMER --}}
            <div class="rounded-md overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                <div class="flex justify-between items-center py-6 px-10">
                    <div class="relative items-center">
                        <p class="text-4xl font-extrabold text-orange-600">800</p>
                        <p class="text-lg font-semibold text-gray-600 dark:text-gray-300">Total Customer</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add w-14 h-14 m-4 dark:text-white" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                          </svg>
                    </div>
                </div>
                <div class="flex justify-between items-center text-white py-3 px-10 bg-gradient-to-r from-orange-700 via-orange-600 to-orange-500">
                    <p>% Change</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" stroke-width="2"/>
                    </svg>
                </div>
            </div>

            {{-- CARD PENJUALAN --}}
            <div class="rounded-md overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                <div class="flex justify-between items-center py-6 px-10">
                    <div class="relative items-center">
                        <p class="text-4xl font-extrabold text-green-600">800</p>
                        <p class="text-lg font-semibold text-gray-600 dark:text-gray-300">Total Penjualan</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-seam w-14 h-14 m-4 dark:text-white" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                          </svg>
                    </div>
                </div>
                <div class="flex justify-between items-center text-white py-3 px-10 bg-gradient-to-r from-green-700 via-green-600 to-green-500">
                    <p>% Change</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" stroke-width="2"/>
                    </svg>
                </div>                
            </div>
        </div>

        {{-- GRAFIK --}}
        <div class="max-w-7xl mx-auto my-8 max-md:px-6 lg:px-10">
            <div class="flex gap-4 justify-center items-center bg-white dark:bg-gray-700 rounded-md p-2">
                <div class="w-[70%]">                     
                    <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                        <div class="flex justify-between">
                            <div>
                                <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">32.4k</h5>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Total Penjualan /bulan</p>
                            </div>
                            <div
                                class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                                12%
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 stroke-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
                                </svg>
                            </div>
                            <div
                                class="flex items-center px-2.5 py-0.5 text-base font-semibold text-red-500 dark:text-red-500 text-center">
                                -12%
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3 stroke-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
                                </svg>
                            </div>
                        </div>
                        <div id="area-chart"></div>
                        <div class="grid grid-cols-1 items-center my-4 border-gray-200 border-t dark:border-gray-700 justify-between">

                        </div>
                    </div>
                </div>

                <div class="w-[30%]">
                    <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                        <div class="flex justify-between items-start w-full">
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

<script>   
    // CHART LINE
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
        name: "New users",
        data: [6500, 6418, 6456, 6526, 6356, 6456],
        color: "#1A56DB",
        },
    ],
    xaxis: {
        categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
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
        series: [52.8, 26.8, 20.4],
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
</script>