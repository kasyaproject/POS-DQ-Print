<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\desainController;
use App\Http\Controllers\cetakController;
use App\Http\Controllers\finishingController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\pengaturanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [dashboardController::class, 'index']);

// ROUTE HALAMAN PEMESANAN
Route::resource('pemesanan', pemesananController::class);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');
Route::get('/pj/{id}', [PemesananController::class, 'getPj'])->name('api.preorders.show');

// ROUTE UNTUK MENCARI CUST DAN PRODUK PADA SAAT MEMBUAT PREORDER
Route::get('/customers', [pemesananController::class, 'create']);
Route::get('/get-products/{kategori}', [pemesananController::class, 'getProductsByKategori']);
Route::get('/get-harga-produk/{nama_produk}', [pemesananController::class, 'getHargaProduk']);

// ROUTE HALAMAN DESAIN
Route::resource('desain', desainController::class);
Route::put('/desain/{id}', [desainController::class, 'update'])->name('desain.update');

// ROUTE HALAMAN CETAK
Route::resource('cetak', cetakController::class);
Route::put('/cetak/{id}', [cetakController::class, 'update'])->name('cetak.update');

// ROUTE HALAMAN FINISHING
Route::resource('finishing', finishingController::class);
Route::put('/finishing/{id}', [finishingController::class, 'update'])->name('finishing.update');

// ROUTE HALAMAN INVOICE
Route::resource('invoice', invoiceController::class);
Route::get('/invoices/{url}/{id}', [InvoiceController::class, 'show'])->name('invoice.detail');
Route::get('/invoices/cetak/{url}/{id}', [InvoiceController::class, 'generatePdf'])->name('invoice.cetak');

// ROUTE HALAMAN CUSTOMER
Route::resource('customer', customerController::class);

// ROUTE HALAMAN PRODUK
Route::resource('produk', produkController::class);

// Rute khusus untuk opname stok
Route::post('/produk/opname', [produkController::class, 'opname'])->name('produk.opname');
Route::resource('pengguna', penggunaController::class);
Route::resource('pengaturan', pengaturanController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
