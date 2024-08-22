<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Logang;
use App\Models\Loker;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logangs = Logang::latest()
        ->filter(request(['Tags', 'search']))
        ->where('Verify', 'verified')
        ->get()
        ->map(function ($logang) {
            return [
                'NamaPerusahaan' => $logang->NamaPerusahaan,
                'Posisi' => $logang->Posisi,
                'Deskripsi' => $logang->Deskripsi,
                'created_at' => $logang->created_at,
                'updated_at' => $logang->updated_at,
            ];
        });

    return response()->json($logangs);
    }
}
