<?php

use App\Http\Controllers\Transaksi1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
    Route::view('/login','login');
    Route::view('/dasboard','dasboard');
    Route::view('/peminjaman','peminjaman');
    Route::view('/pengembalian','pengembalian');
    Route::view('/halamanbuku','halamanbuku');
    Route::view('/catatan','catatan');
    
