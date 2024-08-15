<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use App\Models\Loker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){    
        // Fetch loker based on selected filters
        $lokers = Loker::latest()
                ->filter(request(['Tags', 'search']))
                ->where('Verify', 'verified')
                ->paginate(6);

        // Fetch logang based on selected filters
        $logangs = Logang::latest()
            ->filter(request(['Tags', 'search']))
            ->where('Verify', 'verified')
            ->paginate(6);  

        return view('home', compact('lokers', 'logangs',));       
    } 
    public function showLoker($id){
        $loker = Loker::findOrFail($id); 

        return view('ShowLokerHome', compact('loker')); 
    }
    public function showLogang($id){
        $logang = Logang::findOrFail($id); 

        return view('ShowLogangHome', compact('logang')); 
    }

}
