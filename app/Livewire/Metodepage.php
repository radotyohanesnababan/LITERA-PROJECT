<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Metode;

class Metodepage extends Component
{   
    public $metode = [];
    public $currentMetode;
    public $modalVisible = false;

    //crud-logic

    public function deleteMetode()
    {
       if($this->currentMetode){
           $this->currentMetode->delete();
           $this->hideModal();
       }
       notify()->success('Data metode dihapus');
       return redirect()->route('metode');
    }

    public function showModal($id){
        $this->currentMetode = Metode::find($id);
        $this->modalVisible = true;
    }

    public function hideModal(){
        $this->modalVisible = false;
    }

    public function mount(){
        $this->metode = Metode::all();
    }
    public function render()
    {
        return view('livewire.metodepage')->layout('layouts.app');
    }
}
