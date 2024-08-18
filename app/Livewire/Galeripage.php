<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Galeri;

class Galeripage extends Component
{
    

    public $searchtermprak = '';
    public $searchtermoutbond = '';
    public $searchtermbukapuasa = '';

    public $modalVisible = false;
    public $currentfoto;
    public $foto = [];

    public $filteredprak = [];
    public $filteredoutbond = [];
    public $filteredbukapuasa = [];

    public $fotooutbond = [];
    public $fotobukapuasa = [];
    public $fotoprak = [];

    public $activePage = 'prak-table';

    public function mount()
    
    {
        $this->fotooutbond = Galeri::where('kategori', 'Outbond')->get();
        $this->fotobukapuasa = Galeri::where('kategori', 'Buka Puasa')->get();
        $this->fotoprak = Galeri::where('kategori', 'Kelas Praktek')->get();
        $this->filteredbukapuasa = $this->fotobukapuasa;
        $this->filteredprak = $this->fotoprak;
        $this->filteredoutbond = $this->fotooutbond;
        
    }

    public function searchprak()
    {  
        $this->filteredprak = Galeri::where('kategori', 'Kelas Praktek')
            ->where('id', 'like', '%' . $this->searchtermprak . '%')
            ->get(); 
    }
    public function searchoutbond()
    {  
        $this->filteredoutbond = Galeri::where('kategori', 'Outbond')
            ->where('id', 'like', '%' . $this->searchtermoutbond . '%')
            ->get(); 
    }
    public function searchbukapuasa()
    {  
        $this->filteredbukapuasa = Galeri::where('kategori', 'Buka Puasa')
            ->where('id', 'like', '%' . $this->searchtermbukapuasa . '%')
            ->get(); 
    }


    //crud-logic
    public function deleteFoto()
    {
        if ($this->currentfoto) {
            $this->currentfoto->delete();
            $this->hideModal();
        }
        notify()->success('Data foto dihapus');
        return redirect()->route('galeri');
    }

    public function showModal($id)
    {
        $this->currentfoto = Galeri::find($id);
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
        return view('livewire.galeripage')->layout('layouts.app');
    }
}
