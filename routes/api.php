<?php

use App\Http\Controllers\API\PengumumanController;
use App\Http\Controllers\API\PengumumanLogangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pengumuman', [PengumumanController::class, 'index']);
Route::get('/pengumuman/{id}', [PengumumanController::class, 'show']);
Route::get('/pengumumanLogang', [PengumumanLogangController::class, 'index']);
Route::get('/pengumumanLogang/{id}', [pengumumanLogangController::class, 'show']);
