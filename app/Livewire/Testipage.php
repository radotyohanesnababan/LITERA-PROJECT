<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testi;

class Testipage extends Component
{
    public $testi = [];
    public $filteredTesti = [];
    public $currentTesti;
    public $modalVisible = false;
    public $searchName = '';
    

    
    //crud-logic
    public function search(){
        $this->filteredTesti = Testi::where('nama', 'like', '%' . $this->searchName . '%')->get();
        //dd($this->filteredTesti);
    }
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
        $this->filteredTesti = $this->testi;
    }

    

    public function render()
    {
        return view('livewire.testipage')->layout('layouts.app');
    }
}
