<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Metode;

class Editmetode extends Component
{   
    public $metode;

    public function mount($id){
        $this->metode = Metode::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.editmetode')->layout('layouts.app');
    }
}
