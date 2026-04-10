<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; 
use App\Models\Peminjaman; // Tambahin ini biar bisa akses tabel peminjaman

class BukuController extends Controller
{
    // 1. TAMPILIN SEMUA DATA (DASHBOARD)
    public function index()
    {
        $bukus = Buku::all(); 

        // Ambil data peminjaman buat ditampilin di halaman peminjaman
        $peminjamans = Peminjaman::with('buku')->get(); 

        // Cek siapa yang login biar halamannya bener
        if (session('role') === 'petugas') {
            // Kalau petugas, arahin ke folder backend
            return view('backend.petugas.databuku', compact('bukus'));
        }

        // Kalau request datanya buat halaman peminjaman anggota
        if (request()->is('peminjaman')) {
            return view('peminjaman', compact('peminjamans'));
        }

        // Kalau anggota, tampilin yang banyak gambar bukunya (halaman utama)
        return view('halamanbuku', compact('bukus'));
    }

    // 2. SIMPAN DATA BARU (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required|unique:bukus,id_buku',
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|numeric',
            'kategori' => 'nullable', // Tambahan validasi kategori
            'gambar' => 'nullable',   // Tambahan validasi gambar
        ]);

        Buku::create([
            'id_buku' => $request->id_buku,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'kategori' => $request->kategori, // Pastikan kategori ikut kesimpan
            'gambar' => $request->gambar,     // Pastikan nama file gambar ikut kesimpan
        ]);

        return redirect('/databuku')->with('success', 'Buku baru berhasil ditambahin!');
    }

    // 3. LIHAT DETAIL BUKU (READ SINGLE)
    public function show($id)
    {
        $buku = Buku::findOrFail($id);

        // Pastikan field sinkron sama kolom database lu
        $buku->id_buku = $buku->id_buku ?? '-';
        $buku->judul_buku = $buku->judul_buku ?? '-';
        $buku->pengarang = $buku->pengarang ?? '-';
        $buku->penerbit = $buku->penerbit ?? '-';
        $buku->tahun = $buku->tahun ?? '-';
        $buku->kategori = $buku->kategori ?? '-'; // Tambahan antisipasi kategori kosong
        $buku->gambar = $buku->gambar ?? 'default.jpg';

        return view('detailbuku', compact('buku'));
    }

    // 4. FORM EDIT
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('editbuku', compact('buku')); 
    }

    // 5. UPDATE DATA (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_buku' => 'required',
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|numeric',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect('/databuku')->with('success', 'Data buku berhasil diperbarui!');
    }

    // 6. HAPUS DATA (DELETE)
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect('/databuku')->with('success', 'Buku berhasil dihapus!');
    }

    // 7. PROSES PINJAM BUKU
    public function pinjam($id)
    {
        $buku = Buku::findOrFail($id);

        // MASUKIN DATA KE TABEL PEMINJAMAN
        Peminjaman::create([
            'id_buku' => $buku->id,
            'nama_peminjam' => session('nama', 'QALEA ALZAHRAZ'),
            'judul_buku' => $buku->judul_buku,
            'tanggal_pinjam' => now()->format('Y-m-d'),
            'tanggal_kembali' => now()->addDays(7)->format('Y-m-d'), // Jatuh tempo 7 hari
            'status' => 'Dipinjam'
        ]);
        
        return redirect('/halamanbuku')->with('success', 'Buku ' . $buku->judul_buku . ' berhasil lo pinjam! Cek menu Peminjaman ya.');
    }
}