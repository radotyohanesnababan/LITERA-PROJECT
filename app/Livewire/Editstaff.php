<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Staff;

class Editstaff extends Component
{   
    public $staff;
    public function mount($id){
        $this->staff = Staff::findOrFail($id);
    }
    public function render()
    {
        
        return view('livewire.editstaff')->layout('layouts.app');
    }
}
