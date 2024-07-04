<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/aboutus', 'aboutus');
Route::view('/gallery', 'activity');
Route::view('/ppdb', 'ppdb');
Route::view('/login', 'loginpage');
Route::view('/ppdbnext', 'ppdb2');
Route::view('/aktivitasanak', 'aktivitasanak');
Route::view('/kegiatanguru', 'kegiatanguru');
Route::view('/kegiatanpembelajaran', 'kegiatanpembelajaran');
Route::view('/puncaktema', 'puncaktema');

