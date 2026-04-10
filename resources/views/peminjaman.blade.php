<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    body {
        background-color: #d2cbc4; 
        margin: 0;
    }
    </style>
</head>

<body>

<div class="flex min-h-screen w-full">

    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col shrink-0">
        
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">{{ session('nama', 'QALEA ALZAHRAZ') }}</p>
            <p class="text-xs text-gray-500">{{ session('email', 'AZHRAZLEA@GMAIL.COM') }}</p>
        </div>

        <div class="p-4 space-y-3 text-sm">

            <a href="/dashboard-anggota" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/halamanbuku" class="block">
                <div class="flex items-center gap-2">📊 <span>Halaman Buku</span></div>
            </a>

            <a href="/peminjaman" class="block font-bold text-blue-600">
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

    <div class="flex-1 bg-[#d6d0cb] p-6">

        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <div class="text-success fw-bold">Data Peminjaman Buku</div>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label>Search: 
                                <input type="search" class="form-control form-control-sm d-inline-block" style="width: auto;">
                            </label>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-gray-50">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Judul</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- DATA DARI DATABASE (DYNAMIC) --}}
                                @forelse($peminjamans ?? [] as $key => $pjm)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ $pjm->user->name ?? session('nama') }}</td>
                                    <td>{{ $pjm->buku->judul_buku ?? 'Judul Buku' }}</td>
                                    <td class="text-center">{{ $pjm->tanggal_pinjam ?? now()->format('d-m-Y') }}</td>
                                    <td class="text-center">{{ $pjm->tanggal_kembali ?? now()->addDays(7)->format('d-m-Y') }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-check"></i> {{ $pjm->status ?? 'Dipinjam' }}
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                {{-- CONTOH DATA STATIS KALAU DATABASE MASIH KOSONG --}}
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Dila</td>
                                    <td>Dilan</td>
                                    <td class="text-center">30-03-2026</td>
                                    <td class="text-center">27-04-2026</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Dipinjam</button>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>Showing 1 to 1 of 1 entries</div>
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

</body>
</html>