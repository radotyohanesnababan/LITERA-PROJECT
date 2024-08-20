<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Profil;


class ViewOutdoorController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Outdoor Learning')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.outdoor', compact('galeri', 'profil' ));
    }
}
