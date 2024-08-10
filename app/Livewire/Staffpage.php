<?php

namespace App\Livewire;

use App\Models\Staff;

use Livewire\Component;

use function Termwind\render;

class Staffpage extends Component
{
    public $searchtermmgmt = '';
    public $searchtermtentor = '';
    public $modalVisible = false;
    public $currentStaff;
    public $staff = [];
    public $filteredStaffmgmt = [];
    public $filteredStafftentor= [];
    public $staffmgmt = [];
    public $stafftentor = [];
    public $activePage = 'management-table';

    public function mount()
    
    {
        $this->staffmgmt = Staff::where('posisi', 'Management')->get();
        $this->stafftentor = Staff::where('posisi', 'Tenaga Tutor')->get();
        $this->filteredStaffmgmt = $this->staffmgmt;
        $this->filteredStafftentor = $this->stafftentor;
        
    }

    public function searchmgmt()
    {   
        $this->filteredStaffmgmt = Staff::where('posisi', 'Management')
            ->where('nama', 'like', '%' . $this->searchtermmgmt . '%')
            ->get();
        
    }


    public function searchtentor()
    {
        $this->filteredStafftentor = Staff::where('posisi', 'Tenaga Tutor')
            ->where('nama', 'like', '%' . $this->searchtermtentor . '%')
            ->get();
        // dd($this->filteredStafftentor);
    }

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
    public function showModal($id)
    {
        $this->currentStaff = Staff::find($id);
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
        return view('livewire.staff')->layout('layouts.app');
    }
}
