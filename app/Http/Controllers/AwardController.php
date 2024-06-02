<?php

namespace App\Http\Controllers;

//import Model "award
use App\Models\award;

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

        //render view with posts
        return view('award.index', compact('awards'));
    }
     /**
     * create
     *
     * @return View
     */

    public function create(): View
    {
        return view('award.create');
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
            'deskripsi_award'=> 'required'
        ]);

        //create post
        award::create([
            'nama_award' => $request->nama_award,
            'institusi_award' => $request->institusi_award,
            'tingkat_award' => $request->tingkat_award,
            'tahun_award' => $request->tahun_award,
            'deskripsi_award' => $request->deskripsi_award
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
        return view('award.edit', compact('award'));
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