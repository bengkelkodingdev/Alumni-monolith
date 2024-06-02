<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academic;
use App\Models\Job;
use App\Models\Internship;
use App\Models\Organization;
use App\Models\Award;
use App\Models\Course;

class QuizController extends Controller
{
    public function create()
    {
        return view('tracerstudy.quiz');
    }

    public function store(Request $request)
    {
        // Validate all the data
        $request->validate([
            // Pendidikan validation
            'nim' => 'required',
            'nama_mhs' => 'required',
            'email' => 'required|email',
            'ipk' => 'required|numeric',
            'judul_skripsi' => 'required',
            'dosen_wali' => 'required',
            // Pekerjaan validation
            'nama_job' => 'required',
            'periode_masuk_job' => 'required',
            'periode_keluar_job' => 'required',
            'alamat_job' => 'required',
            'link_job' => 'required',
            'jns_job' => 'required',
            'jabatan_job' => 'required',
            // Magang validation
            'nama_intern' => 'required',
            'periode_masuk_intern' => 'required',
            'periode_keluar_intern' => 'required',
            'alamat_intern' => 'required',
            'link_intern' => 'required',
            'jns_intern' => 'required',
            'jabatan_intern' => 'required',
            // Organisasi validation
            'nama_org' => 'required',
            'periode_org' => 'required',
            'link_org' => 'required',
            'tingkat_org' => 'required',
            'jns_org' => 'required',
            'jabatan_org' => 'required',
            // Penghargaan validation
            'nama_award' => 'required',
            'institusi_award' => 'required',
            'tingkat_award' => 'required',
            'tahun_award' => 'required',
            'deskripsi_award' => 'required',
            // Pelatihan validation
            'nama_course' => 'required',
            'institusi_course' => 'required',
            'tingkat_course' => 'required',
            'tahun_course' => 'required',
        ]);

        // Save each section's data
        Academic::create($request->only(['nim', 'nama_mhs', 'email', 'ipk', 'judul_skripsi', 'dosen_wali']));
        Job::create($request->only(['nama_job', 'periode_masuk_job', 'periode_keluar_job', 'alamat_job', 'link_job', 'jns_job', 'jabatan_job']));
        Internship::create($request->only(['nama_intern', 'periode_masuk_intern', 'periode_keluar_intern', 'alamat_intern', 'link_intern', 'jns_intern', 'jabatan_intern']));
        Organization::create($request->only(['nama_org', 'periode_org', 'link_org', 'tingkat_org', 'jns_org', 'jabatan_org']));
        Award::create($request->only(['nama_award', 'institusi_award', 'tingkat_award', 'tahun_award', 'deskripsi_award']));
        Course::create($request->only(['nama_course', 'institusi_course', 'tingkat_course', 'tahun_course']));

        // Redirect to a thank you page or back to the form with a success message
        return redirect()->route('tracerstudy.index')->with('success', 'Data Berhasil Disimpan!');
    }
}
