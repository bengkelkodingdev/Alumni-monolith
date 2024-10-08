<?php

namespace App\Http\Controllers;

//import Model "internship
use App\Models\internship;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class InternshipController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $internships = internship::latest()->paginate(5);
        
        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $internships = internship::where('id_alumni', $userId)->latest()->paginate(5);
        
        //render view with posts
        return view('alumni.dataAlumni.internship.index', compact('internships'));
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
    
        return view('alumni.dataAlumni.internship.create', compact('user'));
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
            'nama_intern'=> 'required',
            'periode_masuk_intern'=> 'required',
            'periode_keluar_intern'=> 'required',
            'jabatan_intern'=> 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'catatan'=> 'required'
        ]);

        //create post
        internship::create([
            'nama_intern' => $request->nama_intern,
            'periode_masuk_intern' => $request->periode_masuk_intern,
            'periode_keluar_intern' => $request->periode_keluar_intern,
            'jabatan_intern' => $request->jabatan_intern,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'catatan' => $request->catatan,
            'id_alumni' => Auth::id() // Set the ID of the logged-in user
        ]);

        //redirect to index
        return redirect()->route('internship.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $internship = internship::findOrFail($id);

        //render view with post
        return view('alumni.dataAlumni.internship.edit', compact('internship'));
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
            'nama_intern'=> 'required',
            'periode_masuk_intern'=> 'required',
            'periode_keluar_intern'=> 'required',
            'jabatan_intern'=> 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'catatan'=> 'required'
        ]);

        //get post by ID
        $internship = internship::findOrFail($id);
            //update post without image
            $internship->update([
            'nama_intern' => $request->nama_intern,
            'periode_masuk_intern' => $request->periode_masuk_intern,
            'periode_keluar_intern' => $request->periode_keluar_intern,
            'jabatan_intern' => $request->jabatan_intern,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'catatan' => $request->catatan
        ]);

        //redirect to index
        return redirect()->route('internship.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $internship = internship::findOrFail($id);

        //delete post
        $internship->delete();

        //redirect to index
        return redirect()->route('internship.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}