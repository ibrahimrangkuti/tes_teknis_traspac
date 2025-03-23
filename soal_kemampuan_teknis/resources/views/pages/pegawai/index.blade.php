@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
  <div class="mb-3">
    <a href="{{ route('pegawai.tambah') }}" class="btn btn-primary">Tambah Pegawai</a>
    <a href="{{ route('pegawai.download_pdf', request()->query()) }}" class="btn btn-success">Export PDF</a>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form method="GET">
            <div class="row">
              <div class="input-group mb-3">
                <select name="unit_kerja" id="unit_kerja" class="form-control">
                  <option selected disabled>Pilih Unit Kerja</option>
                  <option value="">Lihat Semua</option>
                  @foreach ($data_unit_kerja as $unit_kerja)
                      <option value="{{ $unit_kerja->id }}" @if(request('unit_kerja') == $unit_kerja->id) selected @endif >{{ $unit_kerja->nama_unit_kerja }}</option>
                  @endforeach
                </select>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Filter</button>
              </div>
            </div>
          </form>

          <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Alamat</th>
                  <th>Tgl Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Golongan</th>
                  <th>Eselon</th>
                  <th>Jabatan</th>
                  <th>Tempat Tugas</th>
                  <th>Agama</th>
                  <th>Unit Kerja</th>
                  <th>No HP</th>
                  <th>NPWP</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_pegawai as $pegawai)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ asset('uploads/'. $pegawai->foto) }}" alt="" width="60"></td>
                      <td>{{ $pegawai->nip }}</td>
                      <td>{{ $pegawai->nama }}</td>
                      <td>{{ $pegawai->tempat_lahir }}</td>
                      <td>{{ $pegawai->alamat }}</td>
                      <td>{{ $pegawai->tgl_lahir }}</td>
                      <td>{{ $pegawai->jenis_kelamin }}</td>
                      <td>{{ $pegawai->golongan }}</td>
                      <td>{{ $pegawai->eselon }}</td>
                      <td>{{ $pegawai->jabatan->nama_jabatan }}</td>
                      <td>{{ $pegawai->tempat_tugas }}</td>
                      <td>{{ Str::ucfirst($pegawai->agama) }}</td>
                      <td><a href="?unit_kerja={{ $pegawai->unit_kerja->id }}">{{ $pegawai->unit_kerja->nama_unit_kerja }}</a></td>
                      <td>{{ $pegawai->no_hp }}</td>
                      <td>{{ $pegawai->npwp }}</td>
                      <td>
                        <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin?')" href="{{ route('pegawai.delete', $pegawai->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection