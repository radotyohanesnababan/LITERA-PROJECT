<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Profil;

class ViewProfileController extends Controller
{
    public function index(){
        $staffmga = Staff::where('posisi', 'Management')->get();
        $priority = ['Manager', 'Administrator', 'Akademik', 'Logistik'];
        //staffmgmt
        $staffmgmt = $staffmga->sortBy(function ($item) use ($priority) {
            $index = array_search($item->sub_posisi, $priority);
            return $index !== false ? $index : count($priority);
        })->values();
        //stafftentor
        $stafftentor = Staff::where('posisi', 'Tenaga Tutor')->get();

        //dd($kegiatan);
        $profil = Profil::first();


        return view('userview.profile', compact('profil', 'staffmgmt', 'stafftentor' ));
    }
}
