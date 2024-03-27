<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:6']
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('/balai/bbwsserayuopak/dashboard');
        } else {
            return redirect()->route('/balai/bbwsserayuopak/login')->with('loginError', 'Email atau Password invalid');
        }
    }
    public function logout(Request $request)
    {
        auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/balai/bbwsserayuopak/login');
    }
}
