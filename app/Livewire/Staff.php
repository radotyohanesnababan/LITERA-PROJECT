<?php

namespace App\Livewire;

use Livewire\Component;

class Staff extends Component
{
    public $activePage = 'management-table';

    public function switchPage($page)
    {
        $this->activePage = $page;
    }
    public function render()
    {
        return view('livewire.staff')->layout('layouts.app');
    }
}
