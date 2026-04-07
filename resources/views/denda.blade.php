<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=1280">
<title>Library Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex h-screen w-[1280px] mx-auto">

    <!-- SIDEBAR -->
    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col">
        
        <!-- LOGO -->
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <!-- PROFILE -->
        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">QALEA ALZAHRAZ</p>
            <p class="text-xs text-gray-500">AZHRAZLEA@GMAIL.COM</p>
        </div>

        <!-- MENU -->
        <div class="p-4 space-y-3 text-sm">

            <div class="flex items-center gap-2 cursor-pointer">
                🏠 <span>Dashboard</span>
            </div>

            <a href="/halamanbuku" class="block">📊 halaman buku</a>


            <div class="flex items-center gap-2 bg-gray-200 p-2 rounded">
                📦 <span>peminjaman</span>
            </div>

            <div class="flex items-center gap-2 cursor-pointer">
                🔄 <span>pengembalian</span>
            </div>

            <div class="flex items-center gap-2 cursor-pointer">
                📈 <span>Catatan</span>
            </div>
             <a href="/login" class="block pt-4">
                <div class="flex items-center gap-2 cursor-pointer text-red-500 hover:text-red-700 transition-colors">
                    <span>Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </a>
        </div>
    </div>
<!-- MAIN CONTENT -->
<div class="flex-1 flex justify-center items-center pl-10">

    <div class="bg-[#e5e1dd] w-[420px] rounded-2xl p-6 shadow-lg text-center relative">

        <!-- ICON -->
        <div class="text-5xl mb-3">
            ⚠️
        </div>

        <!-- TITLE -->
        <h2 class="text-lg font-semibold text-gray-800 mb-2">
            Denda Keterlambatan
        </h2>

        <!-- MESSAGE -->
        <p class="text-sm text-gray-600 mb-4">
            Anda terlambat mengembalikan buku.
            Silakan segera lakukan pembayaran denda agar dapat melakukan transaksi kembali.
        </p>

        <!-- DETAIL BOX -->
        <div class="bg-white rounded-xl p-4 mb-4 shadow-sm">
            <p class="text-xs text-gray-500">Total Denda</p>
            <p class="text-xl font-semibold text-red-500">
                Rp 120.000
            </p>
        </div>

        <!-- BUTTON -->
        <div class="flex justify-center gap-3">
            <button class="bg-gray-300 px-4 py-2 rounded-lg text-sm hover:bg-gray-400 transition">
                Nanti
            </button>

            <button class="bg-[#c8c1bb] px-4 py-2 rounded-lg text-sm hover:bg-[#bdb6af] transition">
                Bayar Sekarang
            </button>
        </div>

    </div>

</div>
</body>
</html>