<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumni;
use App\Models\academic;
use App\Models\job;
use App\Models\internship;
use App\Models\organization;
use App\Models\award;
use App\Models\course;
use App\Models\skill;
use Illuminate\Support\Facades\Auth;

class DataAlumniAdminController extends Controller
{
    public function index()
    {
        // Ambil data dari model dan gunakan paginate()
        $data = alumni::paginate(10); // Menampilkan 10 item per halaman

        // Mengambil semua data alumni dengan kolom tertentu tanpa tahun lulus
        $alumniData = alumni::select( 'nim', 'nama_alumni', 'email', 'no_hp')->get();

        // Mengirim data ke view 'alumni.index'
        return view('admin.dataAlumni.index', compact('alumniData'));
    }

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
        return view('admin.dataAlumni.cv', compact('academics', 'jobs', 'internships', 'organizations', 'awards', 'courses', 'skills'));
    }
}