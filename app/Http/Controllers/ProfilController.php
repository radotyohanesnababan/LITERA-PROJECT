<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function editProfil(Request $request, $id)
    {
        //  dd($request->all());

        $profil = Profil::findOrFail($id);

        $request->validate([
            'artinama' => 'required|string|max:255',
            'sejarah' => 'required|string|max:255',
            'visimisi' => 'required|string|max:255',
            'unggulan' => 'required|string|max:255',
            'instagram_link' => 'required|string|max:255',
            'whatsapp_link' => 'required|string|max:255',
            'alamat'=> 'required|string|max:255',

        ]);
        $profil->artinama = $request->artinama;
        $profil->sejarah = $request->sejarah;
        $profil->visimisi = $request->visimisi;
        $profil->unggulan = $request->unggulan;
        $profil->instagram_link = $request->instagram_link;
        $profil->whatsapp_link = $request->whatsapp_link;
        $profil->alamat = $request->alamat;
        $profil->save();
        notify()->Success('Data profil diperbarui');
        return redirect()->route('profil');
    }
}
