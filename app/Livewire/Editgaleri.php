<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Galeri;

class Editgaleri extends Component
{
    public $galeri;

    public function mount($id){
        $this->galeri = Galeri::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.editgaleri')->layout('layouts.app');
    }
}
