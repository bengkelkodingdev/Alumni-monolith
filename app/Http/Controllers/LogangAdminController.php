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
    
    

    // Show single listing
    public function show(Logang $id) {
        $logang = Logang::find($id);
        return view('admin.logangAdmin.showAdmin', ['logang' => $id]);
    }
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

    public function destroy($id){
        $logangadmin = Logang::find($id);
        if ($logangadmin){
            $logangadmin->delete();
        }
        return redirect()->route('logangadmin.manage')->with('success', 'Lowongan deleted successfully');
    }

    // Manage listingmagang
    public function manage(Request $request){
        $query = Logang::query();

        if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
            $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
        }

        $logangAdmin = $query->get();
        return view('admin.logangAdmin.manageAdmin', compact('logangAdmin'));
    }
}
