<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function addProgram(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'sekolah' => 'required|string|max:255',
            
        ]);


        $program = new Program();
        $program->deskripsi = $request->deskripsi;
        $program->sekolah = $request->sekolah;
        $program->save();
        notify()->success('Data program ditambahkan');
        return redirect()->route('program');
    }


    public function editProgram(Request $request, $id)
    {
        // dd($request->all());

        $program = Program::findOrFail($id);

        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'sekolah' => 'required|string|max:255',
            
        ]);
        
        $program->deskripsi = $request->deskripsi;
        $program->sekolah = $request->sekolah;
        $program->save();
        notify()->Success('Data program diperbarui');
        return redirect()->route('program');
    }
}
