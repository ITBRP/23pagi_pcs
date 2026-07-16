@extends('mahasiswa.mahasiswa-template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Mahasiswa Baru</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                        <li class="breadcrumb-item active">Starter page</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('mahasiswa.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">NIM</label>
                    <input value="{{ $data->nim }}" name="nim" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input value="{{ $data->nama }}" name="nama" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" cols="30" rows="5">{{ $data->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
