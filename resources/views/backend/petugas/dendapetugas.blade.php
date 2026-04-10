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

            <a href="/dasboard" class="block">
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

            <a href="/catatan" class="block">
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
     <div class="bg-white rounded shadow-sm border border-gray-200">
                <div class="p-4 border-b flex justify-between items-center bg-gray-50">
                    <h3 class="font-bold text-gray-700 text-sm">Data Transaksi Terkini</h3>
                </div>
                
                <div class="p-4">
                    <button class="bg-blue-500 text-white px-3 py-1.5 rounded text-xs mb-4 hover:bg-blue-600 flex items-center gap-1 shadow-sm">
                        <i class="fa-solid fa-plus"></i> Tambah Data
                    </button>

                    <div class="flex justify-between items-center mb-4 text-[11px] text-gray-600">
                        <div>Show <select class="border rounded px-1"><option>10</option></select> entries</div>
                        <div>Search: <input type="text" class="border rounded px-2 py-1 outline-none shadow-sm"></div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-[11px] border-collapse border border-gray-200">
                            <thead class="bg-[#3c8dbc] text-white">
                                <tr>
                                    <th class="p-2 border">No</th>
                                    <th class="p-2 border">No Reg</th>
                                    <th class="p-2 border">Nama Peminjam</th>
                                    <th class="p-2 border">Judul Buku</th>
                                    <th class="p-2 border">Tgl Pinjam</th>
                                    <th class="p-2 border">Tgl Kembali</th>
                                    <th class="p-2 border">Status</th>
                                    <th class="p-2 border">Denda</th>
                                    <th class="p-2 border text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr class="hover:bg-gray-50">
                                    <td class="p-2 border text-center">1</td>
                                    <td class="p-2 border">REG002</td>
                                    <td class="p-2 border font-medium">Bambang</td>
                                    <td class="p-2 border italic">Bahasa Indonesia</td>
                                    <td class="p-2 border">17-Mar-2021</td>
                                    <td class="p-2 border text-center">-</td>
                                    <td class="p-2 border italic text-blue-600">OnGoing</td>
                                    <td class="p-2 border text-center">-</td>
                                    <td class="p-2 border flex justify-center gap-1">
                                        <button class="bg-orange-400 text-white px-2 py-1 rounded text-[10px] hover:bg-orange-500">Kembali</button>
                                        <button class="bg-red-500 text-white px-2 py-1 rounded text-[10px] hover:bg-red-600">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-between items-center mt-4 text-[10px] text-gray-500">
                        <p>Showing 1 to 1 of 1 entries</p>
                        <div class="flex gap-1">
                            <button class="px-2 py-1 border rounded bg-gray-100 hover:bg-gray-200 transition">Previous</button>
                            <button class="px-2 py-1 border rounded bg-blue-500 text-white">1</button>
                            <button class="px-2 py-1 border rounded bg-gray-100 hover:bg-gray-200 transition">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
        </html>