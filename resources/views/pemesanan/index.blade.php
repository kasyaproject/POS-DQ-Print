<x-app-layout>
    @section('sidebar#pemesanan','bg-gray-100 dark:bg-gray-700')    

    @section('container');
        {{-- MAIN TABLE --}}
            <div class="mx-auto mt-8 max-w-7xl sm:px-6 lg:px-4">
                <div class="flex items-center justify-between my-2 sm:mx-8 max-sm:px-2">            
                    <form action="{{ route('pemesanan.index') }}" method="GET" class="max-sm:w-60 sm:w-96">  
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
                    <a href="{{ route('pemesanan.create') }}">
                        <button type="button" class="mt-1 mb-2 text-sm font-medium text-center text-white rounded-lg shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 sm:px-2 sm:py-2 me-2">
                            <span class="px-2 py-8 max-sm:hidden">
                                Tambah
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 m-4 bi bi-person-fill-add sm:hidden" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                            </svg>
                        </button>
                    </a>                    
                </div>
                <div class="mx-2 my-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-center text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No. Invoice
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Customer
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Produk
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Qty
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Jadi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Waktu Jadi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($order->isEmpty())
                                    <tr>
                                        <td colspan="7" class="h-40 py-4 text-center">Tidak ada Data Pemesanan yang ditemukan.</td>
                                    </tr>
                                @else
                                    @foreach ($order as $data)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $data->invoiceinfo->no_invoice }} {{-- nomer invoice --}}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $data->Customer->nama_cust }} {{-- nama cust --}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $data->nama_produk }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $data->qty }}
                                            </td>
                                            <td class="px-6 py-4 font-semibold dark:text-gray-300">
                                                {{ $data->statusOrder->info_status }} 
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $data->invoiceinfo->tanggal_jadi }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $data->invoiceinfo->waktu_jadi }}
                                            </td>
                                            <td class="flex items-center justify-center px-6 py-4 text-center">
                                                @if ($data->statusOrder->info_status == "Menunggu Pembayaran")
                                                    <button data-modal-target="proses-modal-{{ $data->id }}" data-modal-toggle="proses-modal-{{ $data->id }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-700 to-blue-500 group-hover:from-blue-700 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800" type="button">
                                                        <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                            <span class="m-2 max-sm:hidden">
                                                                Proses
                                                            </span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="w-4 h-4 m-1 bi bi-pen-fill sm:hidden" viewBox="0 0 16 16">
                                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                @endif                                                
                                                <button data-modal-target="detail-modal-{{ $data->id }}" data-modal-toggle="detail-modal-{{ $data->id }}" onclick="showPreorderDetails({{ $data->id }})" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-1 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-700 to-green-500 group-hover:from-green-700 group-hover:to-green-500 hover:text-white dark:text-white focus:ring-1 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800" type="button">
                                                    <div class="relative px-2 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                        <span class="m-2 max-sm:hidden">
                                                            Detail
                                                        </span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="w-4 h-4 m-1 bi bi-pen-fill sm:hidden" viewBox="0 0 16 16">
                                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
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
            </div>
        {{-- MAIN TABLE END --}}

        {{-- Detail modal Preorder --}}
        @foreach ($order as $data)
            <div id="detail-modal-{{ $data->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-6xl max-h-full p-4">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-10 py-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl text-gray-900 dark:text-white">
                                    Detail Pesanan
                                </h3>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    {{ $data->invoiceinfo->no_invoice }}
                                </h3>                                               
                            </div>                    
                            <!-- Modal body -->
                            <div class="flex justify-between p-5">
                                <div class="w-full p-2 bg-yellow- ">
                                    <table class="w-full font-light dark:text-white">
                                        <tr class="text-lg">
                                            <td class="font-bold w-52">Penanggung Jawab</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td class="font-bold">: Andika</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="w-full p-2 pl-32 bg-blue-">
                                    <table class="w-full font-normal dark:text-white">
                                        <tr class="text-lg">
                                            <td class="font-bold w-52">Customer</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>: {{ $data->Customer->nama_cust }}</td>
                                        </tr>
                                        <tr>
                                            <td>No Tlp</td>
                                            <td>: {{ $data->Customer->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Produk</td>
                                            <td>: {{ $data->kodeProduk->nama_produk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td>: {{ $data->qty }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ukuran</td>
                                            <td>: {{ $data->panjang }} x {{ $data->lebar }}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga Satuan</td>
                                            <td>: Rp.{{ $data->harga_satuan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Harga</td>
                                            <td>: Rp.{{ $data->harga_total }}</td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Jadi</td>
                                            <td>: {{ $data->invoiceinfo->tanggal_jadi }} {{ $data->invoiceinfo->waktu_jadi }}</td>
                                        </tr>
                                    </table>
                                </div>                        
                            </div>
                        
                        <!-- Modal footer -->                    
                        <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                            <div class="relative w-full overflow-x-auto">
                                <h3 class="px-4 pb-4 text-lg text-gray-900 dark:text-white">Status Pesanan : <label class="text-base text-blue-400">{{ $data->statusOrder->info_status }}</label></h3>
                                <table class="w-full text-sm text-center text-gray-500 rtl:text-right dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-600 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Penanggung jawab
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                waktu
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($data->statusOrder->id_finishing))
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="px-6 py-4">
                                                    Selesai Finishing
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="finishingName-{{ $data->id }}"></span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="finishingWaktu-{{ $data->id }}"></span>
                                                </td>
                                            </tr>
                                        @endif                                    
                                        @if (!empty($data->statusOrder->id_operator))
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="px-6 py-4">
                                                    Selesai Cetak pesanan
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="operatorName-{{ $data->id }}"></span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="operatorWaktu-{{ $data->id }}"></span>
                                                </td>
                                            </tr>
                                        @endif                                    
                                        @if (!empty($data->statusOrder->id_design))
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="px-6 py-4">
                                                    Selesai Desain
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="desainName-{{ $data->id }}"></span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="desainWaktu-{{ $data->id }}"></span>
                                                </td>
                                            </tr>
                                        @endif                                    
                                        @if (!empty($data->statusOrder->id_kasir))
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="px-6 py-4">
                                                    Melakukan Pembayaran
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="kasirName-{{ $data->id }}"></span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span id="kasirWaktu-{{ $data->id }}"></span>
                                                </td>
                                            </tr>
                                        @else
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td colspan="3" class="h-20 py-4 text-center">MENUNGGU PEMBAYARAN.</td>
                                            </tr>
                                        @endif                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Proses modal Preorder --}}
        @foreach ($order as $data)            
            <div id="proses-modal-{{ $data->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full p-4">
                    <!-- Modal content -->
                    <form action="{{ route('pemesanan.update', ['id' => $data->id]) }}" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        @csrf
                        @method('PUT')
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                {{ $data->invoiceinfo->no_invoice }}
                            </h3>
                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="proses-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 space-y-4 md:p-5">
                            <p class="text-xl font-semibold text-black dark:text-white">
                                Melanjutkan proses preorder ke tahap desain.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Pastikan bahwa Customer sudah melakukan pembayaran dengan benar.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ya, Lanjutkan</button>
                            <button data-modal-hide="proses-modal-{{ $data->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batalkan</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        
        <script>
            function showPreorderDetails(id) {
                const kasirNameId = document.getElementById('kasirName');
                $.ajax({
                    url: `/pj/${id}`,
                    method: 'GET',
                    success: function(data) {
                        // Menetapkan nilai menggunakan ID yang berasal dari data
                        $(`#kasirName-${id}`).text(data.status_order && data.status_order.kasir ? data.status_order.kasir.nama : 'N/A');
                        $(`#kasirWaktu-${id}`).text(data.status_order && data.status_order.waktu_bayar ? data.status_order.waktu_bayar : 'N/A');

                        $(`#desainName-${id}`).text(data.status_order && data.status_order.desain ? data.status_order.desain.nama : 'N/A');
                        $(`#desainWaktu-${id}`).text(data.status_order && data.status_order.waktu_design ? data.status_order.waktu_design : 'N/A');

                        $(`#operatorName-${id}`).text(data.status_order && data.status_order.operator ? data.status_order.operator.nama : 'N/A');
                        $(`#operatorWaktu-${id}`).text(data.status_order && data.status_order.waktu_operator ? data.status_order.waktu_operator : 'N/A');
                        
                        $(`#finishingName-${id}`).text(data.status_order && data.status_order.finishing ? data.status_order.finishing.nama : 'N/A');
                        $(`#finishingWaktu-${id}`).text(data.status_order && data.status_order.waktu_finishing ? data.status_order.waktu_finishing : 'N/A');
                        
                        // console.log('Kasir waktu:', kasirName);
                        // console.log('Desain waktu:', desainName);
                        // console.log('Operator waktu:', operatorName);
                        // console.log('Finishing waktu:', finishingName);
                    },
                    error: function(error) {
                        console.error('Error fetching preorder details:', error);
                    }
                });
            }
        </script>
    @endsection   
</x-app-layout>