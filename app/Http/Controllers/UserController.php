<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // dd('Halaman Profile');
        // dd(Auth::user());
        return view('profile');
    }
}
