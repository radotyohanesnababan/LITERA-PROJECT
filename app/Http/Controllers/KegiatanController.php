<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function addKegiatan(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $fotoname);
        }

        $kegiatan = new Kegiatan();
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto = $fotoname;
        $kegiatan->save();
        notify()->success('Data kegiatan ditambahkan');
        return redirect()->route('kegiatan');
    }
    public function editKegiatan(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        //dd($request->all());
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $fotoname);
        }

        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto = $fotoname;
        $kegiatan->save();
        notify()->success('Data kegiatan diperbarui');
        return redirect()->route('kegiatan');
    }
}
