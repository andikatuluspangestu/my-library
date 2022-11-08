<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        // menuju view views/auth/login.blade.php
        return view('auth/login');
    }

    public function register()
    {
        dd('ini register');
    }

    public function authenticate(Request $request)
    {
        // ambil data request utk diguanakn di flash session
        Session::flash('username', $request->username);
        Session::flash('password', $request->password);

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // cek apakah login valid
        // cek apakah users status active atau inactive
        if (Auth::attempt($credentials)) {
            // jika status inactive
            if (Auth::user()->status == 'inactive') {
                // paksa logout (hapus session) dan direct ke login
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login')->withErrors('Your account is not active yet. Please contact admin!');
            }

            // jika status active
            $request->session()->regenerate();

            // jika users role 1 (admin) maka ke dashboard
            if (Auth::user()->role_id == 1) {
                return redirect('/dashboard');
            }

            // jika users role 2 (client) maka ke profile
            if (Auth::user()->role_id == 2) {
                return redirect('/profile');
            }
        }

        // jika gagal login
        return redirect('/login')->withErrors('Login invalid!');
    }

    // Sumber = https://laravel.com/docs/9.x/authentication#logging-out
    public function logout(Request $request)
    {
        // logout untuk menghapus session user
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
