<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliah_mahasiswaController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/mahasiswa', MahasiswaController::class);
Route::get('/show', [ShowController::class, 'show']);
Route::get('/nilai/{mahasiswa}', [MataKuliah_mahasiswaController::class, 'index']);
Route::get('/cetak_pdf/{mahasiswa}', [MataKuliah_mahasiswaController::class, 'pdf']);
