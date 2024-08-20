<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Galeri;

class Galeripage extends Component
{
    

    public $searchtermprak = '';
    public $searchtermoutbond = '';
    public $searchtermbukapuasa = '';
    public $searchtermoutdoor = '';
    public $searchtermreguler= '';
    public $searchtermaudio ='';
    public $searchtermflash ='';

    public $modalVisible = false;
    public $currentfoto;
    public $foto = [];

    public $filteredprak = [];
    public $filteredoutbond = [];
    public $filteredbukapuasa = [];
    public $filteredoutdoor = [];
    public $filteredreguler = [];
    public $filteredaudio = [];
    public $filteredflash = [];

    public $fotooutbond = [];
    public $fotobukapuasa = [];
    public $fotoprak = [];
    public $fotooutdoor =[];
    public $fotoreguler =[];
    public $fotoaudio =[];
    public $fotoflash =[];

    public $activePage = 'prak-table';

    public function mount()
    
    {
        $this->fotooutbond = Galeri::where('kategori', 'Outbond')->get();
        $this->fotobukapuasa = Galeri::where('kategori', 'Buka Puasa')->get();
        $this->fotoprak = Galeri::where('kategori', 'Kelas Praktek')->get();
        $this->fotoflash = Galeri::where('kategori', 'Flash Card Learning')->get();
        $this->fotoreguler = Galeri::where('kategori', 'Reguler Learning')->get();
        $this->fotooutdoor = Galeri::where('kategori', 'Outdoor Learning')->get();
        $this->fotoaudio = Galeri::where('kategori', 'Audio Visual Learning')->get();
        $this->filteredbukapuasa = $this->fotobukapuasa;
        $this->filteredprak = $this->fotoprak;
        $this->filteredoutbond = $this->fotooutbond;
        $this->filteredaudio = $this->fotoaudio;
        $this->filteredreguler = $this->fotoreguler;
        $this->filteredflash= $this->fotoflash;
        $this->filteredoutdoor = $this->fotooutdoor;
        
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
    public function searchoutdoor()
    {  
        $this->filteredoutdoor = Galeri::where('kategori', 'Outdoor Learning')
            ->where('id', 'like', '%' . $this->searchtermoutdoor . '%')
            ->get(); 
    }
    public function searchaudio()
    {  
        $this->filteredaudio = Galeri::where('kategori', 'Audio Visual Learning')
            ->where('id', 'like', '%' . $this->searchtermaudio . '%')
            ->get(); 
    }
    public function searchflash()
    {  
        $this->filteredflash = Galeri::where('kategori', 'Flash Card Learning')
            ->where('id', 'like', '%' . $this->searchtermflash . '%')
            ->get(); 
    }

    public function searchreguler()
    {  
        $this->filteredreguler = Galeri::where('kategori', 'Reguler Learning')
            ->where('id', 'like', '%' . $this->searchtermreguler . '%')
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
