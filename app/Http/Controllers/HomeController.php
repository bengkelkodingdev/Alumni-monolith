<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use App\Models\Loker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeKerja = request('TipeKerja', []);
    
        // Fetch loker based on selected filters
        $lokers = Loker::latest()
                ->filter(request(['Tags', 'search', 'Pengalaman', 'TipeKerja']))
                ->where('Verify', 'verified')
                ->paginate(6);

    
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

        $selectedPengalaman = request('Pengalaman', []);
        $selectedTipeMagang = request('TipeMagang', []);

        // Fetch logang based on selected filters
        $logangs = Logang::latest()
            ->filter(request(['Tags', 'search', 'Pengalaman', 'TipeKerja']))
            ->where('Verify', 'verified')
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

        return view('home', compact('lokers', 'logangs', 'availablePengalaman', 'availableTipeKerja', 'selectedPengalaman', 'selectedTipeKerja' , 
                    'availablePengalaman', 'availableTipeMagang', 'selectedPengalaman', 'selectedTipeMagang'));       
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
