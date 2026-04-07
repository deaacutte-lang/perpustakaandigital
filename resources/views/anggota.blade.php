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

            <a href="/dashboard-petugas" class="block">
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
            
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Data Anggota <span class="text-sm font-normal text-gray-400 italic">List Member</span></h1>
            </div>

            <div class="bg-white rounded shadow-sm border border-gray-200 mb-10">
                <div class="p-4 border-b flex justify-between items-center">
                    <h3 class="font-bold text-gray-700 uppercase tracking-wider text-sm">DATA ANGGOTA</h3>
                    <div class="relative">
                        <input type="text" placeholder="Cari berdasarkan User" class="border p-2 pr-10 rounded text-xs outline-none w-64 focus:ring-1 focus:ring-blue-400">
                        <i class="fa-solid fa-magnifying-glass absolute right-3 top-2.5 text-gray-400 text-xs"></i>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead class="bg-gray-50 text-gray-600 font-bold border-b">
                            <tr>
                                <th class="p-3 border-r">Nomor Induk</th>
                                <th class="p-3 border-r">Nama</th>
                                <th class="p-3 border-r text-center">Jenis Kelamin</th>
                                <th class="p-3 border-r text-center">Kelas</th>
                                <th class="p-3 border-r">Tempat Lahir</th>
                                <th class="p-3 border-r">Alamat</th>
                                <th class="p-3 text-center">Tools</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b hover:bg-blue-50 transition">
                                <td class="p-3 border-r">15901</td>
                                <td class="p-3 border-r text-blue-600 font-medium">👤 AGUNG SANTOSO</td>
                                <td class="p-3 border-r text-center">L</td>
                                <td class="p-3 border-r text-center">9a</td>
                                <td class="p-3 border-r">Cikarang, 4 Agustus 1997</td>
                                <td class="p-3 border-r">Kp. Wangkal, Cikarang Barat</td>
                                <td class="p-3 flex justify-center gap-2">
                                    <button class="bg-blue-400 text-white p-1.5 rounded hover:bg-blue-500 shadow-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="bg-red-500 text-white p-1.5 rounded hover:bg-red-600 shadow-sm"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-blue-50 transition">
                                <td class="p-3 border-r">15902</td>
                                <td class="p-3 border-r text-blue-600 font-medium">👤 AHMAD MUCHTADIN</td>
                                <td class="p-3 border-r text-center">L</td>
                                <td class="p-3 border-r text-center">9c</td>
                                <td class="p-3 border-r">Bekasi, 27 Januari 1998</td>
                                <td class="p-3 border-r">Cabang Lio, Cikarang Utara</td>
                                <td class="p-3 flex justify-center gap-2">
                                    <button class="bg-blue-400 text-white p-1.5 rounded hover:bg-blue-500 shadow-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="bg-red-500 text-white p-1.5 rounded hover:bg-red-600 shadow-sm"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>