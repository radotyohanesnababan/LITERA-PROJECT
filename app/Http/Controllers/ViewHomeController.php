<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Program;
use App\Models\Profil;
use App\Models\Testi;
use App\Models\Metode;

class ViewHomeController extends Controller
{
    public function index(){
        //kegiatan
        $kegiatan = Kegiatan::all();

        //program
        $programSMP = Program::where('sekolah', 'SMP')->get();
        $programSMA = Program::where('sekolah', 'SMA')->get();


        //profil
        $profil = Profil::first();

        //testimoni
        $testi = Testi::all();

        //metode
        $metode = Metode::all();


        //dd($kegiatan);

        return view('userview.home', compact('kegiatan', 'programSMP', 'programSMA', 'profil', 'testi', 'metode'));
    }

    
}
