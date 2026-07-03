<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.mahasiswa-form');
    }

    public function data()
    {
        return view('mahasiswa.mahasiswa-data');
    }
}
