<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - Ukuran Sedang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .bg-custom-main { background-color: #D9D9D9; }
        .bg-sidebar { background-color: #E2E2E2; }
        .bg-card-wrap { background-color: #C7C3BC; }
    </style>
</head>
<body class="bg-custom-main flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-6xl h-[750px] bg-card-wrap rounded-[2.5rem] shadow-2xl flex overflow-hidden relative border border-gray-400">
        
        <div class="w-1/4 bg-sidebar flex flex-col border-r border-gray-400 h-full">
            <div class="p-8 border-b border-gray-400 flex items-center gap-3">
                <i class="fa-solid fa-book-open text-2xl text-purple-600"></i>
                <span class="text-2xl font-bold tracking-tighter">LIBRARY</span>
            </div>

            <div class="p-8 text-center border-b border-gray-400">
                <div class="w-24 h-24 mx-auto rounded-full bg-black overflow-hidden mb-3 border-2 border-white shadow-md">
                    <img src="https://via.placeholder.com/100" alt="Avatar" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-[10px] tracking-widest text-gray-500">ANGGOTA :</h3>
                <p class="text-xs font-bold mt-1 uppercase">Qalea Azahrz</p>
                <p class="text-[9px] text-gray-500">azhrzalea@gmail.com</p>
            </div>

            <nav class="flex-1 py-6">
                <ul class="space-y-2">
                    <li class="px-8 py-2.5 flex items-center gap-3 text-sm font-medium hover:bg-gray-300 transition cursor-pointer">
                        <i class="fa-solid fa-house w-4"></i> Dhasboard
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-3 text-sm font-medium hover:bg-gray-300 transition cursor-pointer">
                        <i class="fa-solid fa-chart-simple w-4"></i> Data transaksi
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-3 text-sm font-bold bg-[#D3CECA] rounded-l-full ml-4 shadow-sm">
                        <i class="fa-solid fa-cube w-4"></i> peminjaman
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-3 text-sm font-medium hover:bg-gray-300 transition cursor-pointer">
                        <i class="fa-solid fa-hand-holding w-4"></i> pengembalian
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-3 text-sm font-medium hover:bg-gray-300 transition cursor-pointer">
                        <i class="fa-solid fa-list w-4"></i> Catatan
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex-1 p-12 relative flex flex-col">
            <p class="absolute top-4 left-10 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Data Transaksi Pinjam 16</p>

            <div class="flex justify-between items-start mb-6 pt-4">
                <button class="text-4xl font-light hover:scale-110 transition">←</button>
                <div class="space-y-1 cursor-pointer">
                    <div class="w-10 h-1 bg-black"></div>
                    <div class="w-10 h-1 bg-black"></div>
                    <div class="w-10 h-1 bg-black"></div>
                </div>
            </div>

            <div class="mb-8">
                <span class="text-[11px] text-gray-600 block">Halaman</span>
                <h1 class="text-4xl font-serif tracking-wide border-b-2 border-black inline-block pb-1 uppercase italic">From Peminjaman</h1>
            </div>

            <div class="bg-[#E2E2E2] rounded-[2.5rem] p-10 shadow-inner relative max-w-2xl mx-auto w-full border border-gray-300">
                
                <div class="absolute -top-14 -right-10 w-40 drop-shadow-xl">
                     <img src="https://via.placeholder.com/180x130" alt="Books">
                </div>

                <form action="#" class="space-y-6">
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[12px] border-b border-black w-36 uppercase tracking-tight">Id User</label>
                        <input type="text" value="1678001" class="flex-1 bg-white rounded-xl py-3 px-5 shadow-sm outline-none focus:ring-2 ring-gray-400 font-semibold">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[12px] border-b border-black w-36 uppercase tracking-tight">Id Buku</label>
                        <input type="text" value="00678" class="flex-1 bg-white rounded-xl py-3 px-5 shadow-sm outline-none">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[12px] border-b border-black w-36 uppercase tracking-tight">Judul Buku</label>
                        <input type="text" value="Dilan 1990" class="flex-1 bg-white rounded-xl py-3 px-5 shadow-sm outline-none">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[12px] border-b border-black w-36 uppercase tracking-tight">Tanggal Pinjam</label>
                        <input type="text" value="12 februari" class="flex-1 bg-white rounded-xl py-3 px-5 shadow-sm outline-none">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[12px] border-b border-black w-36 uppercase tracking-tight">Tanggal Kembali</label>
                        <input type="text" value="12 maret" class="flex-1 bg-white rounded-xl py-3 px-5 shadow-sm outline-none">
                    </div>

                    <div class="flex justify-end pt-2">
                        <button class="bg-white text-black font-black py-3 px-12 rounded-xl shadow-md hover:bg-gray-100 transition tracking-[0.2em] text-[11px] uppercase border border-gray-200">
                            Pinjam
                        </button>
                    </div>
                </form>

                <div class="absolute -bottom-1 -left-1 opacity-25">
                    <svg width="100" height="120" viewBox="0 0 100 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 100C10 50 40 10 90 10" stroke="black" stroke-width="2" />
                        <path d="M22 100C22 60 45 30 90 30" stroke="black" stroke-width="2" />
                        <path d="M35 100C35 70 55 45 90 45" stroke="black" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</body>
</html>