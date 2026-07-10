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
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.data');
    }

    public function data()
    {
        $data = Mahasiswa::all();
        // $ary = Mahasiswa::get()->toArray();
        // dd($data, $ary);
        return view('mahasiswa.data', compact('data'));
    }
}
