<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Profil;

class ViewPraktekController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Kelas Praktek')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.praktek', compact('galeri', 'profil' ));
    }
}
