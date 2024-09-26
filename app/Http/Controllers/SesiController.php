<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    
    function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        // Cek apakah email terdaftar
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            // Jika email tidak ditemukan
            return redirect()->back()->withErrors(['email_tidak_terdaftar' => 'Email belum terdaftar, silahkan melakukan register terlebih dahulu.'])->withInput();
        }

        // Jika email terdaftar, lanjutkan cek autentikasi
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Cek autentikasi menggunakan Auth::attempt
        if (Auth::attempt($infologin)) {
            // Cek role pengguna setelah login berhasil
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->role == 'bukanadmin') {
                return redirect('bukanadmin');
            } elseif (Auth::user()->role == 'alumni') {
                return redirect('alumni');
            }
        } else {
            // Jika email terdaftar tapi password salah
            return redirect()->back()->withErrors(['login_gagal' => 'Password yang dimasukkan salah'])->withInput();
        }
    }
    
    function logout(){
        Auth::logout();
        return redirect('');
    }
}
