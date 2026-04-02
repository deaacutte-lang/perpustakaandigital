<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library -</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@1,700&display=swap');
        
        body { font-family: 'Inter', sans-serif; background-color: #D9D9D9; overflow: hidden; }
        .bg-sidebar { background-color: #E2E2E2; }
        .bg-main-card { background-color: #C7C3BC; }
        .active-menu { background-color: #D3CECA; border-radius: 40px 0 0 40px; font-weight: 700; }
        
        .custom-input {
            transition: all 0.2s ease;
        }
        .custom-input:focus {
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="h-screen w-screen flex items-center justify-center m-0 p-0">
    <aside class="w-[20%] max-w-[280px] bg-sidebar flex flex-col border-r border-gray-400 h-full">
    
    <div class="p-6 border-b border-gray-400 flex items-center gap-3">
        <div class="w-10 h-8 bg-gradient-to-br from-pink-400 to-purple-600 rounded-lg flex items-center justify-center shadow-md">
            <i class="fa-solid fa-book-open text-white text-base"></i>
        </div>
        <span class="text-xl font-extrabold tracking-tighter">LIBRARY</span>
    </div>

    <div class="p-6 text-center border-b border-gray-400">
        <div class="w-20 h-20 mx-auto rounded-full bg-slate-900 overflow-hidden mb-3 border-2 border-white shadow-lg">
            <img src="https://api.dicebear.com/7.x/bottts-neutral/svg?seed=qalea">
        </div>
        <h3 class="font-bold text-[9px] tracking-widest text-gray-500 uppercase">ANGGOTA :</h3>
        <p class="text-xs font-bold uppercase">Qalea Azahrz</p>
        <p class="text-[9px] text-gray-500 italic">azhrzalea@gmail.com</p>
    </div>

    <nav class="flex-1 py-6">
        <ul class="space-y-2">
            <li class="px-8 py-2.5 flex items-center gap-4 text-xs ml-4">
                <i class="fa-solid fa-house w-4"></i> Dhasboard
            </li>
            <li class="px-8 py-2.5 flex items-center gap-4 text-xs ml-4">
                <i class="fa-solid fa-chart-simple w-4"></i> Data transaksi
            </li>
            <li class="px-8 py-2.5 flex items-center gap-4 text-xs ml-4">
                <i class="fa-solid fa-cube w-4"></i> peminjaman
            </li>
            <li class="active-menu px-8 py-2.5 flex items-center gap-4 text-xs ml-4">
                <i class="fa-solid fa-hand-holding w-4"></i> pengembalian
            </li>
            <li class="px-8 py-2.5 flex items-center gap-4 text-xs ml-4">
                <i class="fa-solid fa-list w-4"></i> Catatan
            </li>
        </ul>
    </nav>
</aside>
<div class="absolute top-8 right-12 space-y-1 cursor-pointer group">
    <div class="w-10 h-1 bg-black rounded-full"></div>
    <div class="w-10 h-1 bg-black rounded-full"></div>
    <div class="w-10 h-1 bg-black rounded-full"></div>
</div>
<main class="flex-1 p-10 relative flex flex-col overflow-hidden">

    <!-- top bar -->
    <div class="flex items-center justify-between bg-[#D9D9D9] rounded-xl px-6 py-3 mb-6">
        <i class="fa-solid fa-arrow-left text-lg cursor-pointer"></i>
        <h2 class="font-serif text-sm tracking-widest">PUSTAKA DIGITAL</h2>
        <div class="space-y-1">
            <div class="w-8 h-1 bg-black rounded"></div>
            <div class="w-8 h-1 bg-black rounded"></div>
            <div class="w-8 h-1 bg-black rounded"></div>
        </div>
    </div>

    <!-- content -->
    <div class="flex gap-10">

        <!-- cover -->
        <div class="relative w-64 flex flex-col items-center">
            <img src="otak.jpg"
                class="rounded-lg shadow-lg z-10">

            <!-- dekorasi garis -->
            <div class="absolute inset-0 border-2 border-gray-500 rounded-lg scale-110"></div>
        </div>

        <!-- info kanan -->
        <div class="flex-1">

            <!-- judul -->
            <div class="bg-[#E2E2E2] rounded-xl px-4 py-3 mb-6 w-fit">
                <p class="text-xs font-bold">DILAN 1990</p>
                <p class="text-[10px] italic">Pidi Baiq</p>
            </div>

            <!-- card deskripsi -->
            <div class="bg-[#E2E2E2] rounded-2xl p-6 relative">

                <!-- icon pojok -->
                <i class="fa-regular fa-book absolute top-4 right-4 text-lg"></i>

                <h3 class="text-xs font-bold text-center mb-2">DESKRIPSI:</h3>
                <p class="text-[11px] text-center leading-relaxed px-6">
                    Dilan: Dia adalah Dilanku tahun 1990 adalah sebuah novel karya Pidi Baiq yang diterbitkan oleh
                    Penerbit Pastel Books (Mizan Group). Novel tersebut menjadi buku dengan penjualan terbaik di
                    Gramedia, serta diadaptasi ke dalam sebuah film yang berjudul Dilan 1990.
                </p>

                <!-- statistik -->
                <div class="grid grid-cols-2 gap-6 mt-6 px-10">

                    <div class="bg-[#C7C3BC] rounded-xl p-4 text-center">
                        <i class="fa-solid fa-book text-sm mb-1"></i>
                        <p class="text-[9px]">HALAMAN</p>
                        <p class="text-[10px] font-bold">333</p>
                    </div>

                    <div class="bg-[#C7C3BC] rounded-xl p-4 text-center">
                        <i class="fa-solid fa-calendar text-sm mb-1"></i>
                        <p class="text-[9px]">TAHUN TERBIT</p>
                        <p class="text-[10px] font-bold">2014</p>
                    </div>

                    <div class="bg-[#C7C3BC] rounded-xl p-4 text-center">
                        <i class="fa-solid fa-star text-sm mb-1"></i>
                        <p class="text-[9px]">RATING</p>
                        <p class="text-[10px] font-bold">0.0/9</p>
                    </div>

                    <div class="bg-[#C7C3BC] rounded-xl p-4 text-center">
                        <i class="fa-solid fa-rotate text-sm mb-1"></i>
                        <p class="text-[9px]">STOK TERSEDIA</p>
                        <p class="text-[10px] font-bold">4</p>
                    </div>
                </div>

                <!-- tombol -->
                <div class="flex justify-center mt-6">
                    <button class="bg-[#C7C3BC] px-10 py-2 rounded-xl text-xs font-semibold hover:bg-black hover:text-white transition">
                        PINJAM
                    </button>
                </div>

            </div>
        </div>

    </div>

</main>
  </div>

</body>
</html>