<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Profil;

class ViewFlashcardController extends Controller
{
    public function index(){
        
 
        $galeri = Galeri::where('Kategori', 'Flash Card Learning')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.flashcard', compact('galeri', 'profil' ));
    }
}
