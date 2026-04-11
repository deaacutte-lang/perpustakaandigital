<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;
use App\Models\Anggota; 

class AnggotaController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel anggotas
        $users = Anggota::all(); 
        
        // Mengirim data ke view dataanggota di folder backend/petugas
        return view('backend.petugas.dataanggota', compact('users'));
    }
}