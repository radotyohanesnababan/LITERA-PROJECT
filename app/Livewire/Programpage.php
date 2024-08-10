<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;

class Programpage extends Component
{
    public $searchtermsmp = '';
    public $searchtermsma = '';
    public $modalVisible = false;
    public $currentProgram;
    public $program = [];
    public $smp = [];
    public $sma = [];
    public $filteredsmp = [];
    public $filteredsma = [];
    public $activePage = 'smp-table';



    public function mount()

    {
        $this->smp = Program::where('sekolah', 'SMP')->get();
        $this->sma = Program::where('sekolah', 'SMA')->get();
        $this->filteredsmp = $this->smp;
        $this->filteredsma = $this->sma;
    }

    public function searchsmp()
    {
        $this->filteredsmp = Program::where('sekolah', 'SMP')
            ->where('nama', 'like', '%' . $this->searchtermsmp . '%')
            ->get();
    }

    public function searchsma()
    {
        $this->filteredsma = Program::where('sekolah', 'SMA')
            ->where('nama', 'like', '%' . $this->searchtermsma . '%')
            ->get();
    }
    //crud-logic
    public function deleteProgram()
    {
        if ($this->currentProgram) {
            $this->currentProgram->delete();
            $this->hideModal();
        }
        notify()->success('Data program dihapus');
        return redirect()->route('program');
    }
    public function showModal($id)
    {
        $this->currentProgram = Program::find($id);
        $this->modalVisible = true;
    }

    public function hideModal()
    {
        $this->modalVisible = false;
    }

    public function switchPage($page)
    {
        $this->activePage = $page;
    }
    public function render()
    {
        return view('livewire.programpage')->layout('layouts.app');
    }
}
