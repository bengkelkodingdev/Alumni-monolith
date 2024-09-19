<?php

namespace App\Http\Controllers;

//import Model "job
use App\Models\job;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class jobController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $jobs = job::latest()->paginate(5);

        //render view with posts
        return view('alumni.dataAlumni.job.index', compact('jobs'));
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
    
        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $jobs =job::where('id_alumni', $userId)->latest()->paginate(5);
        
        return view('alumni.dataAlumni.job.create', compact('user'));
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
            'nama_job'=> 'required',
            'periode_masuk_job'=> 'required',
            'periode_keluar_job'=> 'required',
            'jabatan_job'=> 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'catatan'=> 'required'
        ]);

        //create post
        job::create([
            'nama_job' => $request->nama_job,
            'periode_masuk_job' => $request->periode_masuk_job,
            'periode_keluar_job' => $request->periode_keluar_job,
            'jabatan_job' => $request->jabatan_job,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'catatan' => $request->catatan,
            'id_alumni' => Auth::id() // Set the ID of the logged-in user
        ]);

        //redirect to index
        return redirect()->route('job.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $job = job::findOrFail($id);

        //render view with post
        return view('alumni.dataAlumni.job.edit', compact('job'));
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
            'nama_job'=> 'required',
            'periode_masuk_job'=> 'required',
            'periode_keluar_job'=> 'required',
            'jabatan_job'=> 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'catatan'=> 'required'
        ]);

        //get post by ID
        $post = job::findOrFail($id);
            //update post without image
            $post->update([
                'nama_job' => $request->nama_job,
                'periode_masuk_job' => $request->periode_masuk_job,
                'periode_keluar_job' => $request->periode_keluar_job,
                'jabatan_job' => $request->jabatan_job,
                'kota' => $request->kota,
                'negara' => $request->negara,
                'catatan' => $request->catatan
        ]);

        //redirect to index
        return redirect()->route('job.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $job = job::findOrFail($id);
        
        //delete post
        $job->delete();

        //redirect to index
        return redirect()->route('job.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}