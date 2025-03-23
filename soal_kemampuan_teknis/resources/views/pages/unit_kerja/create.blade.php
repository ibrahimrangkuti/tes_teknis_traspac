@extends('layouts.app')

@section('title', 'Tambah Unit Kerja')

@section('content')
    <a href="{{ route('unit-kerja.index') }}" class="btn btn-danger mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('unit-kerja.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="nama_unit_kerja" class="form-label">Nama Unit Kerja</label>
                            <input type="text" name="nama_unit_kerja" id="nama_unit_kerja" class="form-control @error('nama_unit_kerja') is-invalid @enderror">
                            @error('nama_unit_kerja')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-end">Simpan</button>
            </form>
        </div>
    </div>
@endsection