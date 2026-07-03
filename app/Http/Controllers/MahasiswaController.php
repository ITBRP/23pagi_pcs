<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.form');
    }

    public function submit(Request $request)
    {
        // dd($request->all());

        // $data = $request->except('_token');
        // Mahasiswa::create($data);

        Mahasiswa::create($request->all());
        // return redirect()->route('mahasiswa.form');
    }

    public function data()
    {
        return view('mahasiswa.data');
    }
}
