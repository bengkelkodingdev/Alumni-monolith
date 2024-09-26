<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LogangController extends Controller{
    public function index(Request $request)
    {
        $selectedPengalaman = $request->input('Pengalaman', []);
        $selectedTipeMagang = $request->input('TipeMagang', []);
        
        // Fetch filtered results based on selected checkboxes and additional filters
        $logang = Logang::latest()->filter(request(['Tags', 'search']));
    
        if (!empty($selectedPengalaman)) {
            $logang->whereIn('Pengalaman', $selectedPengalaman);
        }
    
        if (!empty($selectedTipeMagang)) {
            $logang->whereIn('TipeMagang', $selectedTipeMagang);
        }
        $tipeMagangCounts = [
            'freelance' => Logang::where('TipeMagang', 'Freelance')->count(),
            'full time' => Logang::where('TipeMagang', 'Full Time')->count(),
            'part time' => Logang::where('TipeMagang', 'Part Time')->count(),
            'kontrak' => Logang::where('TipeMagang', 'Kontrak')->count(),
            'sementara' => Logang::where('TipeMagang', 'Sementara')->count(),
        ];

        $pengalamanCounts = [
            'tanpa pengalaman' => Logang::where('Pengalaman', 'Tanpa Pengalaman')->count(),
            'fresh graduate' => Logang::where('Pengalaman', 'Fresh Graduate')->count(),
            'minimal 1 tahun' => Logang::where('Pengalaman', 'Minimal 1 Tahun')->count(),
            'minimal 2 tahun' => Logang::where('Pengalaman', 'Minimal 2 Tahun')->count(),
            'minimal 3 tahun' => Logang::where('Pengalaman', 'Minimal 3 Tahun')->count(),
            'lebih dari 3 tahun' => Logang::where('Pengalaman', 'Lebih dari 3 Tahun')->count(),
        ];
        $logang = $logang->paginate(5);
    
        return view('alumni.logang.index', compact('logang', 'selectedPengalaman', 'selectedTipeMagang', 'tipeMagangCounts', 'pengalamanCounts'));
    }
    

    // Show Logang
    public function show(Logang $id) {
        $logang = Logang::find($id);
        return view('alumni.logang.show', ['logang' => $id]);
    }

    // Show Create Form
    public function create() {
        $user = Auth::user();
        return view('alumni.logang.create', compact('user'));
    }

    // Store Logang
    public function store(Request $request) {

        $image      =$request->file('logo');
        $filename   =date('Y-m-d').$image->getClientOriginalName();
        $path       ='/imglogo/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
                  
        Logang::create([
            'id_alumni' => auth()->user()->id, // Ambil ID pengguna yang sedang login
            'NamaPerusahaan' => $request->NamaPerusahaan,
            'Posisi' => $request->Posisi,
            'Alamat' => $request->Alamat,
            'Pengalaman' => $request->Pengalaman,
            'Gaji' => $request->Gaji,
            'TipeMagang' => $request->TipeMagang,
            'Deskripsi' => $request->Deskripsi,
            'Website' => $request->Website,
            'Email' => $request->Email,
            'Tags' => $request->Tags,
            'Verify' => $request->Verify,
            'Logo' => $filename

        ]);

        return redirect('/logang')->with('success', 'Lowongan created successfully!');
    }

    // Edit Logang
    public function edit(Request $request,$id) {
        $logang = Logang::find($id);
        return view('alumni.logang.edit', compact('logang', 'id'));
    }
    
    // Update Logang
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
        Logang::whereId($id)->update([
            'NamaPerusahaan' => $request->NamaPerusahaan,
            'Posisi' => $request->Posisi,
            'Alamat' => $request->Alamat,
            'Pengalaman' => $request->Pengalaman,
            'Gaji' => $request->Gaji,
            'TipeMagang' => $request->TipeMagang,
            'Deskripsi' => $request->Deskripsi,
            'Website' => $request->Website,
            'Email' => $request->Email,
            'Tags' => $request->Tags,
            'Verify' => $request->Verify,
            'Logo' => $filename
        ]);

        // Redirect back with a success message
        return redirect()->route('logang.manage')->with('success', 'Data updated successfully!');
    }

    // Delete Logang
    public function destroy($id)
    {
        $logang = Logang::find($id);
        if ($logang){
            $logang->delete();
        }
        return redirect()->route('logang.manage')->with('success', 'Lowongan deleted successfully');
    }

    // Manage Logang
    // public function manage(Request $request){
    //     $query = Logang::latest();

    //     if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
    //         $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
    //     }

    //     $logang = $query->paginate(5);
    //     return view('alumni.logang.manage', compact('logang'));
    // }
    public function manage(Request $request)
{
    // Ambil user yang sedang login
    $user = auth()->user();
    
    // Query hanya untuk logang milik user yang sedang login
    $query = Logang::where('id_alumni', $user->id)->latest();

    // Filter berdasarkan nama perusahaan jika ada input
    if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
        $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
    }

    // Paginasi hasil
    $logang = $query->paginate(5);
    
    // Tampilkan ke view
    return view('alumni.logang.manage', compact('logang'));
}

}
