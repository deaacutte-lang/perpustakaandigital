<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Anggota - Perpustakaan Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; overflow: hidden; }
        .login-container { min-height: 100vh; display: flex; align-items: center; justify-content: center; position: relative; }
        .login-background { position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 0; }
        .login-card { background-color: rgba(210, 206, 199, 0.8); backdrop-filter: blur(10px); border-radius: 40px; padding: 35px; width: 90%; max-width: 400px; z-index: 10; border: 1px solid rgba(255, 255, 255, 0.2); }
        .form-control { width: 100%; padding: 10px 15px 10px 45px; background-color: rgba(230, 227, 223, 0.9); border-radius: 15px; outline: none; border: 1px solid rgba(0,0,0,0.1); }
        .btn-regis { width: 100%; padding: 12px; background-color: #f671a1; color: white; font-weight: 700; border-radius: 15px; margin-top: 15px; transition: 0.3s; }
        .btn-regis:hover { background-color: #d65a8a; transform: scale(0.98); }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ $backgroundImageUrl ?? 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=1920' }}" class="login-background">
        
        <div class="login-card">
            <h1 class="text-center text-xl font-bold mb-6">DAFTAR ANGGOTA</h1>

            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="mb-4 relative">
                    <i class="fas fa-user absolute left-4 top-3.5 text-gray-500"></i>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="mb-4 relative">
                    <i class="fas fa-envelope absolute left-4 top-3.5 text-gray-500"></i>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="mb-4 relative">
                    <i class="fas fa-lock absolute left-4 top-3.5 text-gray-500"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password (min. 5 karakter)" required>
                </div>

                <button type="submit" class="btn-regis">DAFTAR SEKARANG</button>
            </form>

            <div class="text-center mt-4 text-sm">
                Sudah punya akun? <a href="/login" class="font-bold text-blue-700">Login di sini</a>
            </div>
        </div>
    </div>
</body>
</html>