<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kegiatan;

class Kegiatanpage extends Component
{
    public $kegiatan = [];
    public $currentKegiatan;
    public $modalVisible = false;

    //crud-logic

    public function deleteKegiatan()
    {
       if($this->currentKegiatan){
           $this->currentKegiatan->delete();
           $this->hideModal();
       }
       notify()->success('Data kegiatan dihapus');
       return redirect()->route('kegiatan');
    }

    public function showModal($id){
        $this->currentKegiatan = Kegiatan::find($id);
        $this->modalVisible = true;
    }

    public function hideModal(){
        $this->modalVisible = false;
    }

    public function mount(){
        $this->kegiatan = Kegiatan::all();
    }

    

    public function render()
    {
        return view('livewire.kegiatanpage')->layout('layouts.app');
    }
}
