<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function addGaleri(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/galeri', $fotoname);
        }

        $galeri = new Galeri();
        $galeri->kategori = $request->kategori;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->foto = $fotoname;
        $galeri->save();
        notify()->success('Data galeri ditambahkan');
        return redirect()->route('galeri');
    }


    public function editGaleri(Request $request, $id)
    {
        // dd($request->all());

        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $fotoname = $galeri->foto;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/galeri', $fotoname);
        }
        $galeri->kategori = $request->kategori;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->foto = $fotoname;
        $galeri->save();
        notify()->Success('Data galeri diperbarui');
        return redirect()->route('galeri');
    }
}
