<?php


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
use App\Http\Controllers\ProfileController;
use App\Models\Admin;
use App\Models\Artikel;
use App\Models\Booking;
use App\Models\kelolaUser;
use App\Models\Layanan;
use App\Models\Owner;
use App\Models\Pengguna;
use App\Models\Profil;
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
Route::get('/artikel/detail', [ArtikelController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/create', [BarangController::class, 'create'])->name('admin.store');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/homeAdmin', [AdminController::class, 'index'])->name('homeAdmin');
Route::get('/laporan', [OwnerController::class, 'index'])->name('laporan');
Route::get('/kelolaUser', [KelolaUserController::class, 'index'])->name('kelolaUser');
Route::get('/kelolaKasir', [KelolaKasirController::class, 'index'])->name('kelolaKasir');

Route::get('/kelolaMekanik', [KelolaMekanikController::class, 'index'])->name('kelolaMekanik');


Route::middleware('auth')->group(function () {
    Route::get('/admin/editPengguna', [AdminController::class, 'edit'])->name('admin.editPengguna');
    Route::patch('/admin/updatePengguna', [AdminController::class, 'update'])->name('admin.updatePengguna');
});

// Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
// Route::get('/profil/{id}', [ProfilController::class, 'show'])->name('profil');

// Menampilkan form booking (GET)
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');

// Menyimpan booking (POST)
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Menampilkan semua booking (GET)
Route::get('/kelolaBooking', [BookingController::class, 'index'])->name('kelolaBooking');

// Menampilkan profil pengguna berdasarkan ID booking (GET)
Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking.show');



//CRUD
Route::get('/create', [PenggunaController::class, 'create'])->name('user.create');
Route::post('/store', [PenggunaController::class, 'store'])->name('user.store');

// Route untuk Edit Kasir
Route::get('/admin/edit/{id}', [KelolaKasirController::class, 'edit'])->name('admin.edit');

// Route untuk Hapus Kasir
Route::delete('/admin/delete/{id}', [KelolaKasirController::class, 'destroy'])->name('admin.delete');

// Route untuk Edit Mekanik
Route::get('/mekanik/edit/{id}', [AdminController::class, 'edit'])->name('mekanik.edit');

// Route untuk Hapus Mekanik
Route::delete('/mekanik/{id}', [AdminController::class, 'destroy'])->name('mekanik.destroy');

// Route untuk Edit User
Route::get('/user/edit/{id}', [AdminController::class, 'editUser'])->name('user.edit');

// Route untuk Hapus User
Route::delete('/user/{id}', [AdminController::class, 'destroyUser'])->name('user.destroy');



Route::put('/user/{id}', [AdminController::class, 'updateUser'])->name('user.update');
