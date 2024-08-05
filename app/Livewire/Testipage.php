<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testi;

class Testipage extends Component
{
    public $testi = [];
    public $currentTesti;
    public $modalVisible = false;

    //crud-logic

    public function deleteTesti()
    {
       if($this->currentTesti){
           $this->currentTesti->delete();
           $this->hideModal();
       }
       notify()->success('Data testimoni dihapus');
       return redirect()->route('testi');
    }

    public function showModal($id){
        $this->currentTesti = Testi::find($id);
        $this->modalVisible = true;
    }

    public function hideModal(){
        $this->modalVisible = false;
    }

    public function mount(){
        $this->testi = Testi::all();
    }

    

    public function render()
    {
        return view('livewire.testipage')->layout('layouts.app');
    }
}
