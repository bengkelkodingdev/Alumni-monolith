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
        // Mengambil data kuesioner dengan paginasi
        $kuesioners = Kuesioner::paginate(5);

        // Mengirim data ke view 'admin.tracerstudyAdmin.kuesioner.index'
        return view('admin.tracerstudyAdmin.kuesioner.index', compact('kuesioners'));
    }
}