<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogangController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'simpan']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

 Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/admin/bukanadmin', [AdminController::class, 'bukanadmin'])->middleware('userAkses:bukanadmin');
    Route::get('/admin/alumni', [AdminController::class, 'alumni'])->middleware('userAkses:alumni');
    Route::get('/logout', [SesiController::class, 'logout']);
    


});

//route Loker
Route::get('/loker',[LokerController::class, 'index'])->name('listings.index');
Route::get('/postLoker',[LokerController::class,'create']);
Route::post('/storeloker',[LokerController::class, 'store']);
Route::get('/loker/{id}', [LokerController::class,'show']);
Route::get('/loker/{id}/edit', [LokerController::class,'edit']);
Route::put('/loker/{id}/update', [LokerController::class,'update']);
Route::delete('/loker/{id}/delete', [LokerController::class,'destroy']);
Route::get('/manageLoker', [LokerController::class,'manage'])->name('manage.view');

//route Logang
Route::get('/logang', [LogangController::class, 'index'])->name('listingmagang.index');
Route::get('/postLogang',[LogangController::class,'create']);
Route::post('/storelogang',[LogangController::class, 'store']);
Route::get('/logang/{id}', [LogangController::class,'show']);
Route::get('/logang/{id}/edit', [LogangController::class,'edit']);
Route::put('/logang/{id}/update', [LogangController::class,'update']);
Route::delete('/logang/{id}/delete', [LogangController::class,'destroy']);
Route::get('/manageLogang', [LogangController::class,'manage'])->name('manageLogang.view');


//route quiz

// Rute yang memeriksa data dan mengarahkan ke halaman yang tepat
Route::get('/tracerstudy', function () {
    // Mengambil jumlah data dari setiap model
    $academicCount = \App\Models\Academic::count();
    $jobCount = \App\Models\Job::count();
    $internshipCount = \App\Models\Internship::count();
    $organizationCount = \App\Models\Organization::count();
    $awardCount = \App\Models\Award::count();
    $courseCount = \App\Models\Course::count();
    $skillCount = \App\Models\Skill::count();

    // Periksa apakah setidaknya satu model memiliki data
    if ($academicCount > 0 || $jobCount > 0 || $internshipCount > 0 || $organizationCount > 0 || $awardCount > 0 || $courseCount > 0 || $skillCount > 0) {
        // Jika setidaknya satu model memiliki data, arahkan ke halaman tracerstudy.index
        return redirect()->route('tracerstudy.index');
    } else {
        // Jika tidak ada data pada semua model, arahkan ke halaman tracerstudy.quiz
        return redirect('/tracerstudy/quiz');
    }
})->name('tracerstudy.check');

// Rute untuk hasil quiz
Route::get('/tracerstudy/hasilquiz', function () {
    // Mengambil data dari semua model yang diperlukan
    $academics = \App\Models\Academic::paginate(5);
    $jobs = \App\Models\Job::paginate(5);
    $internships = \App\Models\Internship::paginate(5);
    $organizations = \App\Models\Organization::paginate(5);
    $awards = \App\Models\Award::paginate(5);
    $courses = \App\Models\Course::paginate(5);
    $skills = \App\Models\Skill::paginate(5);

    // Mengirim data ke view
    return view('tracerstudy.index', compact('academics', 'jobs', 'internships', 'organizations', 'awards', 'courses', 'skills'));
})->name('tracerstudy.index');

//ini bagian quiz
Route::get('/tracerstudy/quiz', 'App\Http\Controllers\QuizController@create')->name('tracerstudy.quiz');
Route::post('/tracerstudy/quiz', 'App\Http\Controllers\QuizController@store')->name('tracerstudy.store');

//ini tampilan buat edit perquiznya
Route::resource('/academic', \App\Http\Controllers\academicController::class);
Route::resource('/job', \App\Http\Controllers\jobController::class);
Route::resource('/internship', \App\Http\Controllers\InternshipController::class);
Route::resource('/organization', \App\Http\Controllers\OrganizationController::class);
Route::resource('/award', \App\Http\Controllers\AwardController::class);
Route::resource('/course', \App\Http\Controllers\CourseController::class);
Route::resource('/skill', \App\Http\Controllers\SkillController::class);