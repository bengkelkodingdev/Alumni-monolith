<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Logang;
use Illuminate\Http\Request;

class PengumumanLogangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logangs = Logang::where('Verify', 'verified')
        ->orderBy('updated_at', 'desc')
        ->get()
        ->map(function ($logang) {
            return [
                'id' => $logang->id,
                'NamaPerusahaan' => $logang->NamaPerusahaan,
                'Posisi' => $logang->Posisi,
                'Deskripsi' => $logang->Deskripsi,
                'created_at' => $logang->created_at,
                'updated_at' => $logang->updated_at,
            ];
        });

    return response()->json($logangs);
    }
    public function show($id)
    {
        $logangs = Logang::where('id', $id)
            ->where('Verify', 'verified')
            ->first();

        if (!$logangs) {
            return response()->json([
                'message' => 'Logang not found',
            ], 404);
        }

        $response = $this->formattedJson($logangs);

        return response()->json($response);
    }
    public function formattedJson($logangs)
    {
        return [
            'id' => $logangs->id,
            'NamaPerusahaan' => $logangs->NamaPerusahaan,
            'Posisi' => $logangs->Posisi,
            'Deskripsi' => $logangs->Deskripsi,
            'created_at' => $logangs->created_at,
            'updated_at' => $logangs->updated_at,
        ];
    } 
}
