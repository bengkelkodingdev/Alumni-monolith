<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class alumniprofileController extends Controller
{
    public function profilealumni()
    {
        if (Auth::check()) {
            // User is authenticated
            $user = Auth::user();
            $alumni = alumni::where('email', $user->email)->first();
            return view('profilealumni', compact('user'));
        } else {
            // User is not authenticated, redirect them
            return redirect()->route('login');
        }
        
    }

    public function store(Request $request)
    {
    $request->validate([
        'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($request->hasFile('profile_picture')) {
        $file = $request->file('profile_picture');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/profile_pictures', $filename);

        // Simpan nama file ke database di tabel `users`
        $user = Auth::user();
        $user->profile_picture = $filename;
        $user->save();
    }

    return redirect()->back()->with('success', 'Foto profil berhasil diunggah!');
    }

public function changePassword(Request $request)
{
    // Validasi input
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:1|confirmed',
    ]);

    // Periksa apakah password lama cocok
    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return back()->withErrors(['current_password' => 'Password lama tidak sesuai.']);
    }

    // Ganti password
    Auth::user()->update([
        'password' => Hash::make($request->new_password),
    ]);

    return back()->with('success', 'Password berhasil diubah.');
    
}




}
