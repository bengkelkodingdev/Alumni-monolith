<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Validation\Rule;

class LokerAdminController extends Controller
{
    public function indexadmin(){    
        // Fetch listingkerja based on selected filters
        $lokerAdmin = Loker::latest()->filter(request(['Tags', 'search']))->paginate(6);
        return view('admin.lokerAdmin.indexadmin', compact('lokerAdmin'));
    }
    
    // Show Loker Admin
    public function show(Loker $id) {
        $loker = Loker::find($id);
        return view('admin.lokerAdmin.showAdmin', ['loker' => $id]);
    }

    // Verify Loker Admin
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

    // Delete Loker Admin
    public function destroy($id)
    {
        $lokerAdmin = Loker::find($id);
        if ($lokerAdmin){
            $lokerAdmin->delete();
        }
        return redirect()->route('lokeradmin.manage')->with('success', 'Lowongan deleted successfully');
    }

    // Manage Loker Admin
    public function manage(Request $request){
        $query = Loker::query();

        if ($request->has('NamaPerusahaan') && !empty($request->NamaPerusahaan)) {
            $query->where('NamaPerusahaan', 'LIKE', '%' . $request->NamaPerusahaan . '%');
        }

        $lokerAdmin = $query->paginate(5);
        return view('admin.lokerAdmin.manageAdmin', compact('lokerAdmin'));
    }
}
