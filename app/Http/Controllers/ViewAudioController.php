<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Profil;
use App\Models\Galeri;
class ViewAudioController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Audio Visual Learning')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.audio', compact('galeri', 'profil' ));
    }
}
