<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman 1 - Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:ital,wght@1,400&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #E2E2E2; }
        .sidebar-active { background-color: #D6D2CE; border-radius: 20px 0 0 20px; color: #000; }
        .book-container { background-color: #D3D0CB; border-radius: 30px; }
        .stat-card { background-color: #C9C4BF; border-radius: 12px; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .font-cursive { font-family: 'Playfair Display', serif; font-style: italic; }
    </style>
</head>
<body class="p-6 md:p-10 min-h-screen flex items-center justify-center">

    <div class="max-w-6xl w-full bg-[#DCD9D4] rounded-[40px] shadow-2xl overflow-hidden flex min-h-[85vh]">
        
        <aside class="w-64 bg-[#D1D1D1] py-8 flex flex-col border-r border-black/5">
            <div class="px-8 mb-10 flex items-center gap-3">
                <div class="bg-white p-2 rounded-lg shadow-sm">
                    <i class="fas fa-book-open text-pink-500 text-2xl"></i>
                </div>
                <h1 class="text-2xl font-bold tracking-widest border-b-2 border-blue-400">LIBRARY</h1>
            </div>

            <div class="flex flex-col items-center mb-10 text-center px-4">
                <div class="w-24 h-24 rounded-full bg-slate-800 mb-4 overflow-hidden border-4 border-gray-300">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="profile">
                </div>
                <h2 class="font-bold text-sm">QALEA AZAHRZ</h2>
                <p class="text-[10px] text-gray-500 italic">AZHRZALEA@GMAIL.COM</p>
            </div>

            <nav class="flex-1 flex flex-col gap-2 pl-6">
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-home w-5"></i> <span class="font-medium">Dhasboard</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-exchange-alt w-5"></i> <span class="font-medium">Data transaksi</span>
                </a>
                <a href="#" class="sidebar-active flex items-center gap-4 py-3 px-4 translate-x-1">
                    <i class="fas fa-cube w-5"></i> <span class="font-medium">peminjaman</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-hand-holding-heart w-5"></i> <span class="font-medium">pengembalian</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-chart-bar w-5"></i> <span class="font-medium">Catatan</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-8 flex flex-col">
            <header class="flex items-center justify-between mb-6">
                <button class="text-3xl"><i class="fas fa-arrow-left"></i></button>
                <h2 class="text-xl font-bold tracking-[0.3em] uppercase">Pustaka Digital</h2>
                <div class="flex flex-col gap-1">
                    <span class="w-10 h-1.5 bg-black"></span>
                    <span class="w-10 h-1.5 bg-black"></span>
                    <span class="w-10 h-1.5 bg-black"></span>
                    <span class="w-10 h-1.5 bg-black"></span>
                </div>
            </header>

            <div class="book-container flex-1 p-8 relative overflow-hidden">
                <div class="max-w-4xl mx-auto flex flex-col items-center">
                    
                    <div class="flex flex-col md:flex-row gap-8 items-start mb-8 relative">
                        <div class="relative group">
                            <div class="absolute -left-12 top-0 text-green-700 opacity-60 text-5xl">🍃</div>
                            <div class="absolute -left-10 bottom-10 text-green-700 opacity-40 text-4xl rotate-45">🌿</div>
                            
                            <div class="relative border-2 border-black p-1">
                                <img src="https://m.media-amazon.com/images/I/71Xm302K6yL._AC_UF1000,1000_QL80_.jpg" 
                                     alt="Dilan 1990" class="w-48 shadow-2xl">
                            </div>

                            <div class="absolute -right-12 top-10 text-green-700 opacity-60 text-5xl rotate-90">🌿</div>
                        </div>

                        <div class="mt-4 md:mt-12 bg-white/20 backdrop-blur-sm p-4 rounded-xl border border-white/30">
                            <h3 class="text-lg font-bold">DILAN 1990</h3>
                            <p class="font-cursive text-gray-700">DIA ADALAH DILANKU</p>
                        </div>
                    </div>

                    <div class="w-full mb-10 text-center md:text-left">
                        <div class="flex justify-between items-center mb-2">
                             <h4 class="font-bold uppercase tracking-widest mx-auto md:mx-0">Deskripsi:</h4>
                             <i class="fas fa-book-open text-3xl opacity-40 hidden md:block"></i>
                        </div>
                        <p class="text-xs leading-relaxed text-gray-800 max-w-2xl">
                            Dilan: Dia adalah Dilanku tahun 1990 adalah sebuah <span class="underline italic">novel</span> karya <span class="underline">Pidi Baiq</span> yang diterbitkan oleh Penerbit Pastel Books (Mizan Group). Novel tersebut menjadi buku dengan penjualan terbaik di Gramedia,[1] serta diadaptasi ke dalam sebuah film yang berjudul <span class="underline italic">Dilan 1990</span>.[2]
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 w-full max-w-lg mb-8">
                        <div class="stat-card p-3 flex flex-col items-center justify-center text-center shadow-sm">
                            <i class="fas fa-book mb-1"></i>
                            <span class="text-[10px] font-bold">HALAMAN</span>
                            <span class="text-[10px]">333</span>
                        </div>
                        <div class="stat-card p-3 flex flex-col items-center justify-center text-center shadow-sm">
                            <i class="fas fa-calendar-alt mb-1"></i>
                            <span class="text-[10px] font-bold">TAHUN TERBIT</span>
                            <span class="text-[10px]">2014</span>
                        </div>
                        <div class="stat-card p-3 flex flex-col items-center justify-center text-center shadow-sm">
                            <i class="fas fa-star mb-1 text-white"></i>
                            <span class="text-[10px] font-bold uppercase">Rating</span>
                            <span class="text-[10px]">0,0/9</span>
                        </div>
                        <div class="stat-card p-3 flex flex-col items-center justify-center text-center shadow-sm">
                            <i class="fas fa-sync-alt mb-1"></i>
                            <span class="text-[10px] font-bold uppercase">Stok Tersedia</span>
                            <span class="text-[10px]">4</span>
                        </div>
                    </div>

                    <button class="bg-[#C4C0BB] px-10 py-2 rounded-lg border border-black/20 font-bold hover:bg-pink-400 hover:text-white transition-all shadow-md active:scale-95">
                        PINJAM
                    </button>
                </div>
            </div>
        </main>
    </div>

</body>
</html>