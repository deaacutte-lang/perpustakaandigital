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
            <p class="text-[10px] text-gray-500 uppercase">{{ session('email', 'PETUGAS@GMAIL.COM') }}</p>
        </div>

         <!-- MENU -->
        <div class="p-4 space-y-3 text-sm">

            <a href="/dashboard-petugas" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/datapeminjaman" class="block">
                <div class="flex items-center gap-2">📦 <span>Data Peminjaman</span></div>
            </a>

            <a href="/datapengembalian" class="block">
                <div class="flex items-center gap-2">🔄 <span>Data Pengembalian</span></div>
            </a>

            <a href="/denda" class="block">
                <div class="flex items-center gap-2">📈 <span>Denda</span></div>
            </a>

            <a href="/databuku" class="block">
                <div class="flex items-center gap-2">📈 <span>Data Buku</span></div>
            </a>

            <a href="/data-anggota" class="block">
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

        <main class="flex-1 h-screen overflow-y-auto p-6 bg-[#f4f7fa]">
            
            <div class="flex justify-between items-center mb-6">
                
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                <p class="text-sm text-gray-500">🏠 Home > <span class="text-gray-400">Dashboard</span></p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-white rounded shadow-sm flex overflow-hidden border-l-4 border-blue-500">
                    <div class="bg-blue-500 p-4 flex items-center justify-center text-white w-20 shrink-0">
                        <i class="fa-solid fa-book text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] uppercase text-gray-500 font-bold">Jumlah Buku</p>
                        <p class="text-xl font-bold">5</p>
                        <a href="#" class="text-[10px] text-blue-500 hover:underline">lihat selengkapnya ></a>
                    </div>
                </div>

                <div class="bg-white rounded shadow-sm flex overflow-hidden border-l-4 border-red-500">
                    <div class="bg-red-500 p-4 flex items-center justify-center text-white w-20 shrink-0">
                        <i class="fa-solid fa-money-bill-1 text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] uppercase text-gray-500 font-bold">Jumlah Denda</p>
                        <p class="text-xl font-bold">Rp.73,000</p>
                        <a href="#" class="text-[10px] text-red-500 hover:underline">lihat selengkapnya ></a>
                    </div>
                </div>

                <div class="bg-white rounded shadow-sm flex overflow-hidden border-l-4 border-green-500">
                    <div class="bg-green-600 p-4 flex items-center justify-center text-white w-20 shrink-0">
                        <i class="fa-solid fa-user text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] uppercase text-gray-500 font-bold">Jumlah Peminjaman</p>
                        <p class="text-xl font-bold">2</p>
                        <a href="#" class="text-[10px] text-green-600 hover:underline">lihat selengkapnya ></a>
                    </div>
                </div>

                <div class="bg-white rounded shadow-sm flex overflow-hidden border-l-4 border-orange-400">
                    <div class="bg-orange-400 p-4 flex items-center justify-center text-white w-20 shrink-0">
                        <i class="fa-solid fa-user text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] uppercase text-gray-500 font-bold">Jumlah Pengembalian</p>
                        <p class="text-xl font-bold">2</p>
                        <a href="#" class="text-[10px] text-orange-400 hover:underline">lihat selengkapnya ></a>
                    </div>
                </div>
            </div>
      </div>


</body>
</html>