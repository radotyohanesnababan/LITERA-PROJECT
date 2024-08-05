<?php

namespace App\Livewire;
use App\Models\Staff;

use Livewire\Component;

use function Termwind\render;

class Staffpage extends Component
{   
    public $modalVisible = false;
    public $currentStaff;
    public $staff = [];
    public $staffmgmt = [];
    public $stafftentor =[];
    public $activePage = 'management-table';

    //crud-logic
    public function deleteStaff()
    {
        if ($this->currentStaff) {
            $this->currentStaff->delete();
            $this->hideModal();
        }
        notify()->success('Data staff dihapus');
        return redirect()->route('staff');
    }
    public function showModal($id){
        $this->currentStaff = Staff::find($id);
        $this->modalVisible = true;
    }

    public function hideModal(){
        $this->modalVisible = false;
    }


    public function mount(){
        $this->indexmgmt();
        $this->indextentor();
    }
    public function indexmgmt(){
        $this->staffmgmt = Staff::where('posisi', 'Management')->get();

    }
    public function indextentor(){
        $this->stafftentor = Staff::where('posisi', 'Tenaga Tutor')->get();
    }
    
    public function switchPage($page)
    {
        $this->activePage = $page;
    }
    public function render()
    {
        return view('livewire.staff')->layout('layouts.app');
    }
}
