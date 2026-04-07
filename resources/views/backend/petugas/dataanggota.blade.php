<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 overflow-hidden">
    <div class="flex h-screen w-full"> 
        
        <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col h-full">
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

            <div class="p-4 space-y-3 text-sm flex-1 overflow-y-auto">
                <a href="/dashboardpetugas" class="block hover:bg-gray-100 p-2 rounded transition">
                    <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
                </a>

                <a href="/peminjaman" class="block hover:bg-gray-100 p-2 rounded transition">
                    <div class="flex items-center gap-2">📦 <span>Data Peminjaman</span></div>
                </a>

                <a href="/pengembalian" class="block hover:bg-gray-100 p-2 rounded transition">
                    <div class="flex items-center gap-2">🔄 <span>Data Pengembalian</span></div>
                </a>

                <a href="/catatan" class="block hover:bg-gray-100 p-2 rounded transition">
                    <div class="flex items-center gap-2">📈 <span>Denda</span></div>
                </a>

                <a href="/catatan" class="block hover:bg-gray-100 p-2 rounded transition">
                    <div class="flex items-center gap-2">📈 <span>Data Buku</span></div>
                </a>

                <a href="/data-anggota" class="block hover:bg-gray-100 p-2 rounded transition">
                    <div class="flex items-center gap-2">📈 <span>Data Anggota</span></div>
                </a>

                <a href="{{ route('logout.proses') }}" class="block pt-4 text-red-500 hover:text-red-700">
                    <div class="flex items-center gap-2">
                        <span>Logout</span>
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                </a>
            </div>
        </div>

        <main class="flex-1 h-screen overflow-y-auto p-6 bg-[#f4f7fa]">
            
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Dashboard <span class="text-sm font-normal text-gray-400 italic">Control panel</span></h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <div class="space-y-6">
                    <div class="bg-white rounded shadow-sm border border-gray-200">
                        <div class="bg-[#3c8dbc] p-3 rounded-t text-white font-semibold">Input Data Kunjungan</div>
                        <div class="p-4 space-y-4">
                            <input type="text" class="w-full border p-2 rounded text-sm" placeholder="ID Anggota...">
                            <input type="text" class="w-full border p-2 rounded text-sm" placeholder="Nama/Instansi...">
                            <button class="bg-red-500 text-white px-4 py-2 rounded text-sm font-medium">Simpan</button>
                        </div>
                    </div>

                    <div class="bg-white rounded shadow-sm border border-gray-200">
                        <div class="bg-[#3c8dbc] p-3 rounded-t text-white font-semibold">Data Buku dan Anggota</div>
                        <div class="p-4 grid grid-cols-4 gap-4 text-center">
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="w-8 mx-auto"><span class="text-[10px] font-bold">Anggota</span></div>
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/10433/10433048.png" class="w-8 mx-auto text-blue-500"><span class="text-[10px] font-bold">Pusat Pinjaman</span></div>
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" class="w-8 mx-auto"><span class="text-[10px] font-bold">Data Buku</span></div>
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/4371/4371190.png" class="w-8 mx-auto"><span class="text-[10px] font-bold">Import Buku</span></div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded shadow-sm border border-gray-200">
                        <div class="bg-[#3c8dbc] p-3 rounded-t text-white font-semibold">Setting Prodi</div>
                        <div class="p-4 flex gap-8 text-center">
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/3534/3534033.png" class="w-8 mx-auto"><span class="text-[10px] font-bold">Set Prodi</span></div>
                            <div class="p-2 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/10701/10701484.png" class="w-8 mx-auto"><span class="text-[10px] font-bold">Setting Kelas</span></div>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-sm border border-gray-200">
                        <div class="bg-[#3c8dbc] p-3 rounded-t text-white font-semibold">Entri Prodi</div>
                        <div class="p-4 grid grid-cols-5 gap-2 text-center">
                            <div class="p-1 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/2436/2436702.png" class="w-6 mx-auto"><span class="text-[9px] font-bold text-gray-600">Farmasi</span></div>
                            <div class="p-1 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/3063/3063176.png" class="w-6 mx-auto"><span class="text-[9px] font-bold text-gray-600">Gizi</span></div>
                            <div class="p-1 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/3062/3062276.png" class="w-6 mx-auto"><span class="text-[9px] font-bold text-gray-600">Hiburan</span></div>
                            <div class="p-1 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/4042/4042211.png" class="w-6 mx-auto"><span class="text-[9px] font-bold text-gray-600">Pecinta</span></div>
                            <div class="p-1 hover:bg-gray-50 rounded cursor-pointer"><img src="https://cdn-icons-png.flaticon.com/512/2892/2892030.png" class="w-6 mx-auto"><span class="text-[9px] font-bold text-gray-600">Perawat</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow-sm border border-gray-200 mb-10">
                <div class="p-4 border-b flex justify-between items-center">
                    <h3 class="font-bold text-gray-700 uppercase tracking-wider text-sm">Data Anggota</h3>
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
                                    <button class="bg-blue-400 text-white p-1.5 rounded hover:bg-blue-500"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="bg-red-500 text-white p-1.5 rounded hover:bg-red-600"><i class="fa-solid fa-trash"></i></button>
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