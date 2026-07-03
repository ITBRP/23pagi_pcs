<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa/form', [MahasiswaController::class, 'create']);
Route::get('/mahasiswa/data', [MahasiswaController::class, 'data']);
