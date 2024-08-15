<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $alumni = alumni::where('email', $user->email)->first();
        return view('profile', ['alumni' => $alumni]);
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



}
