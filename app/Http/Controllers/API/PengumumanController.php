<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        $response = [];

        foreach ($pengumumans as $item) {
            $response[] = $this->formattedJson($item);
        }

        return response()->json($response);
    }

    public function show($id)
    {
        $pengumumans = Pengumuman::where('id', $id)
            ->whereNotNull('published_at')
            ->first();

        if (!$pengumumans) {
            return response()->json([
                'message' => 'Pengumuman not found',
            ], 404);
        }

        $response = $this->formattedJson($pengumumans);

        return response()->json($response);
    }
    public function formattedJson($pengumumans)
    {
        return [
            'id' => $pengumumans->id,
            'judul' => $pengumumans->judul,
            'penulis' => $pengumumans->user,
            'konten' => $pengumumans->isi,
            'published_at' => $pengumumans->published_at,
        ];
    }   
}