<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\statistik;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin()
    {
        // Ambil tahun saat ini dan tiga tahun ke belakang
        $currentYear = Carbon::now()->year;
        $threeYearsAgo = $currentYear - 2;
    
        // Ambil data statistik untuk 3 tahun terakhir
        $statistiks = statistik::where('tahun_lulus', '>=', $threeYearsAgo)->latest()->paginate(3);
    
        // Hitung jumlah alumni 3 tahun terakhir
        $totalAlumni3Years = statistik::where('tahun_lulus', '>=', $threeYearsAgo)->sum('alumni_total');
    
        // Hitung jumlah alumni terdeteksi 3 tahun terakhir
        $detectedAlumni3Years = statistik::where('tahun_lulus', '>=', $threeYearsAgo)->sum('alumni_terlacak');
    
        // Hitung jumlah total alumni secara keseluruhan
        $totalAlumniAllYears = statistik::sum('alumni_total');
    
        return view('admin.dashboard', compact('totalAlumni3Years', 'detectedAlumni3Years', 'totalAlumniAllYears', 'statistiks'));
    }
}
