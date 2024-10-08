<?php

namespace App\Http\Controllers;

//import Model "course
use App\Models\course;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

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
        
        // Get the ID of the currently authenticated user
        $userId = Auth::id();
        
        // Get skills associated with the logged-in user
        $coursecourses =course::where('id_alumni', $userId)->latest()->paginate(5);
        
        //render view with posts
        return view('alumni.dataAlumni.course.index', compact('courses'));
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
    
        return view('alumni.dataAlumni.course.create', compact('user'));
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
            'tahun_course' => $request->tahun_course,
            'id_alumni' => Auth::id() // Set the ID of the logged-in user
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
        return view('alumni.dataAlumni.course.edit', compact('course'));
    }
    // public function edit($id)
    // {
    //     $course = Course::findOrFail($id);
    //     return response()->json($course);
    // }
   
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'nama_course' => 'required',
            'institusi_course' => 'required',
            'tingkat_course' => 'required',
            'tahun_course' => 'required'
        ]);

        // Get post by ID
        $course = Course::findOrFail($id);

        // Update post
        $course->update([
            'nama_course' => $request->nama_course,
            'institusi_course' => $request->institusi_course,
            'tingkat_course' => $request->tingkat_course,
            'tahun_course' => $request->tahun_course
        ]);

        // Redirect to index
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