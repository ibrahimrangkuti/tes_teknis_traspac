@extends('layouts.app')

@section('title', 'Data Unit Kerja')

@section('content')
  <a href="{{ route('unit-kerja.tambah') }}" class="btn btn-primary mb-3">Tambah Unit Kerja</a>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Unit Kerja</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $unit_kerja)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $unit_kerja->nama_unit_kerja }}</td>
                            <td>
                                <a href="{{ route('pegawai.index') . '?unit_kerja=' . $unit_kerja->id }}" class="btn btn-success btn-sm">Daftar Pegawai</a>
                                <a href="{{ route('unit-kerja.edit', $unit_kerja->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Apakah anda yakin?')" href="{{ route('unit-kerja.delete', $unit_kerja->id) }}" class="btn btn-danger btn-sm">Hapus</a>
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