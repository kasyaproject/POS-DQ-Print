<x-app-layout>
    @section('sidebar#pengaturan','bg-gray-100 dark:bg-gray-700')    

    @section('container');
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="flex items-center justify-between mb-10 my-2 sm:mx-16 max-sm:px-2"> 
                <p class="text-5xl font-bold dark:text-white">Pengaturan</p>    
                <button data-modal-target="static-modal-pesanan" data-modal-toggle="static-modal-pesanan" type="button" class="text-white mt-1 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm text-center sm:px-2 sm:py-2 me-2 mb-2">
                    <span class="max-sm:hidden px-2 py-8">
                        Pesanan baru
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill-add w-4 h-4 m-4 sm:hidden" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                    </svg>
                </button>          
            </div>
        </div>

        {{-- Modal Tambah --}}
        <div id="static-modal-pesanan" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-6xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Buat produk baru
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="static-modal-pesanan">
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
                            Buat Pesanan Baru
                        </button>
                    </form>                
                </div>
            </div>
        </div> 
        {{-- END Modal Tambah  --}}
    @endsection
</x-app-layout>