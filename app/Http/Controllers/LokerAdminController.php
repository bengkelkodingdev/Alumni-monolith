<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Validation\Rule;

class LokerAdminController extends Controller
{
    public function indexadmin(){
        // Get selected filters
        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeKerja = request('TipeKerja', []);
    
        // Fetch listingkerja based on selected filters
        $lokerAdmin = Loker::latest()->filter(request(['Tags', 'search', 'Pengalaman', 'TipeKerja']))->paginate(6);
    
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
    
        return view('admin.lokerAdmin.indexadmin', compact('lokerAdmin', 'availablePengalaman', 'availableTipeKerja', 'selectedPengalaman', 'selectedTipeKerja'));
    }
    
    

    // Show single listingkerja
    public function show(Loker $id) {
        return view('lokeradmin.showAdmin', [
            'listingkerja' => $id
        ]);
    }

    // Show Create Form
    public function create() {
        return view('listingkerja.create');
    }
    // public function verify($id){
    //     $listingkerjaadmin = Loker::find($id);
    //     if ($listingkerjaadmin){
    //         $listingkerjaadmin->verify = 'verified';
    //         $listingkerjaadmin->save();
    //     }
    //     return redirect()->route('lokeradmin.manage')->with('success', 'Lowongan verified successfully');
    // }
    public function verify(Request $request, $id){
        $listingkerjaadmin = Loker::find($id);

        if ($listingkerjaadmin) {
            if ($request->input('action') == 'verify') {
                $listingkerjaadmin->verify = 'verified';
            } elseif ($request->input('action') == 'not_verify') {
                $listingkerjaadmin->verify = 'pending';
            }
            $listingkerjaadmin->save();
        }

        return redirect()->route('lokeradmin.manage')->with('success', 'Lowongan status updated successfully');
    }


    // Store listingkerja Data
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

        return redirect('/loker')->with('message', 'listingkerja created successfully!');
    }

    public function edit(Request $request,$id) {
        $listingkerjaadmin = Loker::find($id);
        return view('lokerAdmin.editAdmin', compact('listingkerjaadmin') );
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

         if ($request->Logo) {
            $Logo      =$request->file('Logo');
            $filename   =date('Y-m-d').$Logo->getClientOriginalName();
            $path       ='/imglogo/'.$filename;

            Storage::disk('public')->put($path,file_get_contents($Logo));
        }
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

        return redirect()->route('manage.view')->with('success', 'lowongan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $listingkerjaadmin = Loker::find($id);
        if ($listingkerjaadmin){
            $listingkerjaadmin->delete();
        }
        return redirect()->route('manageLokerAdmin.view')->with('success', 'Lowongan deleted successfully');
    }

    // Manage listingkerja
    public function manage(){
        return view('admin.lokerAdmin.manageAdmin', ['lokerAdmin' =>Loker::all()]);
    }
}
