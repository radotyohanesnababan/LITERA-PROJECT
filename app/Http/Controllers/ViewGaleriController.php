<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Profil;


class ViewGaleriController extends Controller
{
    public function index(){
        //profil
        $profil = Profil::first();

        //dd($kegiatan);

        return view('userview.galeri', compact('profil' ));
    }
}
