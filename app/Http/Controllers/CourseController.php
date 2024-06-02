<?php

namespace App\Http\Controllers;

//import Model "course
use App\Models\course;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $courses = course::latest()->paginate(5);

        //render view with posts
        return view('course.index', compact('courses'));
    }
     /**
     * create
     *
     * @return View
     */

    public function create(): View
    {
        return view('course.create');
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
            'nama_course'=> 'required',
            'institusi_course'=> 'required',
            'tingkat_course'=> 'required',
            'tahun_course'=> 'required'
        ]);

        //create post
        course::create([
            'nama_course' => $request->nama_course,
            'institusi_course' => $request->institusi_course,
            'tingkat_course' => $request->tingkat_course,
            'tahun_course' => $request->tahun_course
        ]);

        //redirect to index
        return redirect()->route('course.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $course = course::findOrFail($id);

        //render view with post
        return view('course.edit', compact('course'));
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
            'nama_course'=> 'required',
            'institusi_course'=> 'required',
            'tingkat_course'=> 'required',
            'tahun_course'=> 'required'
        ]);

        //get post by ID
        $course = course::findOrFail($id);
            //update post without image
            $course->update([
                'nama_course' => $request->nama_course,
                'institusi_course' => $request->institusi_course,
                'tingkat_course' => $request->tingkat_course,
                'tahun_course' => $request->tahun_course
        ]);

        //redirect to index
        return redirect()->route('course.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $course = course::findOrFail($id);

        //delete post
        $course->delete();

        //redirect to index
        return redirect()->route('course.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}