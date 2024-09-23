<x-app-layout>
    @section('sidebar#laporan','bg-gray-100 dark:bg-gray-700')    

    @section('container');
        {{-- Main Body --}}
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-4">
                <div class="flex items-center justify-between mt-8 mb-2 sm:mx-8 max-sm:px-2"> 
                    <div class="text-5xl font-bold">
                        <p class="text-black dark:text-white">Invoice</p>
                    </div>
                    <form action="{{ route('finishing.index') }}" method="GET" class="max-sm:w-60 sm:w-96">  
                        @csrf 
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" name="search" value="{{ $search }}" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-sm:px-2 sm:px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span class="max-sm:hidden">
                                    Search
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search sm:hidden" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </button>
                        </div>
                    </form>         
                </div>

                <div class="mx-2 my-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No. Invoice
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Customer
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Penanggung jawab
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($invoices->isEmpty())
                                        <tr>
                                            <td colspan="7" class="h-40 py-4 text-center">Tidak ada Data Pemesanan yang ditemukan.</td>
                                        </tr>
                                    @else
                                        @foreach ($invoices as $data)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $data->no_invoice }} {{-- nomer invoice --}}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $data->Customer->nama_cust }} {{-- nama cust --}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $data->user->nama }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="font-semibold text-white">{{ \Carbon\Carbon::parse($data->created_at)->format('H:i') }}  <label class="font-normal text-gray-200"> {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</label></p>
                                                </td>
                                                <td class="flex items-center justify-center px-6 py-4 text-center">
                                                    <a href="{{ route('invoice.detail', ['url' => $data->URL, 'id'=> $data->id]) }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800" type="button">
                                                        <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                            <span class="m-2 max-sm:hidden">
                                                                Detail
                                                            </span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="w-4 h-4 m-1 bi bi-pen-fill sm:hidden" viewBox="0 0 16 16">
                                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        {{-- Main Body END --}}
    @endsection
</x-app-layout>