<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Petugas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-100 overflow-hidden"> 
    <div class="flex h-screen w-full"> 
        <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col h-full shrink-0">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold flex items-center gap-2">📖 LIBRARY</h1>
            </div>

            <div class="text-center py-6 border-b">
                <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
                <p class="font-semibold text-xs text-gray-400">PETUGAS :</p>
                <p class="font-bold text-sm">QALEA ALZAHRAZ</p>
            </div>

        <div class="p-4 space-y-3 text-sm">

                    <a href="/dashboard-petugas" class="block">
                        <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
                    </a>

                    <a href="/datapeminjaman" class="block ">
                        <div class="flex items-center gap-2">📦 <span>Data Peminjaman</span></div>
                    </a>

                    <a href="/datapengembalian" class="block">
                        <div class="flex items-center gap-2">🔄 <span>Data Pengembalian</span></div>
                    </a>

                    <a href="/dendapetugas" class="block">
                        <div class="flex items-center gap-2">📈 <span>Denda</span></div>
                    </a>

                    <a href="/databuku" class="block">
                        <div class="flex items-center gap-2">📈 <span>Data Buku</span></div>
                    </a>

                    <a href="/data-anggota" class="block">
                        <div class="flex items-center gap-2">📈 <span>Data Anggota</span></div>
                    </a>

                    <a href="{{ route('logout.proses') }}" class="block pt-4 text-red-500 hover:text-red-700">
                        <div class="flex items-center gap-2">
                            <span>Logout</span>
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>
                    </a>

        </div>
        </div>

        <main class="flex-1 h-screen overflow-y-auto p-6 bg-[#f4f7fa]">
            <div class="mb-6 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800 uppercase">Manajemen Data Buku</h1>
                <button onclick="openModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-xs font-bold shadow-md">
                    + TAMBAH BUKU
                </button>
            </div>

            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4 text-sm">{{ session('success') }}</div>
            @endif

            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-800 text-white text-xs uppercase">
                        <tr>
                            <th class="px-4 py-3 border">No</th>
                            <th class="px-4 py-3 border">ID Buku</th>
                            <th class="px-4 py-3 border">Judul Buku</th>
                            <th class="px-4 py-3 border">Pengarang</th>
                            <th class="px-4 py-3 border">Penerbit</th>
                            <th class="px-4 py-3 border text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        @forelse($bukus as $index => $buku)
                        <tr class="hover:bg-gray-50 border-b">
                            <td class="px-4 py-3 border text-center">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 border font-mono">{{ $buku->id_buku }}</td>
                            <td class="px-4 py-3 border font-bold">{{ $buku->judul_buku }}</td>
                            <td class="px-4 py-3 border">{{ $buku->pengarang }}</td>
                            <td class="px-4 py-3 border">{{ $buku->penerbit }} ({{ $buku->tahun }})</td>
                            <td class="px-4 py-3 border text-center">
                                <div class="flex justify-center gap-2">
                                    {{-- Tombol Detail --}}
                                    <button onclick="openDetail('{{ $buku->id_buku }}', '{{ $buku->judul_buku }}', '{{ $buku->pengarang }}', '{{ $buku->penerbit }}', '{{ $buku->tahun }}')" 
                                            class="bg-blue-500 text-white px-2 py-1 rounded text-[10px] uppercase">Detail</button>
                                    
                                    <button class="bg-yellow-500 text-white px-2 py-1 rounded text-[10px] uppercase">Edit</button>
                                    
                                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded text-[10px] uppercase" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-4 py-10 text-center text-gray-400">Data buku masih kosong.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <div id="modalTambah" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-[100]">
        <div class="bg-white rounded-lg shadow-xl w-[450px] overflow-hidden">
            <div class="bg-blue-600 p-4 text-white flex justify-between">
                <h3 class="font-bold uppercase text-sm">Input Data Buku Baru</h3>
                <button onclick="closeModal()" class="text-white text-xl">&times;</button>
            </div>
            <form action="{{ route('buku.store') }}" method="POST" class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-[10px] font-bold text-gray-500 uppercase">ID Buku</label>
                    <input type="text" name="id_buku" class="w-full border p-2 rounded text-sm focus:ring-1 focus:ring-blue-500 outline-none" placeholder="B001" required>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-500 uppercase">Judul Buku</label>
                    <input type="text" name="judul_buku" class="w-full border p-2 rounded text-sm focus:ring-1 focus:ring-blue-500 outline-none" required>
                </div>
                <div>
                    <label class="block text-[10px] font-bold text-gray-500 uppercase">Pengarang</label>
                    <input type="text" name="pengarang" class="w-full border p-2 rounded text-sm focus:ring-1 focus:ring-blue-500 outline-none" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 uppercase">Penerbit</label>
                        <input type="text" name="penerbit" class="w-full border p-2 rounded text-sm focus:ring-1 focus:ring-blue-500 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 uppercase">Tahun</label>
                        <input type="number" name="tahun" class="w-full border p-2 rounded text-sm focus:ring-1 focus:ring-blue-500 outline-none" required>
                    </div>
                </div>
                <div class="pt-4 flex gap-2">
                    <button type="button" onclick="closeModal()" class="flex-1 bg-gray-200 py-2 rounded text-xs font-bold uppercase">Batal</button>
                    <button type="submit" class="flex-1 bg-blue-600 text-white py-2 rounded text-xs font-bold uppercase hover:bg-blue-700">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>

    <div id="modalDetail" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-[110]">
        <div class="bg-white rounded-lg shadow-xl w-[400px] overflow-hidden">
            <div class="bg-gray-800 p-4 text-white flex justify-between">
                <h3 class="font-bold uppercase text-sm">Informasi Detail Buku</h3>
                <button onclick="closeDetailModal()" class="text-white text-xl">&times;</button>
            </div>
            <div class="p-6 space-y-4">
                <div class="flex flex-col items-center pb-4 border-b">
                    <div class="w-20 h-24 bg-gray-100 flex items-center justify-center border-2 border-dashed border-gray-300 rounded mb-2">
                        <i class="fa-solid fa-book text-3xl text-gray-300"></i>
                    </div>
                    <h4 id="det-judul" class="font-bold text-blue-600 text-center uppercase">Judul Buku</h4>
                </div>
                <div class="grid grid-cols-2 gap-y-3 text-xs">
                    <span class="text-gray-400 font-bold uppercase">ID Buku</span>
                    <span id="det-id" class="text-gray-700 font-mono text-right">-</span>
                    
                    <span class="text-gray-400 font-bold uppercase">Pengarang</span>
                    <span id="det-pengarang" class="text-gray-700 text-right">-</span>
                    
                    <span class="text-gray-400 font-bold uppercase">Penerbit</span>
                    <span id="det-penerbit" class="text-gray-700 text-right">-</span>
                    
                    <span class="text-gray-400 font-bold uppercase">Tahun Terbit</span>
                    <span id="det-tahun" class="text-gray-700 text-right">-</span>
                </div>
                <button onclick="closeDetailModal()" class="w-full mt-4 bg-gray-800 text-white py-2 rounded text-xs font-bold uppercase">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        // Fungsi Modal Tambah
        function openModal() {
            document.getElementById('modalTambah').classList.remove('hidden');
            document.getElementById('modalTambah').classList.add('flex');
        }
        function closeModal() {
            document.getElementById('modalTambah').classList.add('hidden');
            document.getElementById('modalTambah').classList.remove('flex');
        }

        // Fungsi Modal Detail
        function openDetail(id, judul, pengarang, penerbit, tahun) {
            document.getElementById('det-id').innerText = id;
            document.getElementById('det-judul').innerText = judul;
            document.getElementById('det-pengarang').innerText = pengarang;
            document.getElementById('det-penerbit').innerText = penerbit;
            document.getElementById('det-tahun').innerText = tahun;
            
            document.getElementById('modalDetail').classList.remove('hidden');
            document.getElementById('modalDetail').classList.add('flex');
        }
        function closeDetailModal() {
            document.getElementById('modalDetail').classList.add('hidden');
            document.getElementById('modalDetail').classList.remove('flex');
        }
    </script>
</body>
</html>