<?php

namespace App\Http\Controllers;

use App\Models\academic;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $academics = academic::where('email', $user->email)->first();
        return view('profile');
    }
}
