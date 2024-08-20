<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Profil;

class ViewOutbondController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Outbond')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.outbond', compact('galeri', 'profil' ));
    }
}
