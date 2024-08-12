<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Program;
use App\Models\Profil;
use App\Models\Testi;
use App\Models\Metode;

class ViewAboutController extends Controller
{
    public function index(){
        //kegiatan
        $kegiatan = Kegiatan::all();

        //profil
        $profil = Profil::first();

        //dd($kegiatan);

        return view('userview.about', compact('kegiatan', 'profil', ));
    }

    
}
