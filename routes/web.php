<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KelolaKasirController;
use App\Http\Controllers\KelolaMekanikController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OwnerController;
use App\Models\Admin;
use App\Models\Artikel;
use App\Models\Booking;
use App\Models\Layanan;
use App\Models\Owner;
use App\Models\Pengguna;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/index', [PenggunaController::class, 'index'])->name('index');
Route::get('/about', [PenggunaController::class, 'about'])->name('about');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/homeAdmin', [AdminController::class, 'index'])->name('homeAdmin');
Route::get('/laporan', [OwnerController::class, 'index'])->name('laporan');
Route::get('/kelolaUser', [KelolaUserController::class, 'index'])->name('kelolaUser');
Route::get('/kelolaKasir', [KelolaKasirController::class, 'index'])->name('kelolaKasir');
Route::get('/kelolaMekanik', [KelolaMekanikController::class, 'index'])->name('kelolaMekanik');
Route::POST('/booking', [BookingController::class, 'store'])->name('booking');
Route::get('/kelolaBooking', [BookingController::class, 'index'])->name('kelolaBooking');
