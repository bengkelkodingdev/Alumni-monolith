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
    public function store(Request $request)
    {
        // Validasi request untuk memastikan ada file yang di-upload
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mengambil file dari request
        $image = $request->file('profile_picture');

        // Memberikan nama unik untuk file tersebut dan menyimpannya ke direktori public/images
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        // Menampilkan semua request (termasuk path file) dan mengembalikan view profile
        // dd($request->all());
        return view('profile', ['imagePath' => 'images/'.$imageName]);
    }

}
