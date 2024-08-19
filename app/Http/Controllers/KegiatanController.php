<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function addKegiatan(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Inisialisasi variabel $fotoname
        $fotoname = '';

        // Periksa apakah ada file yang diunggah
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            
            $stored = $foto->storeAs('public/kegiatan', $fotoname);
            // if ($stored) {
            //     dd('File stored at: ' . $stored);
            // } else {
            //     dd('File could not be stored.');
            // }
        }
        

        // Buat instance baru dari model Kegiatan
        $kegiatan = new Kegiatan();
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto = $fotoname; // Simpan nama file ke dalam kolom 'foto' di database
        $kegiatan->save(); // Simpan data ke database

        

        // Tampilkan notifikasi sukses
        notify()->success('Data kegiatan ditambahkan');

        // Redirect ke halaman daftar kegiatan
        return redirect()->route('kegiatan');
    }

    public function editKegiatan(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        //dd($request->all());
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fotoname = $kegiatan->foto;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/kegiatan', $fotoname);
        }

        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto = $fotoname;
        $kegiatan->save();
        notify()->success('Data kegiatan diperbarui');
        return redirect()->route('kegiatan');
    }
}
