<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // tampilkan halaman login
    public function index()
    {
        return view('login');
    }

    // proses login
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // contoh login sederhana (tanpa database)
        // Gue arahin ke /dasboard sesuai nama file blade lo
        if ($email == "admin@gmail.com" && $password == "12345") {
            return redirect('/dasboard')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email atau password salah');
    }

    // Tambahan fungsi logout biar tombol di sidebar jalan
    public function logout(Request $request)
    {
        // Kalau lo pake sistem Auth bawaan Laravel
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login')->with('success', 'Berhasil logout');
    }
}