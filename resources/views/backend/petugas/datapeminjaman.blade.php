<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold text-xs text-gray-400">PETUGAS :</p>
            <p class="font-bold text-sm">{{ session('nama', 'QALEA ALZAHRAZ') }}</p>
            <p class="text-[10px] text-gray-500 uppercase">{{ session('email', 'AZHRAZLEA@GMAIL.COM') }}</p>
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


      <div class="flex-1 bg-[#d6d0cb] p-6 overflow-auto">

        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <div class="text-success fw-bold">Data Peminjaman Buku</div>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label>
                                <select class="form-select form-select-sm d-inline-block" style="width: auto;">
                                    <option value="10">10</option>
                                </select> records per page
                            </label>
                        </div>
                        <div>
                            <label>Search: 
                                <input type="search" class="form-control form-control-sm d-inline-block" style="width: auto;">
                            </label>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Peminjam</th>
                                    <th>Judul Buku</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Tgl Kembali</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($peminjamans as $key => $pjm)
                                <tr class="align-middle text-center">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pjm->nama_peminjam }}</td>
                                    <td>{{ $pjm->judul_buku }}</td>
                                    <td>{{ $pjm->tanggal_pinjam }}</td>
                                    <td>{{ $pjm->tanggal_kembali }}</td>
                                    <td>
                                        <span class="badge {{ $pjm->status == 'Dipinjam' ? 'bg-warning text-dark' : 'bg-success' }}">
                                            {{ $pjm->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-secondary btn-sm"><i class="fa fa-sync"></i> Update</button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted italic py-4">Belum ada data peminjaman.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>


                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>Showing 1 to {{ $peminjamans->count() }} entries</div>
                        <nav>
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item disabled"><a class="page-link">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-info text-white btn-sm">
                    <i class="fa fa-print"></i> ImportExcelToMysql
                </button>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>