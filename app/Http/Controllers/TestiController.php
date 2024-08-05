<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testi;

class TestiController extends Controller
{
    public function addTesti(Request $request)
    {
        // dd($request->all()); 
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $fotoname);
        }


        $testi = new Testi();
        $testi->nama = $request->nama;
        $testi->asal_sekolah = $request->asal_sekolah;
        $testi->universitas = $request->universitas;
        $testi->program_studi = $request->program_studi;
        $testi->deskripsi = $request->deskripsi;
        $testi->foto = $fotoname;
        $testi->save();
        notify()->success('Data testimoni ditambahkan');
        return redirect()->route('testi');
    }

    
    public function editTesti(Request $request, $id)
    {
        //dd($request->all());

        $testi = Testi::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $fotoname);
        }

        $testi->nama = $request->nama;
        $testi->asal_sekolah = $request->asal_sekolah;
        $testi->universitas = $request->universitas;
        $testi->program_studi = $request->program_studi;
        $testi->deskripsi = $request->deskripsi;
        $testi->foto = $fotoname;
        $testi->save();
        notify()->Success('Data testimoni diperbarui');
        return redirect()->route('testi');
    }
}
