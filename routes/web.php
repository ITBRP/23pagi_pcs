<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/greeting', function () {
//     return 'Hello World';
// });

Route::get('/mahasiswa/form', [MahasiswaController::class, 'create'])->name('mahasiswa.form');
Route::post('/mahasiswa/proses-form', [MahasiswaController::class, 'submit'])->name('mahasiswa.submit');
Route::get('/mahasiswa/data', [MahasiswaController::class, 'data'])->name('mahasiswa.data');
