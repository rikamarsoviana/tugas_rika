<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('layouts.template');
});

Route::get('/header', function () {
    return view('contact');
});


Auth::routes();

// route mahasiwa
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
Route::get('/mahasiswa/view/{id}', [App\Http\Controllers\MahasiswaController::class, 'view'])->name('mahasiswa.view');
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::post('/mahasiswa/delete/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// route jurusan
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jurusan', [App\Http\Controllers\JurusanController::class, 'index']);
Route::get('/jurusan/view/{id}', [App\Http\Controllers\JurusanController::class, 'view'])->name('jurusan.view');
Route::get('/jurusan/create', [App\Http\Controllers\JurusanController::class, 'create'])->name('jurusan.create');
Route::post('/jurusan', [App\Http\Controllers\JurusanController::class, 'store'])->name('jurusan.store');
Route::get('/jurusan/edit/{id}', [App\Http\Controllers\JurusanController::class, 'edit'])->name('jurusan.edit');
Route::post('/jurusan/update/{id}', [App\Http\Controllers\JurusanController::class, 'update'])->name('jurusan.update');
Route::post('/jurusan/delete/{id}', [App\Http\Controllers\JurusanController::class, 'destroy'])->name('jurusan.destroy');

// route prodi
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/prodi', [App\Http\Controllers\ProdiController::class, 'index']);
Route::get('/prodi/view/{id}', [App\Http\Controllers\ProdiController::class, 'view'])->name('prodi.view');
Route::get('/prodi/create', [App\Http\Controllers\ProdiController::class, 'create'])->name('prodi.create');
Route::post('/prodi', [App\Http\Controllers\ProdiController::class, 'store'])->name('prodi.store');
Route::get('/prodi/edit/{id}', [App\Http\Controllers\ProdiController::class, 'edit'])->name('prodi.edit');
Route::post('/prodi/update/{id}', [App\Http\Controllers\ProdiController::class, 'update'])->name('prodi.update');
Route::post('/prodi/delete/{id}', [App\Http\Controllers\ProdiController::class, 'destroy'])->name('prodi.destroy');

