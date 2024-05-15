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
use App\Http\Controllers\laporanController;
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

Route::resource('pemesanan', pemesananController::class);
Route::get('/customers', [pemesananController::class, 'index']);

Route::resource('desain', desainController::class);
Route::resource('cetak', cetakController::class);
Route::resource('finishing', finishingController::class);
Route::resource('laporan', laporanController::class);

Route::resource('customer', customerController::class);
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

require __DIR__.'/auth.php';
