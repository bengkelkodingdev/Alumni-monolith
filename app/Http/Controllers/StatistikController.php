<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use App\Models\statistik;

//return type View
use Illuminate\View\View;

class statistikController extends Controller
{
    // Menampilkan semua data statistik
    public function index(): View
    {
        //get posts
        $statistiks = statistik::latest()->paginate(1);
        
        return view('admin.statistik.index', compact('statistiks'));
    }

    // Menampilkan form untuk menambah data baru
    public function create()
    {
        return view('admin.statistik.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'tahun_lulus' => 'required|integer|min:0',
            'alumni_total' => 'required|integer|min:0',
        ]);

        // Hitung total alumni yang terdeteksi berdasarkan tahun lulus dari role alumni
        $alumni_terlacak = alumni::where('tahun_lulus', $request->tahun_lulus)->count();

        // Simpan data statistik
        Statistik::create([
            'tahun_lulus' => $request->tahun_lulus,
            'alumni_total' => $request->alumni_total,
            'alumni_terlacak' => $alumni_terlacak,
        ]);

        return redirect()->route('statistik.index')->with('success', 'Data statistik berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $statistik = statistik::findOrFail($id);
        return view('admin.statistik.edit', compact('statistik'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun_lulus' => 'required|integer|min:0',
            'alumni_total' => 'required|integer|min:0',
        ]);

        // Hitung ulang alumni terlacak berdasarkan tahun lulus
        $alumni_terlacak = alumni::where('tahun_lulus', $request->tahun_lulus)->count();

        // Update data statistik
        $statistik = Statistik::findOrFail($id);
        $statistik->update([
            'tahun_lulus' => $request->tahun_lulus,
            'alumni_total' => $request->alumni_total,
            'alumni_terlacak' => $alumni_terlacak,
        ]);

        return redirect()->route('statistik.index')->with('success', 'Data statistik berhasil diubah');
    }

    // Menghapus data
    public function destroy($id)
    {
        $statistik = statistik::findOrFail($id);
        $statistik->delete();

        return redirect()->route('statistik.index')->with('success', 'Data statistik berhasil dihapus');
    }
}
