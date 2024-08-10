<?php

namespace App\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;

class Editkegiatan extends Component
{   
    public $kegiatan;

    public function mount($id){
        $this->kegiatan = Kegiatan::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.editkegiatan')->layout('layouts.app');
    }
}
