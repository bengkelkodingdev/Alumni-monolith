<?php

namespace App\Http\Controllers;

//import Model "award
use App\Models\award;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class AwardController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $awards = award::latest()->paginate(5);
        
        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $awards = award::where('id_alumni', $userId)->latest()->paginate(5);
        
        //render view with posts
        return view('alumni.dataAlumni.award.index', compact('awards'));
    }
     /**
     * create
     *
     * @return View
     */

    public function create(): View
    {
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();
    
        return view('alumni.dataAlumni.award.create', compact('user'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
{
    //validate form
    $this->validate($request, [
        'nama_award'=> 'required',
        'institusi_award'=> 'required',
        'tingkat_award'=> 'required',
        'tahun_award'=> 'required',
        'deskripsi_award'=> 'required',
        // Pastikan kolom yang diperlukan divalidasi
        'nama_studi' => 'required'
    ]);

    //create award
    award::create([
        'nama_award' => $request->nama_award,
        'institusi_award' => $request->institusi_award,
        'tingkat_award' => $request->tingkat_award,
        'tahun_award' => $request->tahun_award,
        'deskripsi_award' => $request->deskripsi_award,
        'id_alumni' => Auth::id() // Set the ID of the logged-in user
    ]);
    //redirect to index
    return redirect()->route('award.index')->with(['success' => 'Data Berhasil Disimpan!']);
}


    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $award = award::findOrFail($id);

        //render view with post
        return view('alumni.dataAlumni.award.edit', compact('award'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_award'=> 'required',
            'institusi_award'=> 'required',
            'tingkat_award'=> 'required',
            'tahun_award'=> 'required',
            'deskripsi_award'=> 'required'
        ]);

        //get post by ID
        $award = award::findOrFail($id);
            //update post without image
            $award->update([
                'nama_award' => $request->nama_award,
                'institusi_award' => $request->institusi_award,
                'tingkat_award' => $request->tingkat_award,
                'tahun_award' => $request->tahun_award,
                'deskripsi_award' => $request->deskripsi_award
        ]);

        //redirect to index
        return redirect()->route('award.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $award = award::findOrFail($id);
        
        //delete post
        $award->delete();

        //redirect to index
        return redirect()->route('award.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}