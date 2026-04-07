<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota; // Pastiin lo udah buat model Anggota pake artisan
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        // Pastiin lo udah taro foto pwt.jpeg di folder public/
        $imagePath = public_path('pwt.jpeg');

        if (file_exists($imagePath)) {
            $imageData = file_get_contents($imagePath);
            $base64Image = base64_encode($imageData);
            $mimeType = mime_content_type($imagePath);
            $backgroundImageUrl = 'data:' . $mimeType . ';base64,' . $base64Image;
        } else {
            // Gambar cadangan kalo pwt.jpeg gak ketemu
            $backgroundImageUrl = 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=1920';
        }

        return view('login', compact('backgroundImageUrl'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // LOGIKA LOGIN PETUGAS (DATA MANUAL)
        if ($request->email === "admin@gmail.com" && $request->password === "password") {
            session([
                'is_logged_in' => true,
                'role' => 'petugas',
                'nama' => 'Admin Perpustakaan'
            ]);
            
            return redirect('/dashboard-petugas')->with('success', 'Login berhasil!');
        }

        // LOGIKA LOGIN ANGGOTA (CEK KE DATABASE)
        // Ini bakal nyari di tabel 'anggotas' berdasarkan email
        $anggota = Anggota::where('email', $request->email)->first();

        if ($anggota && Hash::check($request->password, $anggota->password)) {
            session([
                'is_logged_in' => true,
                'role' => 'anggota',
                'nama' => $anggota->nama,
                'email' => $anggota->email
            ]);

            return redirect('/dashboard-anggota')->with('success', 'Selamat Datang Anggota!');
        }

        return back()->withErrors(['error' => 'Email atau password salah.']);
    }

    // TAMBAHAN: Fungsi buat nampilin halaman register anggota
    public function showRegister()
    {
        // Ambil background yang sama biar estetik
        $imagePath = public_path('pwt.jpeg');
        if (file_exists($imagePath)) {
            $imageData = file_get_contents($imagePath);
            $base64Image = base64_encode($imageData);
            $mimeType = mime_content_type($imagePath);
            $backgroundImageUrl = 'data:' . $mimeType . ';base64,' . $base64Image;
        } else {
            $backgroundImageUrl = 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=1920';
        }

        return view('register', compact('backgroundImageUrl'));
    }

    // TAMBAHAN: Fungsi buat nyimpen pendaftaran Anggota baru
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:anggotas',
            'password' => 'required|min:5',
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Password di-hash biar aman
        ]);

        return redirect('/login')->with('success', 'Berhasil daftar, silakan login!');
    }

    // TAMBAHAN: Fungsi logout biar tombol logout lo bisa dipake
    public function logout(Request $request)
    {
        // Hapus semua session
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout!');
    }
}