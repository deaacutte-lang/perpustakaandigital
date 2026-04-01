<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman - Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #E2E2E2; }
        .sidebar-active { background-color: #D6D2CE; border-radius: 20px 0 0 20px; color: #000; }
        .form-container { background-color: #D3D0CB; border-radius: 30px; position: relative; overflow: hidden; }
        
        /* Ornamen lengkung kiri bawah - Dipertahankan */
        .pattern-bg {
            position: absolute;
            bottom: -10px;
            left: 20px;
            opacity: 0.3;
        }
        .arc {
            width: 60px;
            height: 100px;
            border: 4px solid #7D7A76;
            border-radius: 50px 50px 0 0;
            margin-bottom: -60px;
            display: inline-block;
            margin-right: -20px;
        }
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
                <div class="w-24 h-24 rounded-full bg-slate-800 mb-4 overflow-hidden border-4 border-gray-300 shadow-md">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="profile">
                </div>
                <h2 class="font-bold text-xs uppercase">Anggota :</h2>
                <p class="font-bold text-sm">QALEA AZAHRZ</p>
                <p class="text-[10px] text-gray-500 italic">AZHRZALEA@GMAIL.COM</p>
            </div>

            <nav class="flex-1 flex flex-col gap-2 pl-6">
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-home w-5"></i> <span class="font-medium text-sm">Dhasboard</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-exchange-alt w-5"></i> <span class="font-medium text-sm">Data transaksi</span>
                </a>
                <a href="#" class="sidebar-active flex items-center gap-4 py-3 px-4 translate-x-1">
                    <i class="fas fa-cube w-5"></i> <span class="font-medium text-sm">peminjaman</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-hand-holding-heart w-5"></i> <span class="font-medium text-sm">pengembalian</span>
                </a>
                <a href="#" class="flex items-center gap-4 py-3 px-4 text-gray-700">
                    <i class="fas fa-chart-bar w-5"></i> <span class="font-medium text-sm">Catatan</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-8 flex flex-col relative">
            
            <div class="flex items-center justify-between mb-2">
                <button class="text-3xl text-gray-800"><i class="fas fa-arrow-left"></i></button>
                <div class="flex flex-col gap-1.5 cursor-pointer">
                    <span class="w-10 h-1.5 bg-black rounded-full"></span>
                    <span class="w-10 h-1.5 bg-black rounded-full"></span>
                    <span class="w-10 h-1.5 bg-black rounded-full"></span>
                    <span class="w-10 h-1.5 bg-black rounded-full"></span>
                </div>
            </div>

            <div class="mb-6 relative z-10">
                <p class="text-[10px] text-gray-600">Halaman</p>
                <h2 class="text-3xl font-serif tracking-wide border-b-2 border-black/30 inline-block pr-8 uppercase">From Peminjaman</h2>
            </div>

            <div class="absolute top-10 right-4 w-40 z-20 pointer-events-none drop-shadow-xl">
                <img src="https://ouch-cdn2.icons8.com/mO_7yD8R_Q6W-H8n-VqP2U_zO9Z8S6e0O9_07-tK1fM/rs:fit:456:456/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvNzE2/LzUyYTYxM2Q3LWM5/YmYtNDg4NC04Mzk0/LWFiMmFiMGNjYWEz/Yy5zdmc.png" alt="books">
            </div>

            <div class="form-container flex-1 p-10 md:p-14 mt-4 shadow-inner">
                
                <form action="#" class="max-w-3xl space-y-8 relative z-10">
                    
                    <div class="relative group">
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1 ml-1">ID User</label>
                        <div class="flex items-center bg-white rounded-2xl shadow-sm border-2 border-transparent group-focus-within:border-pink-400 group-focus-within:shadow-md transition-all duration-300">
                            <div class="pl-5 pr-3 text-gray-400">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <input type="text" placeholder="Masukkan ID User Anda..." 
                                class="w-full bg-transparent py-4 pr-6 outline-none text-gray-700 font-medium placeholder:text-gray-300 placeholder:font-normal">
                        </div>
                    </div>

                    <div class="relative group">
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1 ml-1">ID Buku</label>
                        <div class="flex items-center bg-white rounded-2xl shadow-sm border-2 border-transparent group-focus-within:border-pink-400 group-focus-within:shadow-md transition-all duration-300">
                            <div class="pl-5 pr-3 text-gray-400">
                                <i class="fas fa-barcode"></i>
                            </div>
                            <input type="text" placeholder="Masukkan ID Buku (misal: BKN001)" 
                                class="w-full bg-transparent py-4 pr-6 outline-none text-gray-700 font-medium placeholder:text-gray-300">
                        </div>
                    </div>

                    <div class="relative group">
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1 ml-1">Judul Buku</label>
                        <div class="flex items-center bg-white rounded-2xl shadow-sm border-2 border-transparent group-focus-within:border-pink-400 group-focus-within:shadow-md transition-all duration-300">
                            <div class="pl-5 pr-3 text-gray-400">
                                <i class="fas fa-book"></i>
                            </div>
                            <input type="text" placeholder="Ketik judul buku yang akan dipinjam..." 
                                class="w-full bg-transparent py-4 pr-6 outline-none text-gray-700 font-medium placeholder:text-gray-300">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="relative group">
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1 ml-1">Tanggal Pinjam</label>
                            <div class="flex items-center bg-white rounded-2xl shadow-sm border-2 border-transparent group-focus-within:border-pink-400 group-focus-within:shadow-md transition-all duration-300 hover:border-gray-300">
                                <div class="pl-5 pr-3 text-gray-400">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <input type="date" 
                                    class="w-full bg-transparent py-4 pr-6 outline-none text-gray-700 font-medium cursor-pointer">
                            </div>
                        </div>

                        <div class="relative group">
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-1 ml-1">Tanggal Kembali</label>
                            <div class="flex items-center bg-white rounded-2xl shadow-sm border-2 border-transparent group-focus-within:border-pink-400 group-focus-within:shadow-md transition-all duration-300 hover:border-gray-300">
                                <div class="pl-5 pr-3 text-gray-400">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <input type="date" 
                                    class="w-full bg-transparent py-4 pr-6 outline-none text-gray-700 font-medium cursor-pointer">
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 flex justify-center md:justify-end">
                        <button type="submit" 
                            class="bg-gray-800 text-white overflow-hidden px-16 py-4 rounded-xl shadow-lg transition-all duration-300 hover:bg-pink-500 hover:-translate-y-1 active:scale-95">
                            <span class="font-bold tracking-widest text-sm uppercase">Konfirmasi Pinjam</span>
                        </button>
                    </div>
                </form>
                <div class="pattern-bg">
                    <div class="arc"></div>
                    <div class="arc" style="margin-left: 10px; height: 120px;"></div>
                    <div class="arc" style="margin-left: 10px; height: 140px;"></div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>