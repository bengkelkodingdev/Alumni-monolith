<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use Illuminate\Http\Request;

class LogangAdminController extends Controller
{
    public function indexadmin(){
        // Get selected filters
        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeKerja = request('TipeKerja', []);
    
        // Fetch listingmagang based on selected filters
        $listingmagangadmin = Logang::latest()->filter(request(['Tags', 'search', 'Pengalaman', 'TipeKerja']))->paginate(6);
    
        // Determine the availability of each filter option
        $availablePengalaman = Logang::select('Pengalaman')
            ->distinct()
            ->whereIn('Pengalaman', [
                'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
            ])
            ->pluck('Pengalaman')
            ->toArray();
    
        $availableTipeKerja = Logang::select('TipeKerja')
            ->distinct()
            ->whereIn('TipeKerja', [
                'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
            ])
            ->pluck('TipeKerja')
            ->toArray();
    
        return view('logangAdmin.indexadmin', compact('listingmagangadmin', 'availablePengalaman', 'availableTipeKerja', 'selectedPengalaman', 'selectedTipeKerja'));
    }
    
    

    // Show single listingmagang
    public function show(Logang $id) {
        return view('logangadmin.showAdmin', [
            'listingmagang' => $id
        ]);
    }

    // Show Create Form
    public function create() {
        return view('listingmagang.create');
    }
    public function verify($id){
        $listingmagangadmin = Logang::find($id);
        if ($listingmagangadmin){
            $listingmagangadmin->verify = 'verified';
            $listingmagangadmin->save();
        }
        return redirect()->route('manageLogangAdmin.view')->with('success', 'Lowongan verified successfully');
    }

    // Store listingmagang Data
    public function store(Request $request) {

        $image      =$request->file('logo');
        $filename   =date('Y-m-d').$image->getClientOriginalName();
        $path       ='/imglogo/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
                  
        Logang::create([
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

        return redirect('/logang')->with('message', 'listingmagang created successfully!');
    }

    public function edit(Request $request,$id) {
        $listingmagangadmin = Logang::find($id);
        return view('logangAdmin.editAdmin', compact('listingmagangadmin') );
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
        Logang::whereId($id)->update([
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
        $listingmagangadmin = Logang::find($id);
        if ($listingmagangadmin){
            $listingmagangadmin->delete();
        }
        return redirect()->route('manageLogangAdmin.view')->with('success', 'Lowongan deleted successfully');
    }

    // Manage listingmagang
    public function manage(){
        return view('logangAdmin.manageAdmin', ['listingmagangadmin' =>Logang::all()]);
    }
}
