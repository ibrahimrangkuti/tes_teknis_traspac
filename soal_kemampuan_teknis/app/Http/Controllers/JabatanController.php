<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::get();
        return view('pages.jabatan.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama_jabatan' => 'required|string']);
        
        $jabatan = new Jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->save();

        return redirect()->route('jabatan.index');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('pages.jabatan.edit', ['jabatan' => $jabatan]);
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->update();

        return redirect()->route('jabatan.index');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('jabatan.index');
    }
}
