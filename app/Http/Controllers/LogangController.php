<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogangController extends Controller
{
    
    /**
     * Display a listingmagang of the resource.
     */
    public function index(){
        // Get selected filters
        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeMagang = request('TipeMagang', []);

        // Fetch listingmagang based on selected filters
        $listingmagang = Logang::latest()
            ->when($selectedPengalaman, function ($query, $selectedPengalaman) {
                return $query->whereIn('Pengalaman', $selectedPengalaman);
            })
            ->when($selectedTipeMagang, function ($query, $selectedTipeMagang) {
                return $query->whereIn('TipeMagang', $selectedTipeMagang);
            })
            ->paginate(6);

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

        return view('listingmagang.index', compact('listingmagang', 'availablePengalaman', 'availableTipeMagang', 'selectedPengalaman', 'selectedTipeMagang'));
    }


    // Show single listingmagang
    public function show(Logang $id) {
        return view('listingmagang.show', [
            'listingmagang' => $id
        ]);
    }

    // Show Create Form
    public function create() {
        return view('listingmagang.create');
    }

    // Store Listingmagang Data
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

        return redirect('/logang')->with('message', 'Listingmagang created successfully!');
    }

    public function edit(Request $request,$id) {
        $logang = Logang::find($id);
        return view('listingmagang.edit', compact('logang') );
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

        return redirect()->route('manageLogang.view')->with('success', 'lowongan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $logang = Logang::find($id);
        if ($logang){
            $logang->delete();
        }
        return redirect()->route('manageLogang.view')->with('success', 'Lowongan deleted successfully');
    }

    // Manage Listingmagang
    public function manage() {
        return view('listingmagang.manage', ['listingmagang' =>Logang::all()]);
    }
}
