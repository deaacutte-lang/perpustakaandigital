<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Fix biar Bootstrap gak ngerusak layout sidebar Tailwind */
        .card { border: none; border-radius: 8px; }
        .table { font-size: 0.875rem; background: white; }
        .btn-sm { font-size: 0.75rem; }
        /* Efek hover menu */
        .menu-item:hover { background-color: #f3f4f6; border-radius: 0.375rem; }
        .menu-active { background-color: #eff6ff; border-left: 4px solid #3b82f6; border-radius: 0.375rem; }
    </style>
</head>

<body class="bg-gray-100 overflow-hidden"> 
    <div class="flex h-screen w-full"> 
        <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col h-full">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold flex items-center gap-2">
                    📖 LIBRARY
                </h1>
            </div>

            <div class="text-center py-6 border-b">
                <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3 border-2 border-gray-200">
                <p class="font-semibold text-xs text-gray-400">PETUGAS :</p>
                <p class="font-bold text-sm">{{ session('nama', 'QALEA ALZAHRAZ') }}</p>
                <p class="text-[10px] text-gray-500 uppercase">{{ session('email', 'AZHRAZLEA@GMAIL.COM') }}</p>
            </div>

            <div class="p-4 space-y-3 text-sm">

            <a href="/dashboard-petugas" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/datapeminjaman" class="block">
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

        <div class="flex-1 bg-[#d6d0cb] p-6 overflow-auto">
            <div class="container-fluid">
                <div class="card shadow-sm bg-white">
                    <div class="card-header bg-white border-b py-3">
                        <div class="text-success fw-bold flex items-center gap-2">
                            <i class="fa-solid fa-clock-rotate-left"></i> Data Pengembalian Buku
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <label class="text-muted small">
                                    <select class="form-select form-select-sm d-inline-block" style="width: auto;">
                                        <option value="10">10</option>
                                    </select> records per page
                                </label>
                            </div>
                            <div>
                                <label class="text-muted small">Search: 
                                    <input type="search" class="form-control form-control-sm d-inline-block" style="width: auto;">
                                </label>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peminjam</th>
                                        <th>Judul Buku</th>
                                        <th>Penerbit</th>
                                        <th>Isbn</th>
                                        <th>Lokasi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Looping Data --}}
                                    @forelse($peminjamans->where('status', 'Dikembalikan') as $pjm)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $pjm->nama_peminjam }}</td>
                                        <td>{{ $pjm->judul_buku }}</td>
                                        <td>{{ $pjm->buku->penerbit ?? 'Elexmedia' }}</td>
                                        <td>{{ $pjm->buku->isbn ?? '837383' }}</td>
                                        <td class="text-center">Rak 1</td>
                                        <td class="text-center">
                                            <span class="badge bg-success">Selesai</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-outline-secondary btn-sm" title="Detail"><i class="fa fa-eye"></i></button>
                                                <button class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4 text-muted italic">
                                            <i class="fa-solid fa-folder-open mb-2 d-block text-2xl"></i>
                                            Belum ada data pengembalian yang tercatat.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="small text-muted">Showing {{ $peminjamans->where('status', 'Dikembalikan')->count() }} entries</div>
                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-info text-white btn-sm shadow-sm hover:bg-info/90">
                        <i class="fa fa-print"></i> Export to PDF/Excel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>