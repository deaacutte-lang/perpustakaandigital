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
            <a href="/frompeminjaman" class="block font-bold text-blue-600">
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

    <div class="flex-1 p-6 overflow-auto bg-gray-50">
        <div class="container-fluid">
            <div class="card shadow-sm border-0 bg-white" style="max-width: none; border-radius: 8px;">
                <div class="card-header bg-white py-4 px-4 border-b">
                    <h6 class="m-0 font-bold text-dark text-lg">INPUT PEMINJAMAN BUKU</h6>
                </div>
                
                <div class="card-body px-5 py-5">
                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf
                        
                        <div class="flex mb-4 items-center">
                            <label class="w-1/4 font-bold text-right pr-4">Judul Buku</label>
                            <div class="w-3/4">
                                <input type="text" name="judul_buku" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="judul buku" required>
                            </div>
                        </div>

                        <div class="flex mb-4 items-center">
                            <label class="w-1/4 font-bold text-right pr-4">Nama Peminjam</label>
                            <div class="w-3/4">
                                <input type="text" name="nama_peminjam" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="nama peminjam" required>
                            </div>
                        </div>

                        <div class="flex mb-4 items-center">
                            <label class="w-1/4 font-bold text-right pr-4">Tanggal Pinjam</label>
                            <div class="w-3/4">
                                <input type="date" name="tanggal_pinjam" class="w-full border border-gray-300 p-2 rounded bg-gray-100 focus:outline-none focus:border-blue-500" required>
                            </div>
                        </div>

                        <div class="flex mb-4 items-center">
                            <label class="w-1/4 font-bold text-right pr-4">Tanggal Kembali</label>
                            <div class="w-3/4">
                                <input type="date" name="tanggal_kembali" class="w-full border border-gray-300 p-2 rounded bg-gray-100 focus:outline-none focus:border-blue-500" required>
                            </div>
                        </div>

                        <div class="flex mb-5 items-center">
                            <label class="w-1/4 font-bold text-right pr-4">Keterangan</label>
                            <div class="w-3/4">
                                <input type="text" name="keterangan" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="w-1/4"></div>
                            <div class="w-3/4 flex gap-3">
                                <button type="submit" class="px-5 py-2 text-white rounded shadow-sm hover:bg-blue-700 transition" style="background-color: #2563eb;">Simpan</button>
                                <a href="/dasboard" class="px-5 py-2 text-white rounded shadow-sm hover:bg-red-700 transition text-center" style="background-color: #dc2626; text-decoration: none;">Batal</a>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div> 

</div>

</body>
</html>