<x-app-layout>
    @section('sidebar#desain','bg-gray-100 dark:bg-gray-700')    

    @section('container');
    {{-- Main Body --}}
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-4">
            <div class="flex items-center justify-between mt-8 mb-2 sm:mx-8 max-sm:px-2"> 
                <div class="text-5xl font-bold">
                    <p class="text-black dark:text-white">Desain</p>
                </div>
                <form action="{{ route('desain.index') }}" method="GET" class="max-sm:w-60 sm:w-96">  
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

    {{-- Proses Modal --}}
    @foreach ($order as $data)              
        <div id="proses-modal-{{ $data->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full p-4">
                <!-- Modal content -->
                <form action="{{ route('desain.update', ['id' => $data->id]) }}" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    @csrf
                    @method('PUT')  
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ $data->invoiceinfo->no_invoice }}
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="proses-modal-{{ $data->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 space-y-4 md:p-5">
                        <p class="text-base leading-relaxed text-black dark:text-white">
                            Upload file cetak yang sudah di acc oleh Customer.
                        </p>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="dropzone-content" class="flex flex-col items-center justify-center pt-5 pb-6">                                    
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Tiff or Pdf</p>
                                </div>
                                <input id="dropzone-file" type="file" accept="image/jpeg, image/tiff, application/pdf" class="" />
                            </label>
                        </div> 
                   </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                        <button data-modal-hide="proses-modal-{{ $data->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiff.js/2.0.0/tiff.min.js"></script>
    <script>        
        document.getElementById('dropzone-file').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const dropzoneContent = document.getElementById('dropzone-content');
    
            if (!file) {
                return;
            }
    
            const fileType = file.type;
    
            if (fileType === 'application/pdf') {
                previewPDF(file, dropzoneContent);
            } else if (fileType === 'image/tiff') {
                previewTIFF(file, dropzoneContent);
            } else {
                dropzoneContent.innerHTML = '<p>Unsupported file type.</p>';
            }
        });
    
        function previewPDF(file, container) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const pdfData = event.target.result;
    
                pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {
                    pdf.getPage(1).then(function(page) {
                        const viewport = page.getViewport({scale: 1});
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
    
                        // Calculate the scale based on height 256px
                        const scale = 256 / viewport.height;
                        const scaledViewport = page.getViewport({scale: scale});
                        canvas.height = scaledViewport.height;
                        canvas.width = scaledViewport.width;
    
                        page.render({canvasContext: context, viewport: scaledViewport}).promise.then(function() {
                            container.innerHTML = '';
                            container.appendChild(canvas);
                        });
                    });
                });
            };
            reader.readAsArrayBuffer(file);
        }
    
        function previewTIFF(file, container) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const tiffData = event.target.result;
                const tiff = new Tiff({buffer: tiffData});
                const canvas = tiff.toCanvas();
    
                // Calculate the scale based on height 256px
                const scale = 256 / canvas.height;
                canvas.width = canvas.width * scale;
                canvas.height = 256;
    
                container.innerHTML = '';
                container.appendChild(canvas);
            };
            reader.readAsArrayBuffer(file);
        }
    </script>
   
    @endsection
</x-app-layout>