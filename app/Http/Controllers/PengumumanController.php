<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        // $pengumuman = Pengumuman::latest()->filter(request(['search']));
        $pengumuman = Pengumuman::filter(request(['search']))->get();

        return view('admin.pengumuman.pengumuman', compact('pengumuman'));
    }
    public function create() {
        return view('admin.pengumuman.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->judul = $request->judul;
        $pengumuman->user = "Koordinator Alumni";
        $pengumuman->isi = $request->isi;
        $pengumuman->published_at = now();
        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman created successfully');

    }
    
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', ['p' => $pengumuman]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;
        $pengumuman->save();

        return redirect()->route('pengumuman.index')->with('success', 'Data updated successfully');

    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Data deleted successfully');
    }

}
