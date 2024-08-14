<?php

namespace App\Livewire;
use Livewire\Component;

class TinymceEditor extends Component
{   
    public $content;
    public $editorId;
    
    public function mount($content='', $editorId='editor'){
        
        $this->content = $content;
        $this->editorId = $editorId;
    }

    public function render()
    {
        return view('livewire.tinymce-editor');
    }
}
