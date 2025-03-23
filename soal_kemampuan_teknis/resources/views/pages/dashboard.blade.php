@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-4 col-6">
      <!--begin::Small Box Widget 3-->
      <div class="small-box text-bg-warning">
        <div class="inner">
          <h3>{{ \App\Models\Pegawai::count() }}</h3>
          <p>Pegawai</p>
        </div>
        <a
          href="{{ route('pegawai.index') }}"
          class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
        >
          Lihat Detail <i class="bi bi-link-45deg"></i>
        </a>
      </div>
      <!--end::Small Box Widget 3-->
    </div>
    <div class="col-lg-4 col-6">
      <!--begin::Small Box Widget 4-->
      <div class="small-box text-bg-success">
        <div class="inner">
          <h3>{{ \App\Models\UnitKerja::count() }}</h3>
          <p>Unit Kerja</p>
        </div>
        <a
          href="{{ route('unit-kerja.index') }}"
          class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
        >
          Lihat Detail <i class="bi bi-link-45deg"></i>
        </a>
      </div>
      <!--end::Small Box Widget 4-->
    </div>
    <div class="col-lg-4 col-6">
      <!--begin::Small Box Widget 4-->
      <div class="small-box text-bg-danger">
        <div class="inner">
          <h3>{{ \App\Models\Jabatan::count() }}</h3>
          <p>Jabatan</p>
        </div>
        <a
          href="{{ route('jabatan.index') }}"
          class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
        >
          Lihat Detail <i class="bi bi-link-45deg"></i>
        </a>
      </div>
      <!--end::Small Box Widget 4-->
    </div>
  </div>
@endsection