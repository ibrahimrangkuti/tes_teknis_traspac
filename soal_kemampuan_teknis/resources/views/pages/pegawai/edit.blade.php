@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
    <a href="{{ route('pegawai.index') }}" class="btn btn-danger mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" name="nip"id="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ $pegawai->nip }}">
                            @error('nip')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ $pegawai->tempat_lahir }}">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin1" @if($pegawai->jenis_kelamin === "L") checked @endif>
                                <label class="form-check-label" for="jenis_kelamin1">
                                  Laki - Laki
                                </label>
                              </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin2" @if($pegawai->jenis_kelamin === "P") checked @endif>
                                <label class="form-check-label" for="jenis_kelamin2">
                                    Perempuan
                                </label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="golongan" class="form-label">Golongan</label>
                            <input type="text" name="golongan" id="golongan" class="form-control @error('golongan') is-invalid @enderror" value="{{ $pegawai->golongan }}">
                            @error('golongan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select name="jabatan" id="jabatan" class="form-control">
                                <option selected disabled>Pilih Jabatan</option>
                                @foreach ($data_jabatan as $jabatan)
                                <option value="{{ $jabatan->id }}" @if($pegawai->jabatan_id === $jabatan->id) selected @endif>{{ $jabatan->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option selected disabled>Pilih Agama</option>
                                <option value="islam" @if($pegawai->agama === "islam") selected @endif>Islam</option>
                                <option value="kristen" @if($pegawai->agama === "kristen") selected @endif>Kristen</option>
                                <option value="hindu" @if($pegawai->agama === "hindu") selected @endif>Hindu</option>
                                <option value="buddha" @if($pegawai->agama === "buddha") selected @endif>Buddha</option>
                                <option value="konghucu" @if($pegawai->agama === "konghucu") selected @endif>Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_hp" class="form-label">No. HP</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ $pegawai->no_hp }}">
                            @error('no_hp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $pegawai->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tgl_lahir" class="form-label">Tgl. Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ $pegawai->tgl_lahir }}">
                            @error('no_hp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="1" class="form-control @error('alamat') is-invalid @enderror">{{ $pegawai->alamat }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="eselon" class="form-label">Eselon</label>
                            <input type="text" name="eselon" id="eselon" class="form-control @error('eselon') is-invalid @enderror" value="{{ $pegawai->eselon }}">
                            @error('eselon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tempat_tugas" class="form-label">Tempat Tugas</label>
                            <input type="text" name="tempat_tugas" id="tempat_tugas" class="form-control @error('tempat_tugas') is-invalid @enderror" value="{{ $pegawai->tempat_tugas }}">
                            @error('tempat_tugas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="unit_kerja" class="form-label">Unit Kerja</label>
                            <select name="unit_kerja" id="unit_kerja" class="form-control">
                                <option selected disabled>Pilih Unit Kerja</option>
                                @foreach ($data_unit_kerja as $unit_kerja)
                                <option value="{{ $unit_kerja->id }}" @if($pegawai->unit_kerja_id === $unit_kerja->id) selected @endif>{{ $unit_kerja->nama_unit_kerja }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="npwp" class="form-label">NPWP</label>
                            <input type="text" name="npwp" id="npwp" class="form-control @error('npwp') is-invalid @enderror" value="{{ $pegawai->npwp }}">
                            @error('npwp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-end">Simpan</button>
            </form>
        </div>
    </div>
@endsection