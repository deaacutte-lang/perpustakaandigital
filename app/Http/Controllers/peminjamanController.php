<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // tampil halaman
    public function index()
    {
        return view('peminjaman');
    }

    // proses form
    public function store(Request $request)
    {
        // validasi sederhana
        $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
        ]);

        // sementara (belum database)
        $data = $request->all();

        // debug (optional)
        // dd($data);

        return redirect('/peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan');
    }
}