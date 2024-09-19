<?php

namespace App\Http\Controllers;

//import Model "skill
use App\Models\skill;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $skills = skill::latest()->paginate(5);

        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $skills = skill::where('id_alumni', $userId)->latest()->paginate(5);
        
        //render view with posts
        return view('alumni.dataAlumni.skill.index', compact('skills'));
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
    
        return view('alumni.dataAlumni.skill.create', compact('user'));
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
            'kerjasama_skill'=> 'required',
            'ahli_skill'=> 'required',
            'inggris_skill'=> 'required',
            'komunikasi_skill'=> 'required',
            'pengembangan_skill'=> 'required',
            'kepemimpinan_skill'=> 'required',
            'etoskerja_skill'=> 'required'
        ]);

        //create post
        skill::create([
            'kerjasama_skill' => $request->kerjasama_skill,
            'ahli_skill' => $request->ahli_skill,
            'inggris_skill' => $request->inggris_skill,
            'komunikasi_skill' => $request->komunikasi_skill,
            'pengembangan_skill' => $request->pengembangan_skill,
            'kepemimpinan_skill' => $request->kepemimpinan_skill,
            'etoskerja_skill' => $request->etoskerja_skill,
            'id_alumni' => Auth::id() // Set the ID of the logged-in user
        ]);

        //redirect to index
        return redirect()->route('skill.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $skill = skill::findOrFail($id);

        // Ensure that the skill belongs to the logged-in user
        if ($skill->id_alumni !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        //render view with post
        return view('alumni.dataAlumni.skill.edit', compact('skill'));
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
            'kerjasama_skill'=> 'required',
            'ahli_skill'=> 'required',
            'inggris_skill'=> 'required',
            'komunikasi_skill'=> 'required',
            'pengembangan_skill'=> 'required',
            'kepemimpinan_skill'=> 'required',
            'etoskerja_skill'=> 'required'
        ]);

        //get post by ID
        $post = skill::findOrFail($id);
            //update post without image
            $post->update([
                'kerjasama_skill' => $request->kerjasama_skill,
                'ahli_skill' => $request->ahli_skill,
                'inggris_skill' => $request->inggris_skill,
                'komunikasi_skill' => $request->komunikasi_skill,
                'pengembangan_skill' => $request->pengembangan_skill,
                'kepemimpinan_skill' => $request->kepemimpinan_skill,
                'etoskerja_skill' => $request->etoskerja_skill
        ]);

        //redirect to index
        return redirect()->route('skill.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $skill = skill::findOrFail($id);
        
        //delete post
        $skill->delete();

        //redirect to index
        return redirect()->route('skill.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}