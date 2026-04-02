<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simple - Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #D3D3D3;
        }
        .glass-card {
            background: #C9C4BF;
            border-radius: 40px;
            box-shadow: 20px 20px 60px #b3afaa, -20px -20px 60px #dfd9d4;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="glass-card w-full max-w-md p-10 flex flex-col items-center">
        
        <div class="mb-8 text-center">
            <div class="bg-white/30 p-4 rounded-full inline-block mb-4 shadow-sm">
                <i class="fas fa-book-open text-5xl text-pink-500"></i>
            </div>
            <h1 class="text-xl font-bold tracking-[0.2em] text-gray-800 uppercase">
                Perpustakaan Digital
            </h1>
            <div class="h-1 w-12 bg-pink-500 mx-auto mt-2 rounded-full"></div>
        </div>

        <form action="#" class="w-full space-y-6">
            
            <div class="space-y-2">
                <label class="text-sm font-semibold text-gray-700 ml-1">Email :</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" 
                        class="w-full bg-[#D9D9D9] border-none rounded-xl py-3 pl-10 pr-4 focus:ring-2 focus:ring-pink-400 outline-none shadow-inner placeholder:text-gray-400 transition-all" 
                        placeholder="masukkan email anda...">
                </div>
            </div>

            <div class="space-y-2">
                <div class="flex justify-between items-center px-1">
                    <label class="text-sm font-semibold text-gray-700">Password :</label>
                    <a href="#" class="text-[10px] text-pink-600 hover:underline">Lupa password?</a>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" 
                        class="w-full bg-[#D9D9D9] border-none rounded-xl py-3 pl-10 pr-4 focus:ring-2 focus:ring-pink-400 outline-none shadow-inner placeholder:text-gray-400 transition-all" 
                        placeholder="••••••••">
                </div>
            </div>

           <div class="pt-4">
    <a href="/dasboard" class="block w-full">
        <button type="button" 
            class="w-full bg-[#B8B3AE] hover:bg-pink-500 hover:text-white text-gray-800 font-bold text-lg py-3 rounded-xl border border-black/10 transition-all shadow-md active:scale-[0.98]">
            LOGIN
        </button>
    </a>
</div>
        </form>

        <p class="mt-8 text-xs text-gray-600">
            Belum punya akun? <a href="#" class="font-bold text-pink-700 hover:underline">Daftar di sini</a>
        </p>
    </div>

</body>
</html>