<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - Form Peminjaman (Compact & Left)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:ital,wght@1,700&display=swap');
        
        body { font-family: 'Inter', sans-serif; background-color: #D9D9D9; overflow: hidden; }
        .bg-sidebar { background-color: #E2E2E2; }
        .bg-main-card { background-color: #C7C3BC; }
        .active-menu { background-color: #D3CECA; border-radius: 40px 0 0 40px; font-weight: 700; }
        
        .custom-input { transition: all 0.2s ease; border: 1.5px solid transparent; }
        .custom-input:focus { background-color: #fff; border-color: #000; transform: translateY(-1px); }
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

    <div class="w-full h-full bg-main-card flex overflow-hidden shadow-2xl">
        
        <aside class="w-[20%] max-w-[280px] bg-sidebar flex flex-col border-r border-gray-400 h-full">
            <div class="p-6 border-b border-gray-400 flex items-center gap-3">
                <div class="w-10 h-8 bg-gradient-to-br from-pink-400 to-purple-600 rounded-lg flex items-center justify-center shadow-md">
                    <i class="fa-solid fa-book-open text-white text-base"></i>
                </div>
                <span class="text-xl font-extrabold tracking-tighter">LIBRARY</span>
            </div>

            <div class="p-6 text-center border-b border-gray-400">
                <div class="w-20 h-20 mx-auto rounded-full bg-slate-900 overflow-hidden mb-3 border-2 border-white shadow-lg">
                    <img src="https://api.dicebear.com/7.x/bottts-neutral/svg?seed=qalea" alt="Avatar" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-[9px] tracking-widest text-gray-500 uppercase">ANGGOTA :</h3>
                <p class="text-xs font-bold uppercase text-black">Qalea Azahrz</p>
                <p class="text-[9px] text-gray-500 italic">azhrzalea@gmail.com</p>
            </div>

            <nav class="flex-1 py-6">
                <ul class="space-y-2">
                    <li class="px-8 py-2.5 flex items-center gap-4 text-xs font-medium hover:bg-gray-300 transition cursor-pointer ml-4">
                        <i class="fa-solid fa-house w-4"></i> Dhasboard
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-4 text-xs font-medium hover:bg-gray-300 transition cursor-pointer ml-4">
                        <i class="fa-solid fa-chart-simple w-4 text-center"></i> Data transaksi
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-4 text-xs font-medium hover:bg-gray-300 transition cursor-pointer ml-4">
                        <i class="fa-solid fa-cube w-4 text-center"></i> peminjaman
                    </li>
                    <li class="active-menu px-8 py-2.5 flex items-center gap-4 text-xs transition ml-4">
                        <i class="fa-solid fa-hand-holding w-4 text-center"></i> pengembalian
                    </li>
                    <li class="px-8 py-2.5 flex items-center gap-4 text-xs font-medium hover:bg-gray-300 transition cursor-pointer ml-4">
                        <i class="fa-solid fa-list w-4 text-center"></i> Catatan
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-10 relative flex flex-col justify-start items-start pl-16">
            
            <div class="w-full max-w-2xl flex justify-between items-center mb-6 pb-2 border-b border-black/10">
                <div class="flex items-center gap-4">
                    <button class="text-3xl font-light hover:-translate-x-1 transition-transform">←</button>
                    <h1 class="text-2xl font-serif tracking-wide uppercase italic">FROM PEMINJAMAN</h1>
                </div>
                <div class="space-y-1 cursor-pointer">
                    <div class="w-8 h-1 bg-black rounded-full"></div>
                    <div class="w-8 h-1 bg-black rounded-full"></div>
                </div>
            </div>

            <div class="bg-[#E2E2E2] rounded-[2.5rem] p-8 shadow-xl relative w-full max-w-2xl border border-gray-300 mt-2">
                
                <div class="absolute -top-10 -right-8 w-36 drop-shadow-xl rotate-3 pointer-events-none">
                     <img src="https://img.icons8.com/clouds/200/books.png" alt="Books">
                </div>

                <form class="space-y-5">
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[10px] border-b border-black w-40 uppercase tracking-tighter">ID USER</label>
                        <input type="text" class="custom-input flex-1 bg-white rounded-xl py-2 px-5 shadow-sm outline-none text-xs font-semibold" placeholder="...">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[10px] border-b border-black w-40 uppercase tracking-tighter">ID BUKU</label>
                        <input type="text" class="custom-input flex-1 bg-white rounded-xl py-2 px-5 shadow-sm outline-none text-xs font-semibold" placeholder="...">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[10px] border-b border-black w-40 uppercase tracking-tighter">JUDUL BUKU</label>
                        <input type="text" class="custom-input flex-1 bg-white rounded-xl py-2 px-5 shadow-sm outline-none text-xs font-semibold" placeholder="...">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[10px] border-b border-black w-40 uppercase tracking-tighter">TANGGAL PINJAM</label>
                        <input type="text" class="custom-input flex-1 bg-white rounded-xl py-2 px-5 shadow-sm outline-none text-xs font-semibold" placeholder="...">
                    </div>
                    <div class="flex items-center gap-6">
                        <label class="font-bold text-[10px] border-b border-black w-40 uppercase tracking-tighter leading-tight">TANGGAL KEMBALI</label>
                        <input type="text" class="custom-input flex-1 bg-white rounded-xl py-2 px-5 shadow-sm outline-none text-xs font-semibold" placeholder="...">
                    </div>

                    <div class="flex justify-end pt-2">
                        <button type="button" class="bg-white text-black font-black py-2.5 px-8 rounded-xl shadow-md hover:bg-black hover:text-white transition-all tracking-widest text-[9px] uppercase border border-gray-100 active:scale-95">
                            PINJAM
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>
</html>