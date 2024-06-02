<?php

namespace App\Http\Controllers;

//import Model "organization
use App\Models\organization;

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

        //render view with posts
        return view('organization.index', compact('organizations'));
    }
     /**
     * create
     *
     * @return View
     */

    public function create(): View
    {
        return view('organization.create');
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
            'periode_org'=> 'required',
            'link_org'=> 'required',
            'tingkat_org'=> 'required',
            'jns_org'=> 'required',
            'jabatan_org'=> 'required'
        ]);

        //create post
        organization::create([
            'nama_org' => $request->nama_org,
            'periode_org' => $request->periode_org,
            'link_org' => $request->link_org,
            'tingkat_org' => $request->tingkat_org,
            'jns_org' => $request->jns_org,
            'jabatan_org' => $request->jabatan_org
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
        return view('organization.edit', compact('organization'));
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
            'periode_org'=> 'required',
            'link_org'=> 'required',
            'tingkat_org'=> 'required',
            'jns_org'=> 'required',
            'jabatan_org'=> 'required'
        ]);

        //get post by ID
        $organization = organization::findOrFail($id);
            //update post without image
            $organization->update([
                'nama_org' => $request->nama_org,
                'periode_org' => $request->periode_org,
                'link_org' => $request->link_org,
                'tingkat_org' => $request->tingkat_org,
                'jns_org' => $request->jns_org,
                'jabatan_org' => $request->jabatan_org
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