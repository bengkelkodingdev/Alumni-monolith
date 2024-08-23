<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use Illuminate\Http\Request;

class LogangAdminController extends Controller
{
    public function indexadmin(){
        // Fetch listingmagang based on selected filters
        $logangAdmin = Logang::latest()->filter(request(['Tags', 'search']))->paginate(6);
        return view('admin.logangAdmin.indexadmin', compact('logangAdmin'));
    }
    
    // Show Logang Admin
    public function show(Logang $id) {
        $logang = Logang::find($id);
        return view('admin.logangAdmin.showAdmin', ['logang' => $id]);
    }

    // Verify Logang Admin
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

    // Delete Logang Admin
    public function destroy($id){
        $logangAdmin = Logang::find($id);
        if ($logangAdmin){
            $logangAdmin->delete();
        }
        return redirect()->route('logangadmin.manage')->with('success', 'Lowongan deleted successfully');
    }

    // Manage Logang Admin
    public function manage(Request $request){
        $query = Logang::query();

        if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
            $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
        }

        $logangAdmin = $query->get();
        return view('admin.logangAdmin.manageAdmin', compact('logangAdmin'));
    }
}
