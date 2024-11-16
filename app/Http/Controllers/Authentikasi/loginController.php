<?php

namespace App\Http\Controllers\Authentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/')->with('login', 'Berhasil Login.');
        }

        return back()->with('invalid', 'Email / Password Tidak Sesuai.');
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/')->with('logout', 'Anda Telah Logout.');
        }
        return back();
    }
}
