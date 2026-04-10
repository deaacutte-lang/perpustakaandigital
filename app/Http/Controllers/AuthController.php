<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $imagePath = public_path('pwt.jpeg');

        if (file_exists($imagePath)) {
            $imageData = file_get_contents($imagePath);
            $base64Image = base64_encode($imageData);
            $mimeType = mime_content_type($imagePath);
            $backgroundImageUrl = 'data:' . $mimeType . ';base64,' . $base64Image;
        } else {
            $backgroundImageUrl = 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=1920';
        }

        return view('login', compact('backgroundImageUrl'));
    }

    public function login(Request $request)
    {
        // TAMBAHAN 🔥 (hapus session lama biar nggak nyangkut ke petugas)
        $request->session()->flush();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // LOGIKA LOGIN PETUGAS (DATA MANUAL)
        if ($request->email === "petugas@gmail.com" && $request->password === "petugas123") {
            session([
                'is_logged_in' => true,
                'role' => 'petugas',
                'nama' => 'Admin Perpustakaan',
                'email' => 'petugas@gmail.com'
            ]);
            
            return redirect('/dashboardpetugas')->with('success', 'Login petugas berhasil!');
        }

        // LOGIKA LOGIN ANGGOTA (DARI DATABASE)
        $anggota = Anggota::where('email', $request->email)->first();

        if ($anggota && Hash::check($request->password, $anggota->password)) {
            session([
                'is_logged_in' => true,
                'role' => 'anggota',
                'nama' => $anggota->nama,
                'email' => $anggota->email
            ]);

            return redirect('/dashboard-anggota')->with('success', 'Login anggota berhasil!');
        }

        // =========================
        // TAMBAHAN 🔥 FALLBACK LOGIN (Jika password di database bermasalah)
        // =========================
        if ($anggota && $request->password == "password") {
            session([
                'is_logged_in' => true,
                'role' => 'anggota',
                'nama' => $anggota->nama,
                'email' => $anggota->email
            ]);

            return redirect('/dashboard-anggota')->with('success', 'Login fallback berhasil!');
        }

        return back()->withErrors(['error' => 'Email atau password salah.']);
    }

    public function showRegister()
    {
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
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Berhasil daftar, silakan login!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout!');
    }

    public function detailBuku()
    {
        return view('detailbuku'); 
    }
}