<?php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if ($email == "admin@gmail.com" && $password == "12345") {
            return redirect('/dashboard')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
