<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function store(Request $request)
    {
        // VALIDASI
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
        ]);

        // SIMPAN KE DATABASE
        Pengembalian::create([
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);

        // REDIRECT + PESAN
        return back()->with('success', 'Buku berhasil dikembalikan!');
    }
}