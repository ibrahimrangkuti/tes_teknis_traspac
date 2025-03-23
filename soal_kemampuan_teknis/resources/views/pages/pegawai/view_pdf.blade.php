<!DOCTYPE html>
<html>
<head>
<style>
#pegawai {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#pegawai td, #pegawai th {
  border: 1px solid #ddd;
  padding: 8px;
}

#pegawai tr:nth-child(even){background-color: #f2f2f2;}

#pegawai tr:hover {background-color: #ddd;}

#pegawai th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1b0261;
  color: white;
}

.title {
    text-align: center;
}
</style>
</head>
<body>

<div class="title">
    <h3>DAFTAR PEGAWAI</h3>
    <h3>Lembaga Administrasi Negara</h3>
    @if(request('unit_kerja')) <h3>Unit Kerja {{ \App\Models\UnitKerja::findOrFail(request('unit_kerja'))->nama_unit_kerja }}</h3> @endif
</div>

<table id="pegawai">
  <thead>
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>Tgl Lahir</th>
        <th>L/P</th>
        <th>Gol</th>
        <th>Eselon</th>
        <th>Jabatan</th>
        <th>Tempat Tugas</th>
        <th>Agama</th>
        <th>Unit Kerja</th>
        <th>No. HP</th>
        <th>NPWP</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($data_pegawai as $pegawai)
      <tr>
        <td>{{ $loop->iteration }}</td>
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
        <td>{{ $pegawai->unit_kerja->nama_unit_kerja }}</td>
        <td>{{ $pegawai->no_hp }}</td>
        <td>{{ $pegawai->npwp }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>


