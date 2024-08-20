<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Profil;


class ViewRegulerController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Reguler Learning')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.reguler', compact('galeri', 'profil' ));
    }
}
