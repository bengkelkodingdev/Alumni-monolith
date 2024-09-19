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
        // Query ke database untuk mendapatkan data mahasiswa
        $totalAlumni = kuesioner::count();
        $statusCounts = [
            'status1' => kuesioner::where('status', 'Bekerja Full Time')->count(),
            'status2' => kuesioner::where('status', 'Bekerja Part Time')->count(),
            'status3' => kuesioner::where('status', 'Wirausaha')->count(),
            'status4' => kuesioner::where('status', 'Melanjutkan Pendidikan')->count(),
            'status5' => kuesioner::where('status', 'Tidak Bekerja Tetapi Sedang Mencari Pekerjaan')->count(),
            'status6' => kuesioner::where('status', 'Belum Memungkinkan Bekerja')->count(),
            'status7' => kuesioner::where('status', 'Menikah/Mengurus Keluarga')->count(),
        ];
    
        // Mengirim data ke view 'admin.kuesioner.home'
        return view('admin.kuesioner.home', compact('totalAlumni', 'statusCounts'));
    }
     
    public function index(Request $request)
    {        
        $status = $request->input('status', 'Bekerja Full Time'); // Default status jika tidak ada

        if ($request->ajax()) {
            $data = kuesioner::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        
        // Query data dari tabel kuesioners berdasarkan status
        $data = kuesioner::where('status', $status)->get();

        // Ambil data dari tabel kuesioners dengan status yang sesuai, gunakan paginate
        $kuesioners = kuesioner::where('status', $status)->paginate(10);

        // Kirimkan data dan status ke view index.blade.php
        return view('admin.kuesioner.index', compact('kuesioners','status', 'data'));
    }
}