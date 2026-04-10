<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// TAMBAHAN
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;

// TAMBAHAN 🔥 (biar email gak case sensitive)
use Illuminate\Support\Str;

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
        // TAMBAHAN 🔥 (hapus session lama)
        session()->flush();

        // TAMBAHAN 🔥 (rapihin input)
        $email = strtolower(trim($request->email));
        $password = trim($request->password);

        // LOGIN ADMIN (tetap seperti punyamu)
        if ($email == "admin@gmail.com" && $password == "12345") {

            // TAMBAHAN 🔥 (set session admin)
            session([
                'login' => true,
                'email' => $email,
                'role' => 'petugas'
            ]);

            return redirect('/dasboard')->with('success', 'Login berhasil');
        }

        // =========================
        // TAMBAHAN LOGIN ANGGOTA
        // =========================
        $anggota = Anggota::whereRaw('LOWER(email) = ?', [$email])->first();

        if ($anggota && Hash::check($password, $anggota->password)) {

            session([
                'login' => true,
                'nama' => $anggota->nama,
                'email' => $anggota->email,
                'role' => 'anggota'
            ]);

            return redirect('/dasboard')->with('success', 'Login anggota berhasil');
        }

        // TAMBAHAN 🔥 DEBUG (biar tau errornya apa)
        return back()
            ->withInput()
            ->with('error', 'Email atau password salah')
            ->with('debug_email', $email);
    }

    // Tambahan fungsi logout biar tombol di sidebar jalan
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login')->with('success', 'Berhasil logout');
    }
}