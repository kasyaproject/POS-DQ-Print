<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Invoice | Daqu Printing</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('/build/LEMONMILK-RegularItalic.otf') }}" rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @font-face {
            font-family: 'LemonMilk';
            src: url('{{ asset('/build/LEMONMILK-RegularItalic.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
        .font-cursive {
            font-family: 'Bold';
        }
        .tittle{
            background: linear-gradient(90deg, yellow, red,blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'LemonMilk';
        }
    </style>
</head>
<body>
    {{-- NavBar --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-800">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 py-2 mx-auto">   
            <a href="{{ route('invoice.index') }}" class="flex items-center space-x-3 md:space-x-0 rtl:space-x-reverse">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 bi bi-arrow-left fill-white" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>
            </a>     
            @foreach ($invoices as $data)     
                <div class="flex items-center space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="{{ route('invoice.cetak', ['url' => $data->URL, 'id'=> $data->id]) }}" class="text-white font-bold bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:ring-blue-300 rounded-lg text-sm px-5 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Cetak
                    </a>
                </div>
            @endforeach
        </div>
    </nav>

    {{-- MainBody --}}
    <div class="mx-auto mb-14 max-w-7xl sm:px-6 lg:px-10">
        @foreach ($invoices as $data)        
        {{-- Header --}}
        <div class="bg-blue-">
            <div class="flex items-center justify-between mt-8 mb-2 sm:mx-8 max-sm:px-2"> 
                <div class="flex text-4xl font-bold tittle">
                    <p class="text-black">DAQU PRINTING</p>
                </div>    
                <div class="text-lg font-semibold text-right">
                    <p class="tracking-widest text-black">INVOICE</p>
                    <p class="-mt-3 font-light tracking-widest text-blue-400">{{ $data->no_invoice }}</p>
                </div> 
            </div>

            <div class="flex justify-between mb-2 mt-14 sm:mx-10 max-sm:px-8"> 
                <div class="w-1/2">
                    <p class="mb-1 font-bold text-black">PENANGGUNG JAWAB</p>
                    <table class="text-sm">
                        <tr>
                            <td>Nama Penanggung jawab</td>
                            <td class="px-4">:</td>
                            <td class="font-semibold">{{ $data->user->nama }}</td>
                        </tr>
                    </table>
                </div> 
                <div class="w-1/2 pl-40">
                    <p class="mb-1 font-bold text-black">CUSTOMER</p>
                    <table class="text-sm">
                        <tr>
                            <td>Nama Customer</td>
                            <td class="px-4">:</td>
                            <td class="font-semibold">{{ $data->Customer->nama_cust }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td class="px-4">:</td>
                            <td class="font-semibold">{{ \Carbon\Carbon::parse($data->created_at)->format('d - M - Y') }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td class="px-4">:</td>
                            <td class="font-semibold">{{ $data->Customer->no_telp }}</td>
                        </tr>
                    </table>
                </div> 
            </div>
        </div>        

        {{-- Body --}}
        <div class="bg-yellow-">
            <div class="flex items-center justify-between mt-8 sm:mx-10 max-sm:px-2">
                {{-- Table pesanan --}}
                <div class="relative w-full overflow-x-auto">                    
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-xs font-bold text-black uppercase bg-gray-200">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga Satuan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Harga
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach ($preorders as $item)
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                        <p class="text-base font-semibold tracking-wider text-blue-700 ">{{ $item->nama_produk }} ( {{ $item->panjang }}x{{ $item->lebar }} )</p>
                                        <p class="text-xs text-gray-700">finishing : {{ $item->keterangan }}</p>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->qty }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp {{ $item->harga_satuan }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp {{ $item->harga_total }}
                                    </td>
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>                
            </div>

            <div class="flex justify-between mt-8 mb-2 sm:mx-10 max-sm:px-2"> 
                <div class="w-1/2"></div> 
                <div class="w-1/2 pl-40 pr-10">
                    <div class="flex justify-between mb-3 font-semibold">
                        <p>Total Harga ( {{ $totalqty }} Barang )</p>
                        <p>Rp {{ $totalpembelian }}</p>
                    </div>
                    <div class="flex justify-between mb-1 text-sm ">
                        <p>Pengiriman</p>
                        <p>Rp -</p>
                    </div>
                    <div class="flex justify-between mb-1 text-sm ">
                        <p>Jumlah Bayar</p>
                        <p>Rp -</p>
                    </div>
                    <div class="flex justify-between mb-3 text-sm ">
                        <p>Diskon</p>
                        <p>Rp -</p>
                    </div>
                    <div class="flex justify-between mb-2 font-semibold ">
                        <p>Total Belanja</p>
                        <p>Rp {{ $totalpembelian }}</p>
                    </div>
                    <div class="flex justify-between mb-2 font-semibold ">
                        <p>Uang Belanja</p>
                        <p>Rp {{ $totalpembelian }}</p>
                    </div>
                    <div class="flex justify-between text-sm ">
                        <p>Kembalian</p>
                        <p>Rp -</p>
                    </div>
                </div> 
            </div>
        </div>     
        
        <div class="flex justify-between p-4 mt-6 mb-2 border-t-2 sm:mx-10 max-sm:px-2"> 
            <div class="w-1/2">
                <p class="text-sm font-bold text-gray-500">Kurir : </p>
                <p class="font-bold text-black ">-</p>
            </div> 
            <div class="w-1/2 pl-40">
                <p class="text-sm font-bold text-gray-500">Metode Pembayaran : </p>
                <p class="font-bold text-black ">Cash</p>
            </div> 
        </div>

        {{-- FOOTER --}}
        <div class="">
            <div class="flex items-center justify-between mt-8 mb-2 sm:mx-10 max-sm:px-2">
                <div class="text-xs text-gray-700">
                    <p>Invoice ini sah dan dibuat oleh komputer</p>
                    <p>Silakan hubungi <label class="text-sm font-semibold text-blue-400">Daqu Printing</label> apabila kamu membutuhkan bantuan.</p>
                </div>
                <div class="text-xs text-gray-700">
                    <p>Terakhir diupdate: <label class="text-sm">{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y H:i') }} WIB</label></p>
                </div>
            </div>
        </div>

        @endforeach        
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
</body>
</html>
    