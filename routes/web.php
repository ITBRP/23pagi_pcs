<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// url utama default diarahkan ke tabel
Route::get('/', function () {
    return redirect()->route('mahasiswa.data');
});

// url untuk menampilkan form
Route::get('/mahasiswa/form', [MahasiswaController::class, 'create'])->name('mahasiswa.form');
// url untuk proses form
Route::post('/mahasiswa/proses-form', [MahasiswaController::class, 'submit'])->name('mahasiswa.submit');
// url untuk menampilkan tabel
Route::get('/mahasiswa/data', [MahasiswaController::class, 'data'])->name('mahasiswa.data');
// url untuk menampilkan form edit
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
// url untuk proses form edit
Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
// url untuk proses form edit
Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
