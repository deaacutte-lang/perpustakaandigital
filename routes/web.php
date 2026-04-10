<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- HALAMAN UTAMA & AUTH ---
Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::any('/proses-logout', [AuthController::class, 'logout'])->name('logout.proses');

// --- ROUTE UNTUK ANGGOTA (USER BIASA) ---
Route::get('/dashboard-anggota', function () {
    return view('dasboard'); 
})->name('dashboard.anggota');

// Halaman Buku Anggota (Pake Controller biar datanya muncul)
Route::get('/halamanbuku', [BukuController::class, 'index'])->name('halaman.buku');

// ROUTE DETAIL BUKU
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');

// ROUTE PROSES PINJAM BUKU (Tambahan Baru)
Route::post('/pinjam/{id}', [BukuController::class, 'pinjam'])->name('pinjam.buku');

// Update: Arahin ke Controller biar data yang dipinjam muncul di tabel
Route::get('/peminjaman', [BukuController::class, 'index'])->name('peminjaman.index');

Route::view('/pengembalian', 'pengembalian');
Route::view('/catatan', 'catatan');


// --- ROUTE UNTUK PETUGAS ---
Route::get('/dashboardpetugas', function () {
    return view('backend.petugas.dashboardpetugas');
})->name('dashboard.petugas');

// KELOLA BUKU (PETUGAS)
Route::get('/databuku', [BukuController::class, 'index'])->name('buku.tabel'); 
Route::post('/buku-store', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/buku-delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

// DATA LAINNYA (PETUGAS)
Route::get('/data-anggota', function () { 
    return view('backend.petugas.dataanggota');
})->name('data.anggota');

Route::get('/datapeminjaman', function () {
    return view('backend.petugas.datapeminjaman');
})->name('data.peminjaman');

Route::get('/datapengembalian', function () {
    return view('backend.petugas.datapengembalian');
})->name('data.pengembalian');

Route::get('/dendapetugas', function () { 
    return view('backend.petugas.dendapetugas');
})->name('denda.petugas');


// --- ROUTE PENDUKUNG ---
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/simpan-anggota', [AuthController::class, 'simpanAnggota'])->name('simpan.anggota');

Route::get('/frompeminjaman', function () {
    return view('frompeminjaman'); 
})->name('peminjaman.form');

Route::post('/peminjaman-store', function () {
    return back()->with('success', 'Data peminjaman berhasil diproses!');
})->name('peminjaman.store');


// --- FALLBACK (BIAR GAK ERROR 404 JELEK) ---
Route::fallback(function () {
    return redirect('/login');
});