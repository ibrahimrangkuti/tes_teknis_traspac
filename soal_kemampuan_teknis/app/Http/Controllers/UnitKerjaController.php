<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitKerja;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $data = UnitKerja::get();
        return view('pages.unit_kerja.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.unit_kerja.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama_unit_kerja' => 'required|string']);
        
        $unit_kerja = new UnitKerja();
        $unit_kerja->nama_unit_kerja = $request->nama_unit_kerja;
        $unit_kerja->save();

        return redirect()->route('unit-kerja.index');
    }

    public function edit($id)
    {
        $unit_kerja = UnitKerja::findOrFail($id);
        return view('pages.unit_kerja.edit', ['unit_kerja' => $unit_kerja]);
    }

    public function update(Request $request, $id)
    {
        $unit_kerja = UnitKerja::findOrFail($id);
        $unit_kerja->nama_unit_kerja = $request->nama_unit_kerja;
        $unit_kerja->update();

        return redirect()->route('unit-kerja.index');
    }

    public function destroy($id)
    {
        $unit_kerja = UnitKerja::findOrFail($id);
        $unit_kerja->delete();

        return redirect()->route('unit-kerja.index');
    }
}
