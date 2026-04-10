<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastiin model User udah ada

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function index()
    {
        return view('login'); // Pastiin ada file login.blade.php
    }

    // Proses Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek role buat nentuin dashboard
            if (Auth::user()->role == 'petugas') {
                return redirect()->intended('/dashboardpetugas');
            }
            return redirect()->intended('/dasboard'); // Ke dashboard anggota
        }

        return back()->with('error', 'Email atau password salah!');
    }

    // Tampilkan halaman Register
    public function showRegister()
    {
        return view('register'); // Pastiin ada file register.blade.php
    }

    // Proses Registrasi (Register)
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'anggota', // Default pas daftar jadi anggota
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login!');
    }

    // Simpan Anggota (Fungsi tambahan dari route lo)
    public function simpanAnggota(Request $request)
    {
        // Logika simpan anggota oleh admin/petugas
        return back()->with('success', 'Data anggota berhasil disimpan!');
    }

    // Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function detailBuku() 
    {
        return view('backend.petugas.detailbuku');
    }
}