<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Validation\Rule;

class LokerController extends Controller{
    /**
     * Display a listing of the resource.
     */
    // public function index(){
    //     // Get selected filters
    //     $selectedPengalaman = request('Pengalaman', []);
    //     $selectedTipeKerja = request('TipeKerja', []);
    
    //     // Fetch loker based on selected filters
    //     $loker = Loker::latest()->filter(request(['Tags', 'search', 'Pengalaman', 'TipeKerja']))->paginate(6);
    
    //     // Determine the availability of each filter option
    //     $availablePengalaman = Loker::select('Pengalaman')
    //         ->distinct()
    //         ->whereIn('Pengalaman', [
    //             'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
    //             'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
    //         ])
    //         ->pluck('Pengalaman')
    //         ->toArray();
    
    //     $availableTipeKerja = Loker::select('TipeKerja')
    //         ->distinct()
    //         ->whereIn('TipeKerja', [
    //             'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
    //         ])
    //         ->pluck('TipeKerja')
    //         ->toArray();
    
    //     return view('alumni.loker.index', compact('loker', 'availablePengalaman', 'availableTipeKerja', 'selectedPengalaman', 'selectedTipeKerja'));
    // }
       
    public function index(Request $request)
    {
        $selectedPengalaman = $request->input('Pengalaman', []);
        $selectedTipeKerja = $request->input('TipeKerja', []);
        
        // Fetch filtered results based on selected checkboxes
        $loker = Loker::query();
    
        if (!empty($selectedPengalaman)) {
            $loker->whereIn('Pengalaman', $selectedPengalaman);
        }
    
        if (!empty($selectedTipeKerja)) {
            $loker->whereIn('TipeKerja', $selectedTipeKerja);
        }
    
        $loker = $loker->get();
    
        return view('alumni.loker.index', compact('loker', 'selectedPengalaman', 'selectedTipeKerja'));
    }
    // Show single listing
    public function show(Loker $id) {
        $loker = Loker::find($id);
        return view('alumni.loker.show', ['loker' => $id]);
    }
    // public function showHome(Loker $id) {
    //     $listing = Loker::find($id);
    //     return view('alumni.loker.showHome', ['listing' => $id]);
    // }

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
    // public function store(Request $request){
    //     // Validasi data
    //     $validatedData = $request->validate([
    //         'NamaPerusahaan' => 'required|string|max:255',
    //         'Posisi' => 'required|string|max:255',
    //         'Alamat' => 'required|string|max:255',
    //         'Email' => 'required|email|max:255',
    //         'Pengalaman' => 'required|integer',
    //         'Gaji' => 'required|string|max:255',
    //         'TipeKerja' => 'required|string|max:255',
    //         'Deskripsi' => 'required|string',
    //         'Website' => 'nullable|url|max:255',
    //         'Tags' => 'nullable|string|max:255',
    //         'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     // Upload logo jika ada
    //     if ($request->hasFile('logo')) {
    //         $image = $request->file('logo');
    //         $filename = date('Y-m-d').$image->getClientOriginalName();
    //         $path = '/imglogo/'.$filename;

    //         Storage::disk('public')->put($path, file_get_contents($image));
    //     } else {
    //         $filename = null;
    //     }

    //     // Buat data Loker
    //     Loker::create([
    //         'NamaPerusahaan' => $validatedData['NamaPerusahaan'],
    //         'Posisi' => $validatedData['Posisi'],
    //         'Alamat' => $validatedData['Alamat'],
    //         'Pengalaman' => $validatedData['Pengalaman'],
    //         'Gaji' => $validatedData['Gaji'],
    //         'TipeKerja' => $validatedData['TipeKerja'],
    //         'Deskripsi' => $validatedData['Deskripsi'],
    //         'Website' => $validatedData['Website'],
    //         'Email' => $validatedData['Email'],
    //         'Tags' => $validatedData['Tags'],
    //         'Verify' => $request->Verify, // Pastikan ini memiliki nilai yang diinginkan
    //         'Logo' => $filename
    //     ]);

    //     return redirect('/loker')->with('message', 'Listing created successfully!');
    // }

    
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
