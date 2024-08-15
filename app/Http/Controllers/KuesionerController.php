<?php

namespace App\Http\Controllers;

//import Model "kuesioner
use App\Models\kuesioner;

//import Facade "Auth / yang sudah login"
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class KuesionerController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View|RedirectResponse
    {
        $user = Auth::user();

        // Mengecek apakah pengguna sudah pernah membuat kuesioner
        $kuesionerExists = Kuesioner::where('id_alumni', $user->id)->exists();

        if ($kuesionerExists) {
            // Jika kuesioner sudah ada, tampilkan halaman index dengan paginasi
            $kuesioners = Kuesioner::where('id_alumni', $user->id)->latest()->paginate(5);
            return view('alumni.tracerstudy.kuesioner.index', compact('kuesioners', 'user'));
        } else {
            // Jika kuesioner belum ada, arahkan ke halaman create
            return redirect()->route('kuesioner.create');
        }
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
     
         // Render view dengan data pengguna
         return view('alumni.tracerstudy.kuesioner.create', compact('user'));
     }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate form
        $validatedData = $request->validate([
            'nama_alumni' => 'required',
            'jns_kelamin' => 'required',
            'nim' => 'required',
            'tahun_masuk' => 'required|numeric',
            'tahun_lulus' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'status' => 'required',
            'jns_job' => 'required_if:status,Bekerja Full Time,Bekerja Part Time,Wiraswasta',
            'nama_job' => 'required_if:status,Bekerja Full Time,Bekerja Part Time,Wiraswasta',
            'jabatan_job' => 'required_if:status,Bekerja Full Time,Bekerja Part Time,Wiraswasta',
            'lingkup_job' => 'required_if:status,Bekerja Full Time,Bekerja Part Time,Wiraswasta',
            'biaya_studi' => 'required_if:status,Melanjutkan Pendidikan',
            'nama_studi' => 'required_if:status,Melanjutkan Pendidikan',
            'prodi' => 'required_if:status,Melanjutkan Pendidikan',
            'tgl_studi' => 'required_if:status,Melanjutkan Pendidikan',
        ]);

        // Determine which form fields to save based on status
        $status = $request->input('status');

        if ($status === "Bekerja Full Time" || $status === "Bekerja Part Time" || $status === "Wiraswasta") {
            // Save job-related fields
            $data = $request->only([
                'nama_alumni', 'jns_kelamin', 'nim', 'tahun_masuk', 'tahun_lulus', 'no_hp', 'email',
                'status', 'jns_job', 'nama_job', 'jabatan_job', 'lingkup_job'
            ]);
        } elseif ($status === "Melanjutkan Pendidikan") {
            // Save education-related fields
            $data = $request->only([
                'nama_alumni', 'jns_kelamin', 'nim', 'tahun_masuk', 'tahun_lulus', 'no_hp', 'email',
                'status', 'biaya_studi', 'nama_studi', 'prodi', 'tgl_studi'
            ]);
        } else {
            // Handle other cases if needed
            $data = $request->only([
                'nama_alumni', 'jns_kelamin', 'nim', 'tahun_masuk', 'tahun_lulus', 'no_hp', 'email', 'status'
            ]);
        }

        // Create new kuesioner record
        $data['id_alumni'] = Auth::id();
        Kuesioner::create($data);

        // Redirect to index with success message
        return redirect()->route('kuesioner.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // Menampilkan form untuk mengedit kuesioner
    public function edit($id): View
    {
        $kuesioner = Kuesioner::findOrFail($id);
        return view('alumni.tracerstudy.kuesioner.edit', compact('kuesioner'));
    }

    // Menyimpan perubahan setelah diedit
    public function update(Request $request, $id): RedirectResponse
    {
        $kuesioner = Kuesioner::findOrFail($id);
        $kuesioner->update($request->all());
        return redirect()->route('kuesioner.index', $kuesioner->id)->with('success', 'Data berhasil diperbarui');
    }

}