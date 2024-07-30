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
            'nama_alumni'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required'
        ]);

        $data = [
            'nama_alumni'=> $request->nama_alumni,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=> Hash::make($request->password)
        ];

        User::create($data);
        return redirect()->route('login')->with('pesan','berhasil');
    }
    
}