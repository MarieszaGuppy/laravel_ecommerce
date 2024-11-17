<?php

namespace App\Http\Controllers\Authentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:30|unique:users',
            'email' => 'required|min:3|max:255|email:dns,rfc|unique:users',
            'password' => 'required|min:3|max:255'
        ]);


        $user = User::create([
            'name' => $validateData['name'],
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'password' => hash::make($validateData['password'])
        ]);

        auth::login($user);

        return redirect('/');

    }
}
