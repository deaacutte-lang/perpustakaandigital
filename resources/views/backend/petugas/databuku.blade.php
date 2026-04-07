<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 overflow-hidden"> <div class="flex h-screen w-full"> <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col h-full">
        
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold text-xs text-gray-400">PETUGAS :</p>
            <p class="font-bold text-sm">{{ session('nama', 'QALEA ALZAHRAZ') }}</p>
            <p class="text-[10px] text-gray-500 uppercase">{{ session('email', 'AZHRAZLEA@GMAIL.COM') }}</p>
        </div>

         <!-- MENU -->
        <div class="p-4 space-y-3 text-sm">

            <a href="/dashboardpetugas" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/peminjaman" class="block">
                <div class="flex items-center gap-2">📦 <span>Data Peminjaman</span></div>
            </a>

            <a href="/pengembalian" class="block">
                <div class="flex items-center gap-2">🔄 <span>Data Pengembalian</span></div>
            </a>

            <a href="/catatan" class="block">
                <div class="flex items-center gap-2">📈 <span>Denda</span></div>
            </a>

            <a href="/catatan" class="block">
                <div class="flex items-center gap-2">📈 <span>Data Buku</span></div>
            </a>

            <a href="/data-anggotas" class="block">
                <div class="flex items-center gap-2">📈 <span>Data Anggota</span></div>
            </a>

            <a href="/login" class="block pt-4 text-red-500 hover:text-red-700">
                <div class="flex items-center gap-2">
                    <span>Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </a>

        </div>
    </div>
     <button class="btn btn-success btn-sm mb-2">
                       <i class="fa fa-plus"></i> Tambah Data
                    </button>(buat nambahbuku)