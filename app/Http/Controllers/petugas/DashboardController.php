<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard petugas.
     */
    public function index()
{
    // Manggil file yang ada di folder resources/views/backend/petugas/dashboardpetugas.blade.php
    return view('backend.petugas.dashboardpetugas');
}
}