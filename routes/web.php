<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\petugas\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama langsung nampilin login biar gak bingung
Route::get('/', [AuthController::class, 'index']);

// --- BAGIAN LOGIN (PENTING: JANGAN DIUBAH) ---
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// --- ROUTE VIEW BIASA ---
// (Ini file dasboard.blade.php punya lo yang buat Anggota)
Route::view('/dasboard', 'dasboard')->name('dashboard.anggota'); 

Route::view('/peminjaman', 'peminjaman');
Route::view('/pengembalian', 'pengembalian');
Route::view('/halamanbuku', 'halamanbuku');
Route::view('/catatan', 'catatan');

// Route Petugas Dashboard (Pake file view petugas, misal: dashboard_petugas)
Route::get('/dashboard-petugas', [DashboardController::class, 'index'])->name('dashboard.petugas');

// Route Denda
Route::get('/denda', function () {
    return view('denda');
});

// Route Logout
Route::get('/logout', function () {
    return redirect('/login');
});

// Contoh kalau pake closure
Route::get('/home', function () {
    return view('home');
})->name('home');

// Atau kalau pake Controller
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/simpan-anggota', [AuthController::class, 'simpanAnggota'])->name('simpan.anggota');


// --- TAMBAHAN BIAR LOGIKA ANGGOTA & LOGOUT JALAN ---

// Route Dashboard khusus Anggota (manggil file dasboard.blade.php lo)
Route::get('/dashboard-anggota', function () {
    return view('dasboard'); 
});

// Route Tampilkan Halaman Register (Ini yang tadi kurang)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// Route Proses Registrasi Anggota
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Route Logout yang bener (pake fungsi logout di Controller biar session kehapus)
Route::any('/proses-logout', [AuthController::class, 'logout'])->name('logout.proses');

