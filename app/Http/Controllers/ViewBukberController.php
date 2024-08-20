<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Profil;

class ViewBukberController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Buka Puasa')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.bukber', compact('galeri', 'profil' ));
    }
}
