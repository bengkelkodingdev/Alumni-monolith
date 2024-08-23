<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Validation\Rule;

class LokerController extends Controller{
   
    public function index(Request $request){
    
        $selectedPengalaman = $request->input('Pengalaman', []);
        $selectedTipeKerja = $request->input('TipeKerja', []);

        // Fetch filtered results based on selected checkboxes and additional filters
        $loker = Loker::latest()->filter(request(['Tags', 'search']));

        if (!empty($selectedPengalaman)) {
            $loker->whereIn('Pengalaman', $selectedPengalaman);
        }

        if (!empty($selectedTipeKerja)) {
            $loker->whereIn('TipeKerja', $selectedTipeKerja);
        }

        $tipeKerjaCounts = [
            'freelance' => Loker::where('TipeKerja', 'Freelance')->count(),
            'full time' => Loker::where('TipeKerja', 'Full Time')->count(),
            'part time' => Loker::where('TipeKerja', 'Part Time')->count(),
            'kontrak' => Loker::where('TipeKerja', 'Kontrak')->count(),
            'sementara' => Loker::where('TipeKerja', 'Sementara')->count(),
        ];

        $pengalamanCounts = [
            'tanpa pengalaman' => Loker::where('Pengalaman', 'Tanpa Pengalaman')->count(),
            'fresh graduate' => Loker::where('Pengalaman', 'Fresh Graduate')->count(),
            'minimal 1 tahun' => Loker::where('Pengalaman', 'Minimal 1 Tahun')->count(),
            'minimal 2 tahun' => Loker::where('Pengalaman', 'Minimal 2 Tahun')->count(),
            'minimal 3 tahun' => Loker::where('Pengalaman', 'Minimal 3 Tahun')->count(),
            'lebih dari 3 tahun' => Loker::where('Pengalaman', 'Lebih dari 3 Tahun')->count(),
        ];
        $loker = $loker->get();

        return view('alumni.loker.index', compact('loker', 'selectedPengalaman', 'selectedTipeKerja', 'tipeKerjaCounts', 'pengalamanCounts'));
    }

    // Show single listing
    public function show(Loker $id) {
        $loker = Loker::find($id);
        return view('alumni.loker.show', ['loker' => $id]);
    }

    // Show Create Form
    public function create() {
        return view('alumni.loker.create');
    }

    // Store Listing Data
    public function store(Request $request) {
      
        $image      =$request->file('logo');
        $filename   =date('Y-m-d').$image->getClientOriginalName();
        $path       ='/imglogo/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
                
        Loker::create([
            'NamaPerusahaan' => $request->NamaPerusahaan,
            'Posisi' => $request->Posisi,
            'Alamat' => $request->Alamat,
            'Pengalaman' => $request->Pengalaman,
            'Gaji' => $request->Gaji,
            'TipeKerja' => $request->TipeKerja,
            'Deskripsi' => $request->Deskripsi,
            'Website' => $request->Website,
            'Email' => $request->Email,
            'Tags' => $request->Tags,
            'Verify' => $request->Verify,
            'Logo' => $filename

        ]);

        return redirect('/loker')->with('message', 'Listing created successfully!');
        // return redirect()->route('listings.index')->with('success', 'Lowongan berhasil ditambahkan!');

    }
    
    public function edit(Request $request,$id) {
        $loker = Loker::find($id);
        return view('alumni.loker.edit', compact('loker', 'id'));
    }

    public function update(Request $request, $id){
        // Initialize the filename variable
        $filename = null;

        // Check if a new logo file is uploaded
        if ($request->hasFile('Logo')) {
            $Logo = $request->file('Logo');
            $filename = date('Y-m-d') . $Logo->getClientOriginalName();
            $path = '/imglogo/' . $filename;

            // Store the new logo file
            Storage::disk('public')->put($path, file_get_contents($Logo));
        } else {
            // Use the existing logo if no new file is uploaded
            $filename = $request->input('existingLogo');
        }

        // Update the record in the database
        Loker::whereId($id)->update([
            'NamaPerusahaan' => $request->NamaPerusahaan,
            'Posisi' => $request->Posisi,
            'Alamat' => $request->Alamat,
            'Pengalaman' => $request->Pengalaman,
            'Gaji' => $request->Gaji,
            'TipeKerja' => $request->TipeKerja,
            'Deskripsi' => $request->Deskripsi,
            'Website' => $request->Website,
            'Email' => $request->Email,
            'Tags' => $request->Tags,
            'Verify' => $request->Verify,
            'Logo' => $filename
        ]);

        // Redirect back with a success message
        return redirect()->route('loker.manage')->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $loker = Loker::find($id);
        if ($loker){
            $loker->delete();
        }
        return redirect()->route('loker.manage')->with('success', 'Lowongan deleted successfully');
    }

    // Manage loker
    // public function manage() {
    //     return view('alumni.loker.manage', ['loker' =>Loker::all()]);
    // }
    public function manage(Request $request){
        $query = Loker::query();

        if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
            $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
        }

        $loker = $query->get();
        return view('alumni.loker.manage', compact('loker'));
    }
    
}
