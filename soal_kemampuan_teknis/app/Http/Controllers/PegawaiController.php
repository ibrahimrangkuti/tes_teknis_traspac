<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\UnitKerja;
use App\Models\Pegawai;
use Barryvdh\DomPDF\Facade\Pdf;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_pegawai = Pegawai::get();
        $data_unit_kerja = UnitKerja::get();
        
        if(request('unit_kerja') != "") {
            $data_pegawai = Pegawai::where('unit_kerja_id', request('unit_kerja'))->get();
        }

        return view('pages.pegawai.index', [
            'data_pegawai' => $data_pegawai,
            'data_unit_kerja' => $data_unit_kerja
        ]);
    }

    public function create()
    {
        $data_jabatan = Jabatan::get();
        $data_unit_kerja = UnitKerja::get();
        return view('pages.pegawai.create', [
            'data_jabatan' => $data_jabatan,
            'data_unit_kerja' => $data_unit_kerja
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|numeric',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'alamat' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'golongan' => 'required',
            'eselon' => 'required',
            'tempat_tugas' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'npwp' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $pegawai = new Pegawai();
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->alamat = $request->alamat;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->golongan = $request->golongan;
        $pegawai->eselon = $request->eselon;
        $pegawai->jabatan_id = $request->jabatan;
        $pegawai->tempat_tugas = $request->tempat_tugas;
        $pegawai->agama = $request->agama;
        $pegawai->unit_kerja_id = $request->unit_kerja;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->npwp = $request->npwp;

        // upload foto pegawai
        if($request->hasFile('foto')) {
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $imageName);
            $pegawai->foto = $imageName;
        } else {
            $pegawai->foto = 'default-profile.jpg';
        }

        $pegawai->save();

        return redirect()->route('pegawai.index');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $data_jabatan = Jabatan::get();
        $data_unit_kerja = UnitKerja::get();

        return view('pages.pegawai.edit', [
            'pegawai' => $pegawai, 
            'data_jabatan' => $data_jabatan,
            'data_unit_kerja' => $data_unit_kerja
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|numeric',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'alamat' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'golongan' => 'required',
            'eselon' => 'required',
            'tempat_tugas' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'npwp' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->alamat = $request->alamat;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->golongan = $request->golongan;
        $pegawai->eselon = $request->eselon;
        $pegawai->jabatan_id = $request->jabatan;
        $pegawai->tempat_tugas = $request->tempat_tugas;
        $pegawai->agama = $request->agama;
        $pegawai->unit_kerja_id = $request->unit_kerja;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->npwp = $request->npwp;

        if ($request->hasFile('foto')) {
            if ($pegawai->foto && file_exists(public_path('uploads/' . $pegawai->foto))) {
                unlink(public_path('uploads/' . $pegawai->foto));
            }
            
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $imageName);
            $pegawai->foto = $imageName;
        }

        $pegawai->save();

        return redirect()->route('pegawai.index');
    }


    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index');
    }

    public function download_pdf(Request $request)
    {
        $data_pegawai = Pegawai::all();

        if($request->unit_kerja) {
            $data_pegawai = Pegawai::where('unit_kerja_id', $request->unit_kerja)->get();
        }

        // return view('pages.pegawai.view_pdf', ['data_pegawai' => $data_pegawai]);
        $pdf = Pdf::loadView('pages.pegawai.view_pdf', ['data_pegawai' => $data_pegawai])
            ->setPaper('A3', 'landscape')
            // ->setOption(['margin-top' => 10, 'margin-bottom' => 10, 'margin-left' => 10, 'margin-right' => 10])
            ->setBasePath(public_path());
        return $pdf->download('daftar-pegawai-' . time() . '.pdf');
    }
}
