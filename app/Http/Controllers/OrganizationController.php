<?php

namespace App\Http\Controllers;

//import Model "organization
use App\Models\organization;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $organizations = organization::latest()->paginate(5);

        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $organizations = organization::where('id_alumni', $userId)->latest()->paginate(5);
        
        //render view with posts
        return view('alumni.dataAlumni.organization.index', compact('organizations'));
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
    
        return view('alumni.dataAlumni.organization.create', compact('user'));
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
            'nama_org'=> 'required',
            'periode_masuk_org'=> 'required',
            'periode_keluar_org'=> 'required',
            'jabatan_org'=> 'required',
            'kota',
            'negara',
            'catatan'
        ]);

        //create post
        organization::create([
            'nama_org' => $request->nama_org,
            'periode_masuk_org' => $request->periode_masuk_org,
            'periode_keluar_org' => $request->periode_keluar_org,
            'jabatan_org' => $request->jabatan_org,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'catatan' => $request->catatan,
            'id_alumni' => Auth::id() // Set the ID of the logged-in user
        ]);

        //redirect to index
        return redirect()->route('organization.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $organization = organization::findOrFail($id);

        //render view with post
        return view('alumni.dataAlumni.organization.edit', compact('organization'));
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
            'nama_org'=> 'required',
            'periode_masuk_org'=> 'required',
            'periode_keluar_org'=> 'required',
            'jabatan_org'=> 'required',
            'kota',
            'negara',
            'catatan'
        ]);

        //get post by ID
        $organization = organization::findOrFail($id);
            //update post without image
            $organization->update([
                'nama_org' => $request->nama_org,
                'periode_masuk_org' => $request->periode_masuk_org,
                'periode_keluar_org' => $request->periode_keluar_org,
                'jabatan_org' => $request->jabatan_org,
                'kota' => $request->kota,
                'negara' => $request->negara,
                'catatan' => $request->catatan
        ]);

        //redirect to index
        return redirect()->route('organization.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $organization = organization::findOrFail($id);
        
        //delete post
        $organization->delete();

        //redirect to index
        return redirect()->route('organization.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}