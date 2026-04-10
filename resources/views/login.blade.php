<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Perpustakaan Digital</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .login-container {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .login-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .login-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2); 
            z-index: 1;
        }

        .login-card {
            background-color: rgba(210, 206, 199, 0.7); 
            backdrop-filter: blur(10px); 
            -webkit-backdrop-filter: blur(10px);
            border-radius: 40px; 
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
            padding: 35px;
            width: 90%;
            max-width: 380px; 
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .login-logo {
            background-color: #f671a1; 
            color: #fff;
            width: 85px;
            height: 85px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        .login-logo i {
            font-size: 40px;
        }

        .login-title {
            color: #212529; 
            font-size: 20px; 
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 5px;
            text-align: center;
        }

        .login-title-underline {
            width: 35px;
            height: 3px;
            background-color: #f671a1; 
            border-radius: 2px;
            margin-bottom: 25px;
        }

        .login-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
            width: 100%;
        }

        .form-label {
            display: flex;
            justify-content: space-between;
            color: #333; 
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-control-wrapper {
            position: relative;
        }

        .form-control-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #666; 
            font-size: 16px;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px 10px 45px;
            background-color: rgba(230, 227, 223, 0.8); 
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 15px;
            font-size: 14px;
            color: #212529;
            outline: none;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #beb6ac; 
            color: #3d4043; 
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-top: 10px;
            margin-bottom: 20px;
            transition: 0.3s;
            text-align: center;
        }

        .btn-login:hover {
            background-color: #ada499;
            transform: scale(0.98);
        }

        .login-footer {
            color: #333; 
            font-size: 13px;
            text-align: center;
        }

        .login-footer a {
            color: #f671a1; 
            font-weight: 700;
            text-decoration: none;
        }
    </style>
</head>
<body class="antialiased">
    <div class="login-container">
        <div class="login-overlay"></div>
        <img src="{{ asset('img/pwt.jpg') }}" alt="Background Image" class="login-background">

        <div class="login-card">
            <div class="login-logo">
                <i class="fas fa-book-open"></i> 
            </div>
            
            <h1 class="login-title">Perpustakaan Digital</h1>
            <div class="login-title-underline"></div>

            @if ($errors->any())
                <div class="mb-4 text-red-600 text-xs font-bold text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label class="form-label">Email :</label>
                    <div class="form-control-wrapper">
                        <i class="fas fa-envelope form-control-icon"></i> 
                       <input type="email" name="email" class="form-control" placeholder="masukkan email anda..." required value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <span>Password :</span>
                        <a href="#" style="color: #f671a1;">Lupa password?</a> 
                    </label>
                    <div class="form-control-wrapper">
                        <i class="fas fa-lock form-control-icon"></i> 
                        <input type="password" name="password" class="form-control" placeholder="........" required>
                    </div>
                </div>

                <button type="submit" class="btn-login">LOGIN</button>
            </form>

            <div class="login-footer">
                Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
            </div>
        </div>
    </div>
</body>
</html>