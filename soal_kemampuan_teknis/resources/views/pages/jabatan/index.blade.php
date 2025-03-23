@extends('layouts.app')

@section('title', 'Data Jabatan')

@section('content')
  <a href="{{ route('jabatan.tambah') }}" class="btn btn-primary mb-3">Tambah Jabatan</a>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $jabatan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jabatan->nama_jabatan }}</td>
                            <td>
                              <a href="{{ route('jabatan.edit', $jabatan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              <a onclick="return confirm('Apakah anda yakin?')" href="{{ route('jabatan.delete', $jabatan->id) }}" class="btn btn-danger btn-sm">Hapus</a>
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