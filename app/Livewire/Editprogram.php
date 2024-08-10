<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;

class Editprogram extends Component
{   public $program;
    public function mount($id){
        $this->program = Program::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.editprogram')->layout('layouts.app');
    }
}
