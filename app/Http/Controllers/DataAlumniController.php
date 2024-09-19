<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\academic;
use App\Models\job;
use App\Models\internship;
use App\Models\organization;
use App\Models\award;
use App\Models\course;
use App\Models\skill;
use Illuminate\Support\Facades\Auth;

class DataAlumniController extends Controller
{
    // Method untuk menampilkan CV
    public function showCV()
    {
        // Mengambil id_alumni dari pengguna yang sedang login
        $id_alumni = Auth::user()->id;

        // Mengambil data yang sesuai dengan id_alumni pengguna
        $academics = academic::where('id_alumni', $id_alumni)->paginate(10);
        $jobs = job::where('id_alumni', $id_alumni)->paginate(10);
        $internships = internship::where('id_alumni', $id_alumni)->paginate(10);
        $organizations = organization::where('id_alumni', $id_alumni)->paginate(10);
        $awards = award::where('id_alumni', $id_alumni)->paginate(10);
        $courses = course::where('id_alumni', $id_alumni)->paginate(10);
        $skills = skill::where('id_alumni', $id_alumni)->paginate(10);

        // Mengirim data ke view
        return view('alumni.dataAlumni.index', compact('academics', 'jobs', 'internships', 'organizations', 'awards', 'courses', 'skills'));
    }
}
