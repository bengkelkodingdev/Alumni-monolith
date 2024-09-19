<?php

namespace App\Http\Controllers;

//import Model "academic
use App\Models\academic;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class academicController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $academics = academic::latest()->paginate(5);
        
        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $academics = academic::where('id_alumni', $userId)->latest()->paginate(5);
        
        //render view with posts
        return view('alumni.dataAlumni.academic.index', compact('academics'));
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

        return view('alumni.dataAlumni.academic.create', compact('user'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'nama_studi'=> 'required',
            'prodi'=> 'required',
            'ipk'=> 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'catatan'=> 'required'
        ]);

        // Create academic record with authenticated user ID
        academic::create([
            'nama_studi' => $request->nama_studi,
            'prodi' => $request->prodi,
            'ipk' => $request->ipk,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_lulus' => $request->tahun_lulus,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'catatan' => $request->catatan,
            'id_alumni' => Auth::id() // Set the ID of the logged-in user
        ]);

        // Redirect to index
        return redirect()->route('academic.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $academic = academic::findOrFail($id);
        
        // Ensure that the skill belongs to the logged-in user
        if ($academic->id_alumni !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        //render view with post
        return view('alumni.dataAlumni.academic.edit', compact('academic'));
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
            'nama_studi'=> 'required',
            'prodi'=> 'required',
            'ipk'=> 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'catatan'=> 'required'
        ]);

        // Get the academic by ID
        $academic = academic::findOrFail($id);

        // Ensure that the academic belongs to the logged-in user
        if ($academic->id_alumni !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        // Update the academic
        $academic->update($request->all());

        //redirect to index
        return redirect()->route('academic.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $academic = academic::findOrFail($id);

        // Ensure that the skill belongs to the logged-in user
        if ($academic->id_alumni !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        //delete post
        $academic->delete();

        //redirect to index
        return redirect()->route('academic.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}