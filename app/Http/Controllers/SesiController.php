<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($infologin)){
                if(Auth::user()->role == 'admin'){
                    return redirect('admin/admin');
                }elseif (Auth::user()->role == 'bukanadmin'){
                    return redirect('admin/bukanadmin');
                }elseif (Auth::user()->role == 'alumni'){
                    return redirect('admin/alumni');
                }
            exit();
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');

    }
    
    
}
