<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Profil;

class ViewProfileController extends Controller
{
    public function index(){
        //staffmgmt
        $staffmgmt = Staff::where('posisi', 'Management')->get();
        //stafftentor
        $stafftentor = Staff::where('posisi', 'Tenaga Tutor')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.profile', compact('profil', 'staffmgmt', 'stafftentor' ));
    }
}
