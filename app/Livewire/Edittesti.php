<?php

namespace App\Livewire;

use App\Models\Testi;
use Livewire\Component;

class Edittesti extends Component
{   
    public $testi;
    public function mount($id){
        $this->testi = Testi::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.edittesti')->layout('layouts.app');
    }
}
