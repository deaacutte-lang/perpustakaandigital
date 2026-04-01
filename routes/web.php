<?php

use App\Http\Controllers\Transaksi1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
    Route::view('/login','login');
    Route::view('/dasboard','dasboard');
    Route::view('/register','register');
    Route::view('/peminjaman','peminjaman');
    Route::view('/peminjaman1','peminjaman1');
   Route::view('/transaksi1', 'transaksi1');

Route::post('/transaksi', [Transaksi1Controller::class, 'store'])
    ->name('transaksi.store');