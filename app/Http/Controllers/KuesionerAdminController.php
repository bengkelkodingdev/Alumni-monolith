<?php

namespace App\Http\Controllers;

//import Model "kuesioner
use App\Models\kuesioner;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class KuesionerAdminController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();

        // Mengambil kuesioner terbaru dengan paginasi
        $kuesioners = Kuesioner::where('id_alumni', $user->id)->latest()->paginate(5);

        // Render view dengan kuesioner dan data pengguna
        return view('admin.tracerstudyAdmin.kuesioner.index', compact('kuesioners', 'user'));
    }
}