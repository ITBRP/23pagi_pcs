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
        return view('mahasiswa.data', compact('data'));
    }

    public function edit($id)
    {
        $data = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Mahasiswa::find($id)->update($request->all());
        return redirect()->route('mahasiswa.data');
    }

    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect()->route('mahasiswa.data');
    }
}
