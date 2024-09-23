<x-app-layout>
    @section('sidebar#pemesanan','bg-gray-100 dark:bg-gray-700')    

    @section('container');
        <div class="mx-auto sm:px-6 lg:px-4">
            <p class="text-3xl font-semibold dark:text-white">Order Baru</p>
            <div class="flex items-center justify-between my-2 sm:mx-8 max-sm:px-2">            
                <form action="{{ route('pemesanan.store') }}" method="POST" class="w-full">
                @csrf  
                    <table class="w-full mx-4 mt-8 mb-4 font-semibold text-white">
                        <tr>
                            <td class="w-[16vw] py-1">No. Incoive</td>
                            <td>: {{ $invoice }}</td>
                            <td><input type="text" hidden value="{{ $invoice }}" name="no_invoice"></td>
                            <td><input type="text" hidden value="{{ $kode_resi }}" name="kode_resi"></td>
                        </tr>
                        <tr>
                            <td class="w-[16vw] py-1">Penanggung Jawab</td>
                            <td>: </td>
                        </tr>
                    </table>
                    <p class="w-full h-0.5 bg-white mb-4 rounded-md"></p>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <!-- Dropdown menu -->
                        <div class="relative col-span-2 mb-8 namaCust">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Customer</label>
                            <div class="flex">
                                <input 
                                    type="text" 
                                    id="dropdownSearch" 
                                    placeholder="Search..." 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required
                                    autocomplete="off"
                                />
                                <ul 
                                    id="dropdownOptions" 
                                    class="absolute z-10 hidden w-full overflow-auto bg-white border border-gray-300 rounded-md shadow-lg mt-11 max-h-60"
                                >
                                    <!-- Options will be populated here by JavaScript -->
                                </ul>
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white inline-flex justify-center items-center bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm ml-2 px-3.5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    <p class="text-xl font-semibold">+</p>
                                </button>
                            </div>
                            
                            <input class="hidden" id="selectedCustomerId" name="id_cust">
                        </div>
                        <div class="col-span-2 pemesanan">
                            <div class="grid grid-cols-4 col-span-2 gap-4 form" data-form-index="0">
                                <div class="col-span-2">
                                    <label for="kategori" class="block text-sm font-medium text-gray-900 dark:text-white">Kategori pesanan</label>
                                    <div scope="row" class="py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <select id="kategori" name="produk[0][kategori]" class="bg-white border border-white text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" selected disabled>Pilih kategori produk</option>
                                            <option value="A3+">A3+</option>
                                            <option value="Outdoor">Outdoor</option>
                                            <option value="Indoor">Indoor</option>
                                        </select>
                                        @error('kategori')
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <label for="id_produk" class="block text-sm font-medium text-gray-900 dark:text-white">Produk pesanan</label>
                                    <div scope="row" class="py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <select id="id_produk" name="produk[0][id_produk]" class="bg-white border border-white text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" selected disabled>Pilih produk pesanan</option>
                                        </select>
                                        @error('id_produk')
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
                                    <input type="text" readonly name="produk[0][harga]" id="harga" value="{{ old('harga') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan harga produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    @error('harga')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="qty" id="qtyLabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk (max = -)</label>
                                    <input type="text" readonly name="produk[0][qty]" id="qty" value="{{ old('qty') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan qty produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    @error('qty')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>    
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="panjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Panjang Produk</label>
                                    <input type="text" readonly name="produk[0][panjang]" id="panjang" value="{{ old('panjang') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Panjang produk" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '');">
                                    @error('panjang')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>  
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="lebar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lebar Produk</label>
                                    <input type="text" readonly name="produk[0][lebar]" id="lebar" value="{{ old('lebar') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan lebar produk" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '');">
                                    @error('lebar')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-span-4">
                                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Produk</label>
                                    <input type="text" readonly name="produk[0][keterangan]" id="keterangan" value="{{ old('keterangan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan keterngan produk">
                                    @error('keterangan')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex justify-end col-span-4 col-end-5 px-4">
                                    <button type="button" name="add" id="add" class="font-semibold text-blue-700 underline text-end">+ tambah pesanan</button>
                                </div>
                            </div>                            
                        </div>
                        
                        
                        <div class="grid grid-cols-2 col-span-2 gap-4 mt-8 mb-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggaljadi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih tanggal jadi</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input datepicker-autohide type="text" datepicker datepicker-format="MM / dd / yyyy" id="tanggaljadi" name="tanggaljadi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required placeholder="Pilih tanggal jadi">
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select time:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input type="time" id="jamjadi" name="jamjadi" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" min="09:00" max="20:00" value="00:00" required />
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="col-span-2 text-white inline-flex justify-center items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Buat pesanan
                        </button>
                    </div>
                </form>
            </div>
        </div> 

        <!-- Main modal Tabah Customer -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full p-4">
                <!-- Modal content -->
                <form action="{{ route('customer.store') }}" method="POST" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    @csrf
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Buat Customer Baru
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div action="{{ route('customer.store') }}" method="POST" class="p-4 md:p-5">                        
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="col-span-2">
                                <label for="nama_cust" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Customer</label>
                                <input type="text" name="nama_cust" id="nama_cust" value="{{ old('nama_cust') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nama customer" required="" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '');">
                                @error('nama_cust')
                                    <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Telpon Customer</label>
                                <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan nomer telpon customer" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                @error('no_telp')
                                    <p id="filled_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Tambah Customer Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            var i = 0;
            // Function to initialize form event listeners and logic
            function initializeForm(formElement) {
                const formIndex = formElement.getAttribute('data-form-index');
                const kategoriSelect = formElement.querySelector(`#kategori`);
                const produkSelect = formElement.querySelector(`#id_produk`);
                const hargaInput = formElement.querySelector(`#harga`);
                const qtyInput = formElement.querySelector(`#qty`);
                const qtyLabel = formElement.querySelector(`#qtyLabel`);
                const panjangInput = formElement.querySelector(`#panjang`);
                const lebarInput = formElement.querySelector(`#lebar`);
                const keteranganInput = formElement.querySelector(`#keterangan`);

                function updateProdukOptions() {
                    const selectedKategori = kategoriSelect.value;
                    fetch(`/get-products/${selectedKategori}`)
                        .then(response => response.json())
                        .then(data => {
                            produkSelect.innerHTML = '<option value="" selected disabled>Pilih produk pesanan</option>';
                            data.forEach(produk => {
                                const option = document.createElement('option');
                                option.value = produk.kode_produk;
                                option.textContent = produk.nama_produk;
                                produkSelect.appendChild(option);
                            });
                        })
                        .catch(error => console.error('Error fetching products:', error));
                }

                kategoriSelect.addEventListener('change', updateProdukOptions);

                produkSelect.addEventListener('change', function() {
                    const selectedProduct = produkSelect.value;
                    const selectedKategori = kategoriSelect.value;

                    if (selectedProduct) {
                        fetch(`/get-harga-produk/${selectedProduct}`)
                            .then(response => response.json())
                            .then(produk => {
                                if (produk.harga !== null) {
                                    if (selectedKategori === "A3+") {
                                        hargaInput.value = produk.harga;
                                        hargaInput.readOnly  = false;
                                        qtyInput.value = produk.qty;
                                        qtyInput.readOnly  = false;

                                        qtyLabel.textContent = `Qty Produk (max = ${produk.qty})`;
                                        panjangInput.value = '1';
                                        panjangInput.readOnly  = true;
                                        lebarInput.value = '1';
                                        lebarInput.readOnly  = true;
                                        keteranganInput.readOnly  = false;
                                    } else {
                                        hargaInput.value = produk.harga;
                                        hargaInput.readOnly  = false;
                                        qtyInput.readOnly  = false;

                                        qtyLabel.textContent = `Qty Produk`;
                                        qtyInput.value = '1';
                                        panjangInput.value = '1';
                                        panjangInput.readOnly  = false;
                                        lebarInput.value = '1';
                                        lebarInput.readOnly  = false;
                                        keteranganInput.readOnly  = false;
                                    }

                                } else {
                                    hargaInput.value = '';
                                    qtyInput.value = '';

                                    qtyLabel.textContent = `Qty Produk (max = 0)`;
                                }
                            })
                            .catch(error => {
                                console.error('Error fetching harga:', error);
                                hargaInput.value = '';
                                qtyInput.value = '';

                                qtyLabel.textContent = `Qty Produk (max = 0)`;
                            });
                    } else {
                        hargaInput.value = '';
                        qtyInput.value = '';

                        qtyLabel.textContent = `Qty Produk (max = 0)`;
                    }
                });

                produkSelect.dispatchEvent(new Event('change'));
            }

            document.addEventListener('DOMContentLoaded', function() {
                // Elements untuk dropdown nama cust
                const dropdownSearch = document.getElementById('dropdownSearch');
                const dropdownOptions = document.getElementById('dropdownOptions');
                const selectedCustomerId = document.getElementById('selectedCustomerId');
        
                // memunculkan dropdown nama cust
                dropdownSearch.addEventListener('focus', () => {
                    dropdownOptions.classList.remove('hidden');
                    filterFunction();
                });
        
                // menyembunyikan dropdown nama customer
                document.addEventListener('click', (event) => {
                    if (!event.target.closest('.namaCust')) {
                        dropdownOptions.classList.add('hidden');
                    }
                });
        
                // Fetch and filter the dropdown options based on the search input
                dropdownSearch.addEventListener('input', filterFunction);

                function filterFunction() {
                    const searchQuery = dropdownSearch.value;
        
                    axios.get('/customers', {
                        params: { search: searchQuery }
                    })
                    .then(response => {
                        const data = response.data;
                        dropdownOptions.innerHTML = data.map(customer => `
                            <li class="px-3 py-2 cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                            data-id="${customer.id}" data-name="${customer.nama_cust} - ${customer.no_telp}">
                                ${customer.nama_cust} - ${customer.no_telp}
                            </li>
                        `).join('');
        
                        // Event Listenenr untuk pilihan option
                        document.querySelectorAll('#dropdownOptions li').forEach(option => {
                            option.addEventListener('click', function() {
                                const name = this.getAttribute('data-name');
                                const id = this.getAttribute('data-id');
                                dropdownSearch.value = name;
                                selectedCustomerId.value = id;
                                dropdownOptions.classList.add('hidden');
                            });
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
                }

                $('#add').click(function(){
                    ++i;
                    $('.pemesanan').append(`
                    <div class="grid grid-cols-4 col-span-2 gap-4 form" data-form-index="`+i+`">
                        <div class="col-span-2">
                                    <label for="kategori" class="block text-sm font-medium text-gray-900 dark:text-white">Kategori pesanan</label>
                                    <div scope="row" class="py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <select id="kategori" name="produk[`+i+`][kategori]" class="bg-white border border-white text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" selected disabled>Pilih kategori produk</option>
                                            <option value="A3+">A3+</option>
                                            <option value="Outdoor">Outdoor</option>
                                            <option value="Indoor">Indoor</option>
                                        </select>
                                        @error('kategori')
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <label for="id_produk" class="block text-sm font-medium text-gray-900 dark:text-white">Produk pesanan</label>
                                    <div scope="row" class="py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <select id="id_produk" name="produk[`+i+`][id_produk]" class="bg-white border border-white text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="" selected disabled>Pilih produk pesanan</option>
                                        </select>
                                        @error('id_produk')
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
                                    <input type="text" name="produk[`+i+`][harga]" id="harga" value="{{ old('harga') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan harga produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    @error('harga')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="qty" id="qtyLabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty Produk (max = -)</label>
                                    <input type="text" name="produk[`+i+`][qty]" id="qty" value="{{ old('qty') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan qty produk" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    @error('qty')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>  
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="panjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Panjang Produk</label>
                                    <input type="text" readonly name="produk[`+i+`][panjang]" id="panjang" value="{{ old('panjang') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Panjang produk" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '');">
                                    @error('panjang')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>  
                                <div class="col-span-4 sm:col-span-1">
                                    <label for="lebar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lebar Produk</label>
                                    <input type="text" readonly name="produk[`+i+`][lebar]" id="lebar" value="{{ old('lebar') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan lebar produk" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '');">
                                    @error('lebar')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="col-span-4">
                                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Produk</label>
                                    <input type="text" name="produk[`+i+`][keterangan]" id="keterangan" value="{{ old('keterangan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan keterngan produk">
                                    @error('keterangan')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex justify-end col-span-4 col-end-5 px-4">
                                    <button type="button" name="remove" id="remove" class="font-semibold text-red-700 underline remove text-end">hapus pesanan</button>
                                </div>
                            </div> 
                    `);

                    initializeForm($('.pemesanan .form').last()[0]);
                });

                $(document).on('click', '.remove', function() {
                    $(this).closest('.form').remove();
                });

                document.querySelectorAll('.form').forEach(initializeForm);

                ///////////////////////////////// DEFAULT TANGGAL JADI & JAM JADI ///////////////////////////////////////// 
                const dateInput = document.getElementById('tanggaljadi');
                const timeInput = document.getElementById('jamjadi');
                const today = new Date();
                
                // Get month, day, and year from the date object
                const month = String(today.getMonth() + 1).padStart(2, '0');
                const day = String(today.getDate()).padStart(2, '0');
                const year = today.getFullYear();
                
                // Format the date as MMDDYYYY
                const formattedDate = `${month}${day}${year}`;
                dateInput.value = formattedDate;
                
                // Set the time input value in HH:MM format
                const formattedTime = today.toTimeString().split(' ')[0].slice(0, 5);
                timeInput.value = formattedTime;
                
                console.log(`Date: ${formattedDate}, Time: ${formattedTime}`);
                
            });
        </script>
    @endsection
</x-app-layout>