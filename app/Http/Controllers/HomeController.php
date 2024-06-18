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
    
        // Fetch listings based on selected filters
        $listings = Loker::latest()
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

        // Fetch listingmagang based on selected filters
        $listingmagang = Logang::latest()
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

        return view('home', compact('listings', 'listingmagang', 'availablePengalaman', 'availableTipeKerja', 'selectedPengalaman', 'selectedTipeKerja' , 
                    'availablePengalaman', 'availableTipeMagang', 'selectedPengalaman', 'selectedTipeMagang'));       
    } 
   
    // Show single listing
    public function show(Loker $id) {
        return view('alumni.loker.showHome', [
            'listing' => $id
        ]);
    }
    // Show single listing
    public function showMagang(Logang $id) {
        return view('alumni.logang.showHome', [
            'listingmagang' => $id
        ]);
    }
}
