<?php

namespace App\Livewire;

use App\Models\Staff;

use Debugbar;
use Livewire\Component;

use function Termwind\render;

class Staffpage extends Component
{
    public $searchtermmgmt = '';
    public $searchtermtentor = '';
    public $modalVisiblemgmt = false;
    public $modalVisibletentor = false;
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
    public function showModal($id, $type)
    {
        $this->currentStaff = Staff::find($id);

    if ($type === 'mgmt') {
        $this->modalVisiblemgmt = true;
        $this->modalVisibletentor = false;  
    } elseif ($type === 'tentor') {
        $this->modalVisibletentor = true;
        $this->modalVisiblemgmt = false;  
    }
    //dump($this->modalVisiblemgmt);
        Debugbar::info('Modal Visible (mgmt)', $this->modalVisiblemgmt);
        Debugbar::info('Modal Visible (tentor)', $this->modalVisibletentor);
    }

    public function hideModal()
    {
        $this->modalVisiblemgmt = false;
        $this->modalVisibletentor = false;

        Debugbar::info('Modal Visible (mgmt)', $this->modalVisiblemgmt);
        Debugbar::info('Modal Visible (tentor)', $this->modalVisibletentor);
    }

    public function switchPage($page)
    {
        $this->activePage = $page;
        $this->hideModal();
    }
    public function render()
    {
        return view('livewire.staff')->layout('layouts.app');
    }
}
