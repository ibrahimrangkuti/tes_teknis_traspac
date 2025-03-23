@extends('layouts.app')

@section('title', 'Edit Jabatan')

@section('content')
    <a href="{{ route('jabatan.index') }}" class="btn btn-danger mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                            <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control @error('nama_jabatan') is-invalid @enderror" value="{{ $jabatan->nama_jabatan }}">
                            @error('nama_jabatan')
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