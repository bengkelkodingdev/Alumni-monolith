<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpan(Request $request){
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required'
        ]);

        $data = [
            'name'=> $request->nama,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=> Hash::make($request->password)
        ];

        User::create($data);
        return redirect()->route('login')->with('pesan','berhasil');
    }
    
}