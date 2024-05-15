<x-app-layout>
    @section('sidebar#produk','bg-gray-100 dark:bg-gray-700')    

@section('container');
    {{-- Alert --}}
        @if (session('success'))
            <div class="absolute z-10 max-xl:w-full xl:w-[83%] bg-gray-">
                <div class="flex justify-center lg:mx-72 bg-blue-">
                    <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                        Data berhasil ditambahkan, silakan login dengan pengguna baru.
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                </div>    
            </div>
        @endif
        @if (session('success-update'))
            <div class="absolute z-10 max-xl:w-full xl:w-[83%] bg-gray-">
                <div class="flex justify-center lg:mx-72 bg-blue-">
                    <div id="alert-1" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                        Data berhasil diperbarui, silakan login dengan pengguna baru.
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                </div>    
            </div>
        @endif
        @if (session('success-delete'))
            <div class="absolute z-10 max-xl:w-full xl:w-[83%] bg-gray-">
                <div class="flex justify-center lg:mx-72 bg-blue-">
                    <div id="alert-1" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                        Data berhasil dihapus.
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                </div>    
            </div>
        @endif
        @if (session('error'))
            <div class="absolute z-10 max-xl:w-full xl:w-[83%] bg-gray-">
                <div class="flex justify-center lg:mx-72 bg-blue-">
                    <div id="alert-1" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-red-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium mr-2">
                        Data gagal ditambahkan, {{ session('error') }}.
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                </div>    
            </div>
        @endif
    {{-- END alert --}}

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
        <div class="flex items-center justify-between mb-14 my-2 sm:mx-16 max-sm:px-2"> 
            <p class="text-5xl font-bold dark:text-white">Produk</p>
            <button data-modal-target="static-modal-produk" data-modal-toggle="static-modal-produk" type="button" class="text-white mt-1 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm text-center sm:px-2 sm:py-2 me-2 mb-2">
                <span class="max-sm:hidden px-2 py-8">
                    Produk baru
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add w-4 h-4 m-4 sm:hidden" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                </svg>
            </button>   
        </div>


        {{-- TOMBOL KATEGORI --}}
        <div class="flex justify-center">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800" type="button">
                <div id="button0" class="relative px-2 py-1.5 transition-all ease-in duration-75 rounded-md group-hover:bg-opacity-0">
                    <span class="max-sm: m-2">
                        All
                    </span>
                </div>
            </button> 
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-700 to-blue-500 group-hover:from-blue-700 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800" type="button">
                <div id="button1" class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <span class="max-sm: m-2">
                        A3+
                    </span>
                </div>
            </button> 
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800" type="button">
                <div id="button2" class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <span class="max-sm: m-2">
                        Outdoor
                    </span>
                </div>
            </button> 
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-700 to-purple-500 group-hover:from-purple-700 group-hover:to-purple-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800" type="button">
                <div id="button3" class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <span class="max-sm: m-2">
                        Indoor
                    </span>
                </div>
            </button> 
        </div>    
        {{-- TOMBOL KATEGORI END --}}


        {{-- TABLE A3+ --}}        
        <div id="a3+" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mx-2 mt-2 mb-6">
            <div class="flex justify-between mx-8 my-4 items-center">
                <p class="text-2xl font-bold dark:text-white">A3+</p>
                @if($A3->isEmpty())
                    <span class="hidden">
                        Update Stok
                    </span>
                @else
                    <button data-modal-target="static-modal-a3" data-modal-toggle="static-modal-a3" type="button" class="text-white mt-1 bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm text-center sm:px-2 sm:py-2 me-2 mb-2">
                        <span class="max-sm:hidden px-2 py-8">
                            Update Stok
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add w-4 h-4 m-4 sm:hidden" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </button>  
                @endif                  
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga BB
                            </th>
                            <th scope="col" class="w-72 px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tbody>
                            @if($A3->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center py-4">Tidak ada produk A3+ yang ditemukan.</td>
                                </tr>
                            @else
                                @foreach ($A3 as $data)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $data->nama_produk }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $data->qty }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. {{ $data->harga }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. {{ $data->hargaBB }}
                                        </td>
                                        <td class="flex justify-center items-center px-6 py-2 text-center">
                                            <button data-modal-target="default-modal-{{ $data->kode_produk }}" data-modal-toggle="default-modal-{{ $data->kode_produk }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800" type="button">
                                                <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    <span class="max-sm:hidden m-2">
                                                        Edit
                                                    </span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-pen-fill w-4 h-4 m-1 sm:hidden" viewBox="0 0 16 16">
                                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                    </svg>
                                                </div>
                                            </button>
                                            <button data-modal-target="popup-modal-{{ $data->kode_produk }}" data-modal-toggle="popup-modal-{{ $data->kode_produk }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-700 to-red-500 group-hover:from-red-700 group-hover:to-red-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800" type="button">
                                                <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    <span class="max-sm:hidden m-2">
                                                        Hapus
                                                    </span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-pen-fill w-4 h-4 m-1 sm:hidden" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                    </svg>
                                                </div>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- TABLE A3+ END --}}


        {{-- TABLE OUTDOOR/INDOOR --}}       
        <div id="outdoor" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mx-2 mt-2 mb-6">
            <div class="flex justify-between mx-8 my-4 items-center">
                <p class="text-2xl font-bold dark:text-white">OUTDOOR</p>
                @if($outdoor->isEmpty())
                    <span class="hidden">
                        Update Stok
                    </span>
                @else
                    <button data-modal-target="static-modal-od" data-modal-toggle="static-modal-od" type="button" class="text-white mt-1 bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm text-center sm:px-2 sm:py-2 me-2 mb-2">
                        <span class="max-sm:hidden px-2 py-8">
                            Update Stok
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add w-4 h-4 m-4 sm:hidden" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </button>  
                @endif                  
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="w-72 px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($outdoor->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center py-4">Tidak ada produk Outdoor yang ditemukan.</td>
                            </tr>
                        @else
                            @foreach ($outdoor as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $data->nama_produk }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $data->qty }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. {{ $data->harga }}
                                    </td>
                                    <td class="flex justify-center items-center px-6 py-2 text-center">
                                        <button data-modal-target="default-modal-{{ $data->kode_produk }}" data-modal-toggle="default-modal-{{ $data->kode_produk }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800" type="button">
                                            <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                <span class="max-sm:hidden m-2">
                                                    Edit
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-pen-fill w-4 h-4 m-1 sm:hidden" viewBox="0 0 16 16">
                                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                </svg>
                                            </div>
                                        </button>
                                        <button data-modal-target="popup-modal-{{ $data->kode_produk }}" data-modal-toggle="popup-modal-{{ $data->kode_produk }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-700 to-red-500 group-hover:from-red-700 group-hover:to-red-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800" type="button">
                                            <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                <span class="max-sm:hidden m-2">
                                                    Hapus
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-pen-fill w-4 h-4 m-1 sm:hidden" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                </svg>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- TABLE OUTDOOR END --}}
        

        {{-- TABLE INDOOR --}}
        <div id="indoor" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mx-2 mt-2 mb-6">
            <div class="flex justify-between mx-8 my-4 items-center">
                <p class="text-2xl font-bold dark:text-white">INDOOR</p>
                @if($indoor->isEmpty())
                    <span class="hidden">
                        Update Stok
                    </span>
                @else
                    <button data-modal-target="static-modal-in" data-modal-toggle="static-modal-in" type="button" class="text-white mt-1 bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm text-center sm:px-2 sm:py-2 me-2 mb-2">
                        <span class="max-sm:hidden px-2 py-8">
                            Update Stok
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add w-4 h-4 m-4 sm:hidden" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </button>         
                @endif           
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="w-72 px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($indoor->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center py-4">Tidak ada produk Indoor yang ditemukan.</td>
                            </tr>
                        @else
                            @foreach ($indoor as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $data->nama_produk }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $data->qty }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. {{ $data->harga }}
                                    </td>
                                    <td class="flex justify-center items-center px-6 py-2 text-center">
                                        <button data-modal-target="default-modal-{{ $data->kode_produk }}" data-modal-toggle="default-modal-{{ $data->kode_produk }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800" type="button">
                                            <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                <span class="max-sm:hidden m-2">
                                                    Edit
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-pen-fill w-4 h-4 m-1 sm:hidden" viewBox="0 0 16 16">
                                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                </svg>
                                            </div>
                                        </button>
                                        <button data-modal-target="popup-modal-{{ $data->kode_produk }}" data-modal-toggle="popup-modal-{{ $data->kode_produk }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-700 to-red-500 group-hover:from-red-700 group-hover:to-red-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800" type="button">
                                            <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                <span class="max-sm:hidden m-2">
                                                    Hapus
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-pen-fill w-4 h-4 m-1 sm:hidden" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                </svg>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- TABLE MARCHANDISE END --}}
    </div>


    {{-- Modal Tambah --}}
    <div id="static-modal-produk" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Buat produk baru
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="static-modal-produk">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('produk.store') }}" method="POST" class="p-4 md:p-5">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nama produk" required="">
                            @error('nama_produk')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk</label>
                            <input type="text" name="qty" id="qty" value="{{ old('qty') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan qty produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            @error('qty')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>      
                        <div class="col-span-2">
                            <label for="Kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Produk</label>
                            <select id="Kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Pilih Kategori produk</option>
                                <option value="A3+" {{ old('kategori') == 'A3+' ? 'selected' : '' }}>A3+</option>
                                <option value="Outdoor" {{ old('kategori') == 'Outdoor' ? 'selected' : '' }}>Outdoor</option>   
                                <option value="Indoor" {{ old('kategori') == 'Indoor' ? 'selected' : '' }}>Indoor</option>
                            </select>
                            @error('kategori')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>   
                        <div id="harga" class="hidden col-span-2 sm:col-span-1">
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
                            <input type="text" name="harga" id="harga" value="{{ old('harga') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan harga produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            @error('harga')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="hargaBB" class="hidden col-span-2 sm:col-span-1">
                            <label for="hargaBB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga BB Produk</label>
                            <input type="text" name="hargaBB" id="hargaBB" value="{{ old('hargaBB') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan harga BB produk" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            @error('hargaBB')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>               
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Tambah Produk Baru
                    </button>
                </form>                
            </div>
        </div>
    </div> 
    {{-- END Modal Tambah  --}}


    {{-- Modal Update stok A3 --}}
    <div id="static-modal-a3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modal Update stok
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="static-modal-a3">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->                
                <form action="{{ route('produk.opname') }}" method="POST" class="p-4 md:p-5">
                    @csrf             
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-1 mx-2 mb-[-15px]">
                            <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        </div>
                        <div class="col-span-1 mx-2 mb-[-15px]">
                            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk</label>
                        </div>
                        @foreach($A3 as $data)
                            <input type="hidden" name="produk[{{ $data->kode_produk }}][kode_produk]" value="{{ $data->kode_produk }}"> {{--  name -> produk[1][id], produk[2][id] --}}
                            <div class="col-span-1">                            
                                <label class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nama produk" required="">{{ $data->nama_produk }}</label>
                                @error('nama_produk')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <input type="text" name="produk[{{ $data->kode_produk }}][qty]" id="qty" value="{{ $data->qty }}" class="bg-gray-150 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan qty produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                @error('qty')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach             
                    </div>
                    <button type="submit" class="text-white inline-flex mt-4 items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update Stok
                    </button>
                </form>
            </div>
        </div>
    </div> 
    {{-- END Modal Update stok  --}}


    {{-- Modal Update stok Outdoor --}}
    <div id="static-modal-od" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modal Update stok
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="static-modal-od">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->                
                <form action="{{ route('produk.opname') }}" method="POST" class="p-4 md:p-5">
                    @csrf             
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-1 mx-2 mb-[-15px]">
                            <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        </div>
                        <div class="col-span-1 mx-2 mb-[-15px]">
                            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk</label>
                        </div>
                        @foreach($outdoor as $data)
                             <input type="hidden" name="produk[{{ $data->kode_produk }}][kode_produk]" value="{{ $data->kode_produk }}"> {{--  name -> produk[1][id], produk[2][id] --}}
                            <div class="col-span-1">                            
                                <label class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nama produk" required="">{{ $data->nama_produk }}</label>
                                @error('nama_produk')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <input type="text" name="produk[{{ $data->kode_produk }}][qty]" id="qty" value="{{ $data->qty }}" class="bg-gray-150 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan qty produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                @error('qty')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach             
                    </div>
                    <button type="submit" class="text-white inline-flex mt-4 items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update Stok
                    </button>
                </form>
            </div>
        </div>
    </div> 
    {{-- END Modal Update stok  --}}


    {{-- Modal Update stok Indoor --}}
    <div id="static-modal-in" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Modal Update stok
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="static-modal-in">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->                
                <form action="{{ route('produk.opname') }}" method="POST" class="p-4 md:p-5">
                    @csrf             
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-1 mx-2 mb-[-15px]">
                            <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        </div>
                        <div class="col-span-1 mx-2 mb-[-15px]">
                            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk</label>
                        </div>
                        @foreach($indoor as $data)
                             <input type="hidden" name="produk[{{ $data->kode_produk }}][kode_produk]" value="{{ $data->kode_produk }}"> {{--  name -> produk[1][id], produk[2][id] --}}
                            <div class="col-span-1">                            
                                <label class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-500 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nama produk" required="">{{ $data->nama_produk }}</label>
                                @error('nama_produk')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <input type="text" name="produk[{{ $data->kode_produk }}][qty]" id="qty" value="{{ $data->qty }}" class="bg-gray-150 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan qty produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                @error('qty')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach             
                    </div>
                    <button type="submit" class="text-white inline-flex mt-4 items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update Stok
                    </button>
                </form>
            </div>
        </div>
    </div> 
    {{-- END Modal Update stok  --}}


    {{-- Modal Edit --}}
    @foreach ($produk as $data)
        <div id="default-modal-{{ $data->kode_produk }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form action="{{ route('produk.update', ['produk' => $data->kode_produk]) }}" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    @method('PUT')
                    @csrf
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Data Produk
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-{{ $data->kode_produk }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="col-span-2">
                            <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama produk</label>
                            <input type="text" name="nama_produk" id="nanama_produkma" value="{{ $data->nama_produk }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nama pengguna" required="" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '');">
                            @error('nama_produk')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty produk</label>
                            <input type="qty" name="qty" id="qty" value="{{ $data->qty }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan email pengguna" required="">
                            @error('qty')
                                <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        @if ($data->kategori === 'A3+')
                            <div class="col-span-2">
                                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga produk</label>
                                <input type="harga" name="harga" id="harga" value="{{ $data->harga }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan email pengguna" required="">
                                @error('harga')
                                    <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="hargaBB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga BB produk</label>
                                <input type="hargaBB" name="hargaBB" id="hargaBB" value="{{ $data->hargaBB }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan email pengguna" required="">
                                @error('hargaBB')
                                    <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        @else 
                            <div class="col-span-2">
                                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga produk</label>
                                <input type="harga" name="harga" id="harga" value="{{ $data->harga }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan email pengguna" required="">
                                @error('harga')
                                    <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="default-modal" type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
    {{-- END Modal Edit --}}


    {{-- Modal Hapus --}}
    @foreach ($produk as $data)
        <div id="popup-modal-{{ $data->kode_produk }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <form action="{{ route('produk.destroy', ['produk' => $data->kode_produk]) }}" method="POST" class="p-4 md:p-5 text-center">
                        @method('DELETE')
                        @csrf
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apa kamu yakin ingin menghapus data produk ini?</h3>
                        <h3 class="mb-10 text-lg font-semibold text-black dark:text-white">{{ $data->nama_produk }} - {{ $data->kategori }}</h3>
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="popup-modal-{{ $data->kode_produk }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, batalkan</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- END Modal Hapus --}}


    <script>
        const bnt0 = document.getElementById('button0');
        const bnt1 = document.getElementById('button1');
        const bnt2 = document.getElementById('button2');
        const bnt3 = document.getElementById('button3');
        const tabel1 = document.getElementById('a3+');
        const tabel2 = document.getElementById('outdoor');
        const tabel3 = document.getElementById('indoor');


        document.getElementById('button0').addEventListener('click', function() {
            bnt0.classList.remove('bg-white', 'dark:bg-gray-900');
            bnt1.classList.add('bg-white', 'dark:bg-gray-900');
            bnt2.classList.add('bg-white', 'dark:bg-gray-900');
            bnt3.classList.add('bg-white', 'dark:bg-gray-900');
            tabel1.classList.remove('hidden');
            tabel2.classList.remove('hidden');
            tabel3.classList.remove ('hidden');
        });
        document.getElementById('button1').addEventListener('click', function() {
            bnt0.classList.add('bg-white', 'dark:bg-gray-900');
            bnt1.classList.remove('bg-white', 'dark:bg-gray-900');
            bnt2.classList.add('bg-white', 'dark:bg-gray-900');
            bnt3.classList.add('bg-white', 'dark:bg-gray-900');
            tabel1.classList.remove('hidden');
            tabel2.classList.add('hidden');
            tabel3.classList.add('hidden');
        });
        document.getElementById('button2').addEventListener('click', function() {
            bnt0.classList.add('bg-white', 'dark:bg-gray-900');
            bnt1.classList.add('bg-white', 'dark:bg-gray-900');
            bnt2.classList.remove('bg-white', 'dark:bg-gray-900');
            bnt3.classList.add('bg-white', 'dark:bg-gray-900');
            tabel1.classList.add('hidden');
            tabel2.classList.remove('hidden');
            tabel3.classList.add('hidden');
        });
        document.getElementById('button3').addEventListener('click', function() {
            bnt0.classList.add('bg-white', 'dark:bg-gray-900');
            bnt1.classList.add('bg-white', 'dark:bg-gray-900');
            bnt2.classList.add('bg-white', 'dark:bg-gray-900');
            bnt3.classList.remove('bg-white', 'dark:bg-gray-900');
            tabel1.classList.add('hidden');
            tabel2.classList.add('hidden');
            tabel3.classList.remove('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen dropdown kategori
            var kategoriSelect = document.getElementById('Kategori');
            // Ambil elemen input harga
            var hargaInput = document.getElementById('harga');
            // Ambil elemen input harga BB
            var hargaBBInput = document.getElementById('hargaBB');

            // Fungsi untuk menampilkan/menyembunyikan elemen harga dan harga BB
            function toggleHargaInputs() {
                // Periksa apakah kategori yang dipilih adalah A3+
                if (kategoriSelect.value === 'A3+') {
                    hargaInput.classList.remove('hidden');
                    hargaInput.classList.add('col-span-2', 'sm:col-span-1');
                    hargaBBInput.classList.remove('hidden');
                    hargaBBInput.classList.add('col-span-2', 'sm:col-span-1');
                } else if (kategoriSelect.value === 'Outdoor') {
                    hargaInput.classList.remove('hidden');
                    hargaInput.classList.remove('sm:col-span-1');
                    hargaBBInput.classList.add('hidden');
                    hargaBBInput.classList.remove('col-span-2', 'sm:col-span-1');
                } else if (kategoriSelect.value === 'Indoor') {
                    hargaInput.classList.remove('hidden');
                    hargaInput.classList.remove('sm:col-span-1');
                    hargaBBInput.classList.add('hidden');
                    hargaBBInput.classList.remove('col-span-2', 'sm:col-span-1');
                } else{
                    hargaInput.classList.add('hidden');
                    hargaBBInput.classList.add('hidden');
                }
            }

            // Panggil fungsi toggleHargaInputs saat nilai dropdown kategori berubah
            kategoriSelect.addEventListener('change', toggleHargaInputs);

            // Panggil fungsi toggleHargaInputs saat halaman dimuat
            toggleHargaInputs();
        });
    </script>
@endsection


</x-app-layout>