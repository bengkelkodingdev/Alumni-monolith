<?php

namespace App\Http\Controllers;

//import Model "kuesioner
use App\Models\kuesioner;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return datatable
use Yajra\DataTables\DataTables;

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

    public function home(): View
    {
        // Mengambil data kuesioner dengan paginasi
        $data = Kuesioner::paginate(10); // Paginasi dengan 10 item per halaman
    
        // Query ke database untuk mendapatkan data mahasiswa
        $totalAlumni = Kuesioner::count();
        $statusCounts = [
            'status1' => Kuesioner::where('status', 'Bekerja Full Time')->count(),
            'status2' => Kuesioner::where('status', 'Bekerja Part Time')->count(),
            'status3' => Kuesioner::where('status', 'Wirausaha')->count(),
            'status4' => Kuesioner::where('status', 'Melanjutkan Pendidikan')->count(),
            'status5' => Kuesioner::where('status', 'Tidak Bekerja Tetapi Sedang Mencari Pekerjaan')->count(),
            'status6' => Kuesioner::where('status', 'Belum Memungkinkan Bekerja')->count(),
            'status7' => Kuesioner::where('status', 'Menikah/Mengurus Keluarga')->count(),
        ];
    
        // Mengirim data ke view 'admin.tracerstudyAdmin.kuesioner.home'
        return view('admin.tracerstudyAdmin.kuesioner.home', compact('data', 'totalAlumni', 'statusCounts'));
    }
     
    public function index(Request $request)
    {
        $status = $request->input('status', 'Bekerja Full Time'); // Default status jika tidak ada

        if ($request->ajax()) {
            $data = Kuesioner::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        
        // Query data dari tabel kuesioners berdasarkan status
        $data = Kuesioner::where('status', $status)->get();

        // Kirimkan data dan status ke view index.blade.php
        return view('admin.tracerstudyAdmin.kuesioner.index', compact('status', 'data'));
    }
}