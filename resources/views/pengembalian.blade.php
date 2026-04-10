<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { background-color: #f4f7f6; margin: 0; padding: 0; }
        .card-header { background-color: #ffffff !important; border-bottom: 1px solid #eeeeee; }
        label { font-size: 14px; color: #333; }
        /* Biar scrollbar nggak ganggu layout */
        .flex-1::-webkit-scrollbar { width: 5px; }
        .flex-1::-webkit-scrollbar-thumb { background: #ccc; }
    </style>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex h-screen w-full">

    <div class="w-[260px] bg-white border-r border-gray-300 flex flex-col shrink-0">
        
        <div class="p-4 border-b">
            <h1 class="text-xl font-bold flex items-center gap-2">
                📖 LIBRARY
            </h1>
        </div>

        <div class="text-center py-6 border-b">
            <img src="https://i.pravatar.cc/100" class="w-20 h-20 rounded-full mx-auto mb-3">
            <p class="font-semibold">ANGGOTA :</p>
            <p class="text-sm">QALEA ALZAHRAZ</p>
            <p class="text-xs text-gray-500">AZHRAZLEA@GMAIL.COM</p>
        </div>

         <div class="p-4 space-y-3 text-sm">

            <a href="/dashboard-anggota" class="block">
                <div class="flex items-center gap-2">🏠 <span>Dashboard</span></div>
            </a>

            <a href="/halamanbuku" class="block">
                <div class="flex items-center gap-2">📊 <span>Halaman Buku</span></div>
            </a>

            <a href="/peminjaman" class="block">
                <div class="flex items-center gap-2">📦 <span>Peminjaman</span></div>
            </a>

            <a href="/pengembalian" class="block font-bold text-blue-600">
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

            {{-- NOTIFIKASI SUKSES --}}
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4 shadow-sm" role="alert">
                <strong>Berhasil!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card shadow-sm border-0" style="max-width: none; border-radius: 8px;">
                <div class="card-header bg-white py-4 px-4 border-bottom">
                    <h6 class="m-0 font-weight-bold text-dark text-lg">INPUT PENGEMBALIAN BUKU</h6>
                </div>
                
                <div class="card-body px-5 py-5">
                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf
                        <div class="row mb-4 align-items-center">
                            <label class="col-sm-2 fw-bold text-end">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control border-gray-300" placeholder="judul buku" required>
                            </div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <label class="col-sm-2 fw-bold text-end">Nama Peminjam</label>
                           <div class="col-sm-9">
                                <input type="text" name="nama_peminjam" class="form-control border-gray-300" placeholder="nama peminjam" value="QALEA ALZAHRAZ" required>
                            </div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <label class="col-sm-2 fw-bold text-end">Tanggal Pinjam</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_pinjam" class="form-control bg-gray-100" required>
                            </div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <label class="col-sm-2 fw-bold text-end">Tanggal Kembali</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_kembali" class="form-control bg-gray-100" required>
                            </div>
                        </div>

                        <div class="row mb-5 align-items-center">
                            <label class="col-sm-2 fw-bold text-end">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control border-gray-300" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9 flex gap-3">
                                <button type="submit" class="btn btn-primary px-5 py-2 shadow-sm" style="background-color: #2563eb; border: none;">Simpan</button>
                                <button type="reset" class="btn btn-danger px-5 py-2 shadow-sm" style="background-color: #dc2626; border: none;">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>