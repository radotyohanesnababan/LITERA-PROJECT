<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profil;

class Profilpage extends Component
{
    public $profil;
    public function mount(){
        $this->profil = Profil::first();
    }
    public function render()
    {
        return view('livewire.profilpage')->layout('layouts.app');
    }
}
