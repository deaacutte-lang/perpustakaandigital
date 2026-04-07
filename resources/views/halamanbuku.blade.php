<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280">
    <title>Library Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 overflow-hidden">

<div class="flex h-screen w-[1280px] mx-auto">

    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col shrink-0">
        
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3 border-2 border-gray-100">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">QALEA ALZAHRAZ</p>
            <p class="text-xs text-gray-500">AZHRAZLEA@GMAIL.COM</p>
        </div>
<!-- MENU -->
        <div class="p-4 space-y-3 text-sm">

            <a href="/dasboard" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/halamanbuku" class="block">
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

            <a href="/login" class="block pt-4 text-red-500 hover:text-red-700">
                <div class="flex items-center gap-2">
                    <span>Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </a>

        </div>
    </div>

    <main class="flex-1 h-screen overflow-y-auto p-6 bg-[#f4f7fa]">
        
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800 uppercase">Halaman Buku</h1>
        </div>

        <h2 class="font-bold text-gray-700 text-xs uppercase mb-4">Katalog Buku Terbaru</h2>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white border rounded shadow-sm flex flex-col overflow-hidden">
                <img src="{{ asset('img/angkasa.jpg') }}" class="w-full h-44 object-cover border-b">
                <div class="p-3 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-[12px] font-bold text-gray-800 leading-tight mb-3">Angkasa</h3>
                        <div class="text-[10px] text-gray-500 border-t pt-2">Kategori : <span class="font-bold text-gray-700">bisnis</span></div>
                        <div class="text-[10px] text-gray-500">Id Buku : <span class="font-bold text-gray-700">bis01</span></div>
                    </div>
                    <div class="flex gap-1 mt-4">
                        <button class="bg-[#00a65a] hover:bg-green-700 text-white text-[9px] px-2 py-1 rounded font-bold uppercase">Pinjam</button>
                        <button class="bg-[#dd4b39] hover:bg-red-700 text-white text-[9px] px-2 py-1 rounded font-bold uppercase">Detail Buku</button>
                    </div>
                </div>
            </div>

            <div class="bg-white border rounded shadow-sm flex flex-col overflow-hidden">
                <img src="{{ asset('img/filosopi.jpg') }}" class="w-full h-44 object-cover border-b">
                <div class="p-3 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-[12px] font-bold text-gray-800 leading-tight mb-3">Filosofi Teras</h3>
                        <div class="text-[10px] text-gray-500 border-t pt-2">Kategori : <span class="font-bold text-gray-700">filsafat</span></div>
                        <div class="text-[10px] text-gray-500">Id Buku : <span class="font-bold text-gray-700">fil01</span></div>
                    </div>
                    <div class="flex gap-1 mt-4">
                        <button class="bg-[#00a65a] text-white text-[9px] px-2 py-1 rounded font-bold uppercase">Pinjam</button>
                        <button class="bg-[#dd4b39] text-white text-[9px] px-2 py-1 rounded font-bold uppercase">detail buku</button>
                    </div>
                </div>
            </div>

             <div class="bg-white border rounded shadow-sm flex flex-col overflow-hidden">
                <img src="{{ asset('img/nek.jpg') }}" class="w-full h-44 object-cover border-b">
                <div class="p-3 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-[12px] font-bold text-gray-800 leading-tight mb-3">buku next</h3>
                        <div class="text-[10px] text-gray-500 border-t pt-2">Kategori : <span class="font-bold text-gray-700">filsafat</span></div>
                        <div class="text-[10px] text-gray-500">Id Buku : <span class="font-bold text-gray-700">fil01</span></div>
                    </div>
                    <div class="flex gap-1 mt-4">
                        <button class="bg-[#00a65a] text-white text-[9px] px-2 py-1 rounded font-bold uppercase">Pinjam</button>
                        <button class="bg-[#dd4b39] text-white text-[9px] px-2 py-1 rounded font-bold uppercase">Detail Buku</button>
                    </div>
                </div>
            </div>

             <div class="bg-white border rounded shadow-sm flex flex-col overflow-hidden">
               <img src="{{ asset('img/Eccedentesiast.jpg') }}" class="w-full h-44 object-cover border-b">
                <div class="p-3 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-[12px] font-bold text-gray-800 leading-tight mb-3">Dilan</h3>
                        <div class="text-[10px] text-gray-500 border-t pt-2">Kategori : <span class="font-bold text-gray-700">filsafat</span></div>
                        <div class="text-[10px] text-gray-500">Id Buku : <span class="font-bold text-gray-700">fil01</span></div>
                    </div>
                    <div class="flex gap-1 mt-4">
                        <button class="bg-[#00a65a] text-white text-[9px] px-2 py-1 rounded font-bold uppercase">Pinjam</button>
                        <button class="bg-[#dd4b39] text-white text-[9px] px-2 py-1 rounded font-bold uppercase">detail buku</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

</body>
</html>