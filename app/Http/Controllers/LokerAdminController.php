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
    
    

    // Show single listing
    public function show(Loker $id) {
        $loker = Loker::find($id);
        return view('admin.lokerAdmin.showAdmin', ['loker' => $id]);
    }
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
    public function destroy($id)
    {
        $lokerAdmin = Loker::find($id);
        if ($lokerAdmin){
            $lokerAdmin->delete();
        }
        return redirect()->route('lokeradmin.manage')->with('success', 'Lowongan deleted successfully');
    }

    // Manage listingkerja
    public function manage(Request $request){
        $query = Loker::query();

        if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
            $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
        }

        $lokerAdmin = $query->get();
        return view('admin.lokerAdmin.manageAdmin', compact('lokerAdmin'));
    }
}
