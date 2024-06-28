<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Validation\Rule;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        // Get selected filters
        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeKerja = request('TipeKerja', []);
    
        // Fetch loker based on selected filters
        $loker = Loker::latest()->filter(request(['Tags', 'search', 'Pengalaman', 'TipeKerja']))->paginate(6);
    
        // Determine the availability of each filter option
        $availablePengalaman = Loker::select('Pengalaman')
            ->distinct()
            ->whereIn('Pengalaman', [
                'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
            ])
            ->pluck('Pengalaman')
            ->toArray();
    
        $availableTipeKerja = Loker::select('TipeKerja')
            ->distinct()
            ->whereIn('TipeKerja', [
                'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
            ])
            ->pluck('TipeKerja')
            ->toArray();
    
        return view('alumni.loker.index', compact('loker', 'availablePengalaman', 'availableTipeKerja', 'selectedPengalaman', 'selectedTipeKerja'));
    }
       

    // Show single listing
    public function show(Loker $id) {
        $loker = Loker::find($id);
        return view('alumni.loker.show', ['loker' => $id]);
    }

    // public function show($id){
    //     // Ambil data listing dari model, contoh Listing::find($id)
    //     $listing = Loker::find($id);

    //     // Inisialisasi $loker dari $listing
    //     $loker = $listing; // Misalnya, jika $listing memiliki properti yang sama dengan $loker

    //     // Kirim data $loker dan $listing ke view
    //     return view('alumni.loker.show', compact('loker', 'listing'));
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
    }

    public function edit(Request $request,$id) {
        $loker = Loker::find($id);
        return view('alumni.loker.edit', compact('loker', 'id'));
    }
    // public function show($id){
    //     $loker = Loker::find($id);
    //     return response()->json($loker);
    // }

    // public function edit($id){
    //     $loker = Loker::find($id);
    //     return response()->json($loker);
    // }
    
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id){

    //      if ($request->Logo) {
    //         $Logo      =$request->file('Logo');
    //         $filename   =date('Y-m-d').$Logo->getClientOriginalName();
    //         $path       ='/imglogo/'.$filename;

    //         Storage::disk('public')->put($path,file_get_contents($Logo));
    //     }
    //     Loker::whereId($id)->update([
    //         'NamaPerusahaan' => $request->NamaPerusahaan,
    //         'Posisi' => $request->Posisi,
    //         'Alamat' => $request->Alamat,
    //         'Pengalaman' => $request->Pengalaman,
    //         'Gaji' => $request->Gaji,
    //         'TipeKerja' => $request->TipeKerja,
    //         'Deskripsi' => $request->Deskripsi,
    //         'Website' => $request->Website,
    //         'Email' => $request->Email,
    //         'Tags' => $request->Tags,
    //         'Verify' => $request->Verify,
    //         'Logo' => $filename

    //     ]);

    //     return redirect()->route('loker.manage')->with('success', 'lowongan updated successfully');
    // }

    public function update(Request $request, $id)
{
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
    public function manage() {
        return view('alumni.loker.manage', ['loker' =>Loker::all()]);
    }
    
}
