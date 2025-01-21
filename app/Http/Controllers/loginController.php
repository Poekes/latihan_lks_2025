<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(Request $request)
    {
        return view("login");
    }
    public function auth(Request $request)
    {
        $cre = $request->validate(
            [
                'username' => 'required|max:255',
                'password' => 'required|max:255'
            ]
        );

        if (Auth::attempt($cre)) {
            $request->session()->regenerate();
            return redirect()->intended($request->user()->role == 'admin' ? '/admin' : '/');
        }

        return back()->with('invalidlogin', 'gagal login')->onlyInput('username');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('login')->with('logout', 'berhasil logout');
    }
}
