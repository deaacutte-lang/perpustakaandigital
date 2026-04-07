<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=1280">
<title>Library Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex h-screen w-[1280px] mx-auto">

    <!-- SIDEBAR -->
    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col">
        
        <!-- LOGO -->
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <!-- PROFILE -->
        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">QALEA ALZAHRAZ</p>
            <p class="text-xs text-gray-500">AZHRAZLEA@GMAIL.COM</p>
        </div>

        <!-- MENU -->
         <!-- MENU -->
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

            <a href="/login" class="block pt-4 text-red-500 hover:text-red-700">
                <div class="flex items-center gap-2">
                    <span>Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </a>

        </div>
    </div>
    <div class="bg-[#d6d0cb] p-6 rounded-2xl w-full h-full">

    <!-- NAVBAR -->
    <div class="flex justify-between items-start mb-6">
        <div>
            <p class="text-xs text-gray-600">halaman</p>
            <h1 class="text-xl font-semibold">Catatan peminjaman buku</h1>
        </div>

        <div class="text-2xl cursor-pointer">
            ☰
        </div>
    </div>

    <!-- CONTENT -->
    <div class="bg-[#e5e1dd] rounded-2xl p-6">

        <!-- PENJELASAN -->
        <div class="mb-6 text-sm leading-relaxed">
            <p class="font-semibold mb-2">
                📌 keterangan Peminjaman Buku
            </p>

            <p class="mb-2">
                Peminjam wajib mengembalikan buku sesuai tanggal yang telah ditentukan.
                Apabila terjadi keterlambatan, maka akan dikenakan denda harian.
            </p>

            <p class="mb-2">
                Denda dihitung berdasarkan jumlah hari keterlambatan dengan ketentuan sebagai berikut:
            </p>

            <ul class="list-disc ml-6 mb-2">
                <li>Terlambat 1 hari → dikenakan denda sesuai tarif harian</li>
                <li>Terlambat lebih dari 1 hari → denda akan diakumulasi sesuai jumlah hari keterlambatan</li>
            </ul>

            <p>
                Total denda = tarif denda per hari × jumlah hari keterlambatan.
            </p>
        </div>

        <!-- JUDUL TABEL -->
        <div class="mb-4">
            <p class="font-semibold">
                📚 Contoh Tabel Denda Keterlambatan Pengembalian Buku
            </p>
        </div>

        <!-- TABEL -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-center border-collapse">

                <thead>
                    <tr class="border-b border-gray-400">
                        <th class="py-2">No</th>
                        <th>Hari keterlambatan</th>
                        <th>Tarif Denda/Hari</th>
                        <th>Total Denda</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="py-3">1</td>
                        <td>1 hari</td>
                        <td>Rp.60.000</td>
                        <td>Rp.60.000</td>
                    </tr>

                    <tr>
                        <td class="py-3">2</td>
                        <td>2 hari</td>
                        <td>Rp.60.000</td>
                        <td>Rp.120.000</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

</div>

    </body>
</html>