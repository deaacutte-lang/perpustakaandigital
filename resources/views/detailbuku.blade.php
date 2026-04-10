<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard - Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen w-full">

    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col">
        
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">{{ session('nama', 'QALEA ALZAHRAZ') }}</p>
            <p class="text-xs text-gray-500 uppercase">{{ session('email', 'AZHRAZLEA@GMAIL.COM') }}</p>
        </div>

        <div class="p-4 space-y-3 text-sm">

            <a href="/dashboard-anggota" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/halamanbuku" class="block font-bold text-blue-600">
                <div class="flex items-center gap-2">📊 <span>Halaman Buku</span></div>
            </a>

            <a href="/peminjaman" class="block">
                <div class="flex items-center gap-2">📦 <span>Peminjaman</span></div>
            </a>

            <a href="/pengembalian" class="block">
                <div class="flex items-center gap-2">🔄 <span>Pengembalian</span></div>
            </a>

            <a href="/catatan" class="block">
                <div class="flex items-center gap-2">📈 <span>Catatan</span></div>
            </a>

            <a href="{{ route('logout.proses') }}" class="block pt-4 text-red-500 hover:text-red-700">
                <div class="flex items-center gap-2">
                    <span>Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </a>

        </div>
    </div>

<main class="flex-1 h-screen overflow-y-auto p-8 bg-[#f4f7fa]">
    
    <div class="mb-6 flex items-center gap-4">
        <a href="/halamanbuku" class="text-gray-500 hover:text-gray-800">
            <i class="fa-solid fa-arrow-left text-xl"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-[#1a3a5a]">DETAIL BUKU</h1>
            <p class="text-xs text-gray-500 mt-1 uppercase">Katalog Buku Terbaru > {{ $buku->judul_buku ?? 'Detail' }}</p>
        </div>
    </div>

    {{-- PRIORITAS DATA DARI DATABASE --}}
    @php
        $judul = $buku->judul_buku ?? "Judul Tidak Diketahui";
        $penulis = $buku->pengarang ?? "-";
        $penerbit = $buku->penerbit ?? "-";
        $tahun = $buku->tahun ?? "-";
        $id_buku = $buku->id_buku ?? "-";
        $gambar = $buku->gambar ?? 'default.jpg';
        $deskripsi = $buku->deskripsi ?? "Belum ada deskripsi untuk buku ini. Silakan hubungi petugas perpustakaan untuk informasi lebih lanjut.";
        $genre = $buku->kategori ?? "-";
    @endphp

    {{-- FIX PATH GAMBAR --}}
    @php
        $pathGambar = (str_contains($gambar, 'img/')) ? $gambar : 'img/' . $gambar;
    @endphp

    {{-- DETAIL --}}
    <div class="bg-white rounded shadow-sm border border-gray-200 p-8 flex flex-col md:flex-row gap-8">
        
        <div class="w-full md:w-1/3 flex flex-col items-center">
            <img src="{{ asset($pathGambar) }}" 
                 class="w-full max-w-[280px] h-auto rounded shadow-lg border border-gray-200 mb-10 object-cover">
            
            <div class="w-full max-w-[250px] space-y-3">
                <button class="w-full bg-[#3c7e5a] hover:bg-green-800 text-white font-bold py-2 rounded-full text-sm flex justify-between px-6 items-center transition">
                    Pinjam Buku <i class="fa-solid fa-chevron-down text-[10px]"></i>
                </button>
                <a href="/halamanbuku" class="w-full block text-center bg-gray-200 text-gray-700 font-bold py-2 rounded-full text-sm hover:bg-gray-300 transition italic">
                    Kembali
                </a>
            </div>
        </div>

        <div class="flex-1">
            <h2 class="text-4xl font-serif font-bold text-gray-800 mb-1">{{ $judul }}</h2>
            <p class="text-xl text-gray-600 mb-4">{{ $penulis }}</p>

            <div class="text-gray-700 leading-relaxed mb-6 italic border-l-4 border-gray-200 pl-4">
                {{ $deskripsi }}
            </div>

            <div class="space-y-4 border-t pt-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <span class="font-bold text-xs text-gray-400 uppercase">Id Buku:</span>
                        <p class="text-sm font-semibold">{{ $id_buku }}</p>
                    </div>
                    <div>
                        <span class="font-bold text-xs text-gray-400 uppercase">Kategori / Genre:</span>
                        <p class="text-sm underline font-semibold">{{ $genre }}</p>
                    </div>
                    <div>
                        <span class="font-bold text-xs text-gray-400 uppercase">Penerbit:</span>
                        <p class="text-sm font-semibold">{{ $penerbit }}</p>
                    </div>
                    <div>
                        <span class="font-bold text-xs text-gray-400 uppercase">Tahun Terbit:</span>
                        <p class="text-sm font-semibold">{{ $tahun }}</p>
                    </div>
                </div>
                
                <div class="text-sm text-gray-600 pt-4">
                    <p class="italic text-[10px] text-gray-400">Published by {{ $penerbit }} in {{ $tahun }}</p>
                </div>
            </div>
        </div>

    </div>

</main>
</div>
</body>
</html>