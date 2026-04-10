<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen w-full">

    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col">
        
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">{{ session('nama', 'GUEST') }}</p>
            <p class="text-xs text-gray-500 uppercase">{{ session('email', 'GUEST@GMAIL.COM') }}</p>
        </div>

        <div class="p-4 space-y-3 text-sm">

            <a href="/dasboard" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/halamanbuku" class="block">
                <div class="flex items-center gap-2">📊 <span>Halaman Buku</span></div>
            </a>

            <a href="/peminjaman" class="block">
                <div class="flex items-center gap-2">📦 <span>Peminjaman</span></div>
            </a>

            <a href="/pengembalian" class="block">
                <div class="flex items-center gap-2">🔄 <span>Pengembalian</span></div>
            </a>

            <a href="/catatan" class="block">
                <div class="flex items-center gap-2">📈 <span>Catatan</span></div>
            </a>

            <a href="{{ route('logout.proses') }}" class="block pt-4 text-red-500 hover:text-red-700">
                <div class="flex items-center gap-2">
                    <span>Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </a>

        </div>
    </div>

    <div class="flex-1 flex justify-center p-6">

        <div class="w-full max-w-[1200px] bg-[#d6d0cb] rounded-2xl shadow-inner p-8">

            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold">Dashboard</h2>

                <div class="flex items-center gap-4 w-[500px]">
                    <input type="text" placeholder="Hinted search text"
                        class="px-4 py-2 rounded-full w-full outline-none">
                    <div class="text-2xl cursor-pointer">☰</div>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-6 mb-6">

                <div class="bg-blue-700 text-white p-4 rounded shadow">
                    <p class="text-2xl font-bold">5</p>
                    <p>Buku</p>
                    <div class="mt-4 text-sm opacity-80 cursor-pointer">More info ➜</div>
                </div>

                <div class="bg-orange-500 text-white p-4 rounded shadow">
                    <p class="text-2xl font-bold">5</p>
                    <p>Total Peminjaman</p>
                    <div class="mt-4 text-sm opacity-80 cursor-pointer">More info ➜</div>
                </div>

                <div class="bg-green-600 text-white p-4 rounded shadow">
                    <p class="text-2xl font-bold">3</p>
                    <p>Total Pengembalian</p>
                    <div class="mt-4 text-sm opacity-80 cursor-pointer">More info ➜</div>
                </div>

                <div class="bg-red-500 text-white p-4 rounded shadow">
                    <p class="text-2xl font-bold">4</p>
                    <p>Kategori Buku</p>
                    <div class="mt-4 text-sm opacity-80 cursor-pointer">More info ➜</div>
                </div>

            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h3 class="text-lg font-bold mb-2">Selamat Datang, {{ explode(' ', session('nama', 'Qalea','petugas'))[0] }}!</h3>
                <p class="text-gray-600 text-sm">Di sini kamu bisa melihat koleksi buku, status peminjaman, dan riwayat pengembalian buku kamu secara real-time.</p>
            </div>

        </div>
    </div>
</div>

</body>
</html>