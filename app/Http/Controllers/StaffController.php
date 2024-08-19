<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{


    public function addStaff(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'sub_posisi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $fotoname);
        }

        $staff = new Staff();
        $staff->nama = $request->nama;
        $staff->posisi = $request->posisi;
        $staff->sub_posisi = $request->sub_posisi;
        $staff->foto = $fotoname;
        $staff->save();
        notify()->success('Data staff ditambahkan');
        return redirect()->route('staff');
    }


    public function editStaff(Request $request, $id)
    {
        // dd($request->all());

        $staff = Staff::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'sub_posisi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $fotoname = $staff->foto;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/foto', $fotoname);
        }
        $staff->nama = $request->nama;
        $staff->posisi = $request->posisi;
        $staff->sub_posisi = $request->sub_posisi;
        $staff->foto = $fotoname;
        $staff->save();
        notify()->Success('Data staff diperbarui');
        return redirect()->route('staff');
    }
}
