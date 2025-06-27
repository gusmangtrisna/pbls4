<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            session()->flash('success', 'Login berhasil! Selamat datang, ' . Auth::user()->name);

            if (Auth::user()->role === 'admin') {
                return redirect('/admin/dashboard');
            }

            return redirect('/');
        }

        return back()->with('error', 'Email atau password salah.');
    }

    public function logout(Request $request)
    {
         Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
         return redirect('/')
        ->with('success', 'Berhasil logout. Sampai jumpa! 🎉');
    }
}