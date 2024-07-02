<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use Illuminate\Http\Request;

class LogangAdminController extends Controller
{
    public function indexadmin(){
        // Get selected filters
        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeMagang = request('TipeMagang', []);
    
        // Fetch listingmagang based on selected filters
        $logangAdmin = Logang::latest()->filter(request(['Tags', 'search', 'Pengalaman', 'TipeMagang']))->paginate(6);
    
        // Determine the availability of each filter option
        $availablePengalaman = Logang::select('Pengalaman')
            ->distinct()
            ->whereIn('Pengalaman', [
                'Tanpa Pengalaman', 'Fresh Graduate', 'Minimal 1 Tahun',
                'Minimal 2 Tahun', 'Minimal 3 Tahun', 'Lebih dari 3 Tahun'
            ])
            ->pluck('Pengalaman')
            ->toArray();
    
        $availableTipeMagang = Logang::select('TipeMagang')
            ->distinct()
            ->whereIn('TipeMagang', [
                'Freelance', 'Full Time', 'Part Time', 'Kontrak', 'Sementara'
            ])
            ->pluck('TipeMagang')
            ->toArray();
    
        return view('admin.logangAdmin.indexadmin', compact('logangAdmin', 'availablePengalaman', 'availableTipeMagang', 'selectedPengalaman', 'selectedTipeMagang'));
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
    // public function verify($id){
    //     $listingmagangadmin = Logang::find($id);
    //     if ($listingmagangadmin){
    //         $listingmagangadmin->verify = 'verified';
    //         $listingmagangadmin->save();
    //     }
    //     return redirect()->route('logangadmin.manage')->with('success', 'Lowongan verified successfully');
    // }
    public function verify(Request $request, $id){
        $listingmagangadmin = Logang::find($id);

        if ($listingmagangadmin) {
            if ($request->input('action') == 'verify') {
                $listingmagangadmin->verify = 'verified';
            } elseif ($request->input('action') == 'not_verify') {
                $listingmagangadmin->verify = 'pending';
            }
            $listingmagangadmin->save();
        }

        return redirect()->route('logangadmin.manage')->with('success', 'Lowongan status updated successfully');
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
            'TipeMagang' => $request->TipeMagang,
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
            'TipeMagang' => $request->TipeMagang,
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
        return view('admin.logangAdmin.manageAdmin', ['logangAdmin' =>Logang::all()]);
    }
}
