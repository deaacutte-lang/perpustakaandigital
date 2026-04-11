<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; 
use App\Models\Peminjaman; // Tambahin ini biar bisa akses tabel peminjaman
use Illuminate\Support\Facades\Storage; // Tambahan untuk urusan hapus/simpan file

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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahan validasi file gambar
        ]);

        // LOGIKA UPLOAD GAMBAR BARU
        $nama_file = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/cover', $nama_file); // Simpan ke storage/app/public/cover
        }

        Buku::create([
            'id_buku' => $request->id_buku,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'kategori' => $request->kategori, // Pastikan kategori ikut kesimpan
            'gambar' => $nama_file,     // Pastikan nama file gambar hasil upload kesimpan
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
        
        // Cek apakah ada file gambar, kalau nggak pake placeholder
        $buku->gambar = $buku->gambar ? asset('storage/cover/' . $buku->gambar) : 'https://placehold.co/400x600?text=No+Cover';

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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $buku = Buku::findOrFail($id);
        $data = $request->all();

        // LOGIKA UPDATE GAMBAR (Hapus yang lama kalau upload baru)
        if ($request->hasFile('gambar')) {
            if ($buku->gambar) {
                Storage::delete('public/cover/' . $buku->gambar);
            }
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/cover', $nama_file);
            $data['gambar'] = $nama_file;
        }

        $buku->update($data);

        return redirect('/databuku')->with('success', 'Data buku berhasil diperbarui!');
    }

    // 6. HAPUS DATA (DELETE)
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        // Hapus file gambarnya juga di folder biar gak menuhin storage
        if ($buku->gambar) {
            Storage::delete('public/cover/' . $buku->gambar);
        }

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

    // 8. TAMPILIN DATA PEMINJAMAN KHUSUS PETUGAS (TAMBAHAN BARU)
    public function dataPeminjaman()
    {
        // Ambil data yang statusnya 'Dipinjam' aja biar rapi
        $peminjamans = Peminjaman::where('status', 'Dipinjam')->get(); 
        
        // Kirim ke view petugas peminjaman
        return view('backend.petugas.datapeminjaman', compact('peminjamans'));
    }

    // 9. TAMPILIN DATA PENGEMBALIAN KHUSUS PETUGAS (TAMBAHAN BIAR GAK SAMA)
    public function dataPengembalian()
    {
        // Ambil data yang statusnya sudah 'Dikembalikan'
        $peminjamans = Peminjaman::where('status', 'Dikembalikan')->get(); 
        
        // Kirim ke view petugas pengembalian
        return view('backend.petugas.datapengembalian', compact('peminjamans'));
    }
}