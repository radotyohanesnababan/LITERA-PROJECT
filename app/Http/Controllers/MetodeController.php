<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use Illuminate\Http\Request;

class MetodeController extends Controller
{
    public function addMetode(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/metode', $fotoname);
        }

        $metode = new Metode();
        $metode->deskripsi = $request->deskripsi;
        $metode->foto = $fotoname;
        $metode->save();
        notify()->success('Data metode ditambahkan');
        return redirect()->route('metode');
    }
    public function editMetode(Request $request, $id)
    {
        $metode = Metode::findOrFail($id);
        //dd($request->all());
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/metode', $fotoname);
        }

        $metode->deskripsi = $request->deskripsi;
        $metode->foto = $fotoname;
        $metode->save();
        notify()->success('Data metode diperbarui');
        return redirect()->route('metode');
    }
}
