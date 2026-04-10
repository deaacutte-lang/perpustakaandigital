<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <div class="flex-1 p-6">
            <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-blue-600 px-6 py-4">
                    <h3 class="text-white font-bold text-lg">INPUT DATA BUKU BARU</h3>
                </div>
                
                <div class="p-8">
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="flex items-center">
                                <label class="w-1/4 font-semibold text-gray-700">ID Buku</label>
                                <input type="text" name="id_buku" class="w-3/4 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Contoh: B001" required>
                            </div>

                            <div class="flex items-center">
                                <label class="w-1/4 font-semibold text-gray-700">Judul Buku</label>
                                <input type="text" name="judul_buku" class="w-3/4 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Masukkan judul buku" required>
                            </div>

                            <div class="flex items-center">
                                <label class="w-1/4 font-semibold text-gray-700">Pengarang</label>
                                <input type="text" name="pengarang" class="w-3/4 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Nama pengarang" required>
                            </div>

                            <div class="flex items-center">
                                <label class="w-1/4 font-semibold text-gray-700">Penerbit</label>
                                <input type="text" name="penerbit" class="w-3/4 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Nama penerbit" required>
                            </div>

                            <div class="flex items-center">
                                <label class="w-1/4 font-semibold text-gray-700">Tahun Terbit</label>
                                <input type="number" name="tahun" class="w-3/4 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Contoh: 2024" required>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end gap-3">
                            <a href="/databuku" class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition">Batal</a>
                            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition shadow-md">Simpan Buku</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>