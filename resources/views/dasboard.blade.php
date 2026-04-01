<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #D3D3D3; }
        .sidebar-active { background-color: #E2E2E2; border-radius: 20px 0 0 20px; color: #000; }
        .card-shadow { box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="p-4 md:p-8">

    <div class="max-w-7xl mx-auto bg-[#E5E5E5] rounded-3xl overflow-hidden flex min-h-[90vh] shadow-2xl">
        
        <aside class="w-64 bg-[#D1D1D1] py-8 flex flex-col">
            <div class="px-8 mb-10 flex items-center gap-3">
                <div class="bg-white p-2 rounded-lg">
                    <i class="fas fa-book-open text-pink-500 text-2xl"></i>
                </div>
                <h1 class="text-2xl font-bold tracking-widest">LIBRARY</h1>
            </div>

            <div class="flex flex-col items-center mb-10 text-center px-4">
                <div class="w-24 h-24 rounded-full bg-slate-800 mb-4 overflow-hidden border-4 border-gray-300">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="profile">
                </div>
                <h2 class="font-bold text-sm">ANGGOTA :</h2>
                <p class="text-xs text-gray-700">QALEA AZAHRZ</p>
                <p class="text-[10px] text-gray-500">AZHRZALEA@GMAIL.COM</p>
            </div>

            <nav class="flex-1 flex flex-col gap-2 pl-6">
                <a href="#" class="flex items-center gap-4 py-3 px-4 transition-all">
                    <i class="fas fa-home w-5"></i> <span class="font-medium">Dhasboard</span>
                </a>
                <a href="/transaksi1" class="flex items-center gap-4 py-3 px-4 transition-all">
                    <i class="fas fa-exchange-alt w-5"></i> <span class="font-medium">Data transaksi</span>
                </a>
                <a href="/peminjaman" class="sidebar-active flex items-center gap-4 py-3 px-4 transition-all translate-x-1">
                    <i class="fas fa-cube w-5"></i> <span class="font-medium">peminjaman</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 transition-all text-gray-600">
                    <i class="fas fa-hand-holding-heart w-5"></i> <span class="font-medium">pengembalian</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 transition-all text-gray-600">
                    <i class="fas fa-chart-bar w-5"></i> <span class="font-medium">Catatan</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-8 bg-[#DCD9D4]">
            <header class="flex items-center justify-between mb-8">
                <div>
                    <p class="text-xs text-gray-500">Halaman</p>
                    <h2 class="text-3xl font-serif border-b-2 border-black inline-block">Dhasboard</h2>
                </div>

                <div class="relative w-1/2">
                    <input type="text" placeholder="Hinted search text" class="w-full py-3 px-12 rounded-full bg-white/70 focus:outline-none shadow-inner">
                    <i class="fas fa-bars absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <i class="fas fa-search absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>

                <div class="flex flex-col gap-1 cursor-pointer">
                    <span class="w-8 h-1 bg-black"></span>
                    <span class="w-8 h-1 bg-black"></span>
                    <span class="w-8 h-1 bg-black"></span>
                    <span class="w-8 h-1 bg-black"></span>
                </div>
            </header>

            <section class="mb-10">
                <div class="mb-4">
                    <span class="bg-[#E2E2E2] px-6 py-1 rounded-full shadow-sm font-medium">NOVEL</span>
                </div>
                <div class="bg-[#EAEAEA]/60 p-6 rounded-3xl flex gap-6 overflow-x-auto no-scrollbar">
                    <div class="min-w-[120px] flex flex-col items-center">
                        <img src="https://placehold.jp/24/3a7a8a/ffffff/120x180.png?text=Dilan+1990" class="w-28 h-40 object-cover rounded shadow-md mb-2">
                        <p class="text-[10px] font-bold uppercase mb-2">Dilan 1990</p>
                        <div class="flex gap-1">
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px] hover:bg-gray-400">detail</button>
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px] hover:bg-gray-400">pinjam</button>
                        </div>
                    </div>
                    <div class="min-w-[120px] flex flex-col items-center opacity-80">
                        <img src="https://placehold.jp/24/8a3a3a/ffffff/120x180.png?text=Laskar+Pelangi" class="w-28 h-40 object-cover rounded shadow-md mb-2">
                        <p class="text-[10px] font-bold uppercase mb-2">Laskar Pelangi</p>
                        <div class="flex gap-1">
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">detail</button>
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">pinjam</button>
                        </div>
                    </div>
                    <div class="min-w-[120px] flex flex-col items-center">
                        <img src="https://placehold.jp/24/a37d3a/ffffff/120x180.png?text=Angkasa+56" class="w-28 h-40 object-cover rounded shadow-md mb-2">
                        <p class="text-[10px] font-bold uppercase mb-2">Angkasa 56</p>
                        <div class="flex gap-1">
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">detail</button>
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">pinjam</button>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="mb-4">
                    <span class="bg-[#E2E2E2] px-6 py-1 rounded-full shadow-sm font-medium uppercase">Pelajaran</span>
                </div>
                <div class="bg-[#EAEAEA]/60 p-6 rounded-3xl flex gap-6 overflow-x-auto">
                    <div class="min-w-[120px] flex flex-col items-center">
                        <img src="https://placehold.jp/24/3a8a4d/ffffff/120x180.png?text=PJOK" class="w-28 h-40 object-cover rounded shadow-md mb-2">
                        <p class="text-[10px] font-bold uppercase mb-2">PJOK</p>
                        <div class="flex gap-1">
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">detail</button>
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">pinjam</button>
                        </div>
                    </div>
                    <div class="min-w-[120px] flex flex-col items-center">
                        <img src="https://placehold.jp/24/3a4d8a/ffffff/120x180.png?text=MTK" class="w-28 h-40 object-cover rounded shadow-md mb-2">
                        <p class="text-[10px] font-bold uppercase mb-2">MATEMATIKA</p>
                        <div class="flex gap-1">
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">detail</button>
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">pinjam</button>
                        </div>
                    </div>
                    <div class="min-w-[120px] flex flex-col items-center">
                        <img src="https://placehold.jp/24/8a3a80/ffffff/120x180.png?text=IPA" class="w-28 h-40 object-cover rounded shadow-md mb-2">
                        <p class="text-[10px] font-bold uppercase mb-2">IPA</p>
                        <div class="flex gap-1">
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">detail</button>
                            <button class="bg-gray-300 px-2 py-1 rounded text-[8px]">pinjam</button>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>

</body>
</html>