<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profil;


class SummernoteEditor extends Component
{
    public $summernoteId;
    public $profil;
    public $content;
    public $field;

    public function mount($profil_id = 1, $field = 'artinama', $summernoteId = 'summernote')
    {
        $this->profil = Profil::findOrFail($profil_id);
        $this->field = $field;
        $this->content = $this->profil->{$field};
        $this->summernoteId = $summernoteId;
        
    }
    public function updatedContent($value)
    {

        $this->profil->{$this->field} = $value;
        $this->profil->save();
        
    }

    public function updatedActivePage()
    {
        $this->emit('initializeSummernote');
        $this->emit('refreshSummernote');
        
    }

    public function render()

    {
        return view('livewire.summernote-editor');
    }
}
