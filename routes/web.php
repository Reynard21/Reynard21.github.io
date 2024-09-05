<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\PostCrudController;
use App\Http\Controllers\ChildController;


Route::view('/', 'home');
Route::view('/aboutus', 'aboutus');
Route::view('/gallery', 'activity');
Route::view('/ppdbnext', 'ppdb2');
Route::view('/aktivitasanak', 'aktivitasanak');
Route::view('/kegiatanguru', 'kegiatanguru');
Route::view('/kegiatanpembelajaran', 'kegiatanpembelajaran');
Route::view('/puncaktema', 'puncaktema');
// Route::get('/public-image/{title}', [PostController::class, 'showPublicImage']);

Route::middleware([])->group(function () {
// Route::get('/form-page-1', [StudentController::class, 'showPage1']);
// Route::post('/form-page-1', [StudentController::class, 'storePage1']);
// Route::get('/form-page-2', [StudentController::class, 'showPage2']);
// Route::post('/form-page-2', [StudentController::class, 'storePage2']);
// Route::post('/submit-form', [StudentController::class, 'submitForm']);
Route::get('/form', [ChildController::class, 'showForm'])->name('form.show');
Route::post('/form', [ChildController::class, 'submitForm'])->name('form.submit');
// Route::get('/admin/child', [ChildController::class, 'APIValidation']);
Route::get('/aktivitasanak', [PostController::class, 'getAktivitasAnakAPI']);
Route::get('/kegiatanguru', [PostController::class, 'getKegiatanGuruAPI']);
Route::get('/puncaktema', [PostController::class, 'getPuncakTemaAPI']);
Route::get('/kegiatanpembelajaran', [PostController::class, 'getKegiatanPembelajaranAPI']);
Route::get('/', [PostController::class, 'getHomeAPI']);
});

