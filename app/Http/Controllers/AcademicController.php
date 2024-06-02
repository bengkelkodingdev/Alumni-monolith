<?php

namespace App\Http\Controllers;

//import Model "academic
use App\Models\academic;

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

        //render view with posts
        return view('academic.index', compact('academics'));
    }
     /**
     * create
     *
     * @return View
     */

    public function create(): View
    {
        return view('academic.create');
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
            'nim'=> 'required',
            'nama_mhs'=> 'required',
            'email'=> 'required',
            'ipk'=> 'required',
            'judul_skripsi'=> 'required',
            'dosen_wali'=> 'required',
            'tahun_lulus' => 'required'
        ]);

        //create post
        academic::create([
            'nim' => $request->nim,
            'nama_mhs' => $request->nama_mhs,
            'email' => $request->email,
            'ipk' => $request->ipk,
            'judul_skripsi' => $request->judul_skripsi,
            'dosen_wali' => $request->dosen_wali,
            'tahun_lulus' => $request->tahun_lulus
        ]);

        //redirect to index
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

        //render view with post
        return view('academic.edit', compact('academic'));
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
            'nim'=> 'required',
            'nama_mhs'=> 'required',
            'email'=> 'required',
            'ipk'=> 'required',
            'judul_skripsi'=> 'required',
            'dosen_wali'=> 'required',
            'tahun_lulus' => 'required'
        ]);

        //get post by ID
        $academic = academic::findOrFail($id);
            //update post without image
            $academic->update([
            'nim' => $request->nim,
            'nama_mhs' => $request->nama_mhs,
            'email' => $request->email,
            'ipk' => $request->ipk,
            'judul_skripsi' => $request->judul_skripsi,
            'dosen_wali' => $request->dosen_wali,
            'tahun_lulus' => $request->tahun_lulus
        ]);

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

        //delete post
        $academic->delete();

        //redirect to index
        return redirect()->route('academic.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}