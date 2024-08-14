<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profil;

class Profilpage extends Component
{
    public $profil = 1;
    public $profil_id = 1;
    public $artinama;
    public $sejarah;
    public $visi;
    public $misi;
    public $unggulan;
    public $instagram_link;
    public $whatsapp_link;
    public $alamat;

    public $activePage = 'artinama-table';

    public function mount()
    {
        $this->profil_id = 1;
        $this->artinama = Profil::find($this->profil_id)->artinama;
        $this->sejarah = Profil::find($this->profil_id)->sejarah;
        $this->visi = Profil::find($this->profil_id)->visi;
        $this->misi = Profil::find($this->profil_id)->misi;
        $this->unggulan = Profil::find($this->profil_id)->unggulan;
        $this->instagram_link = Profil::find($this->profil_id)->instagram_link;
        $this->whatsapp_link = Profil::find($this->profil_id)->whatsapp_link;
        $this->alamat = Profil::find($this->profil_id)->alamat;
        $this->profil = Profil::first();
    }
    public function updateArtinama()
    {

        $this->validate([
            'artinama' => 'required|string',
        ]);

        $profil = Profil::find($this->profil_id);
        $profil->artinama = $this->artinama;
        $profil->save();
        notify()->success('Data artinama diubah');
        

        return redirect()->route('profil');
    }
    public function updateSejarah()
    {
        $this->validate([
            'sejarah' => 'required|string',
        ]);

        $profil = Profil::find($this->profil_id);
        $profil->sejarah = $this->sejarah;
        $profil->save();
        notify()->success('Data sejarah diubah');

        return redirect()->route('profil');
    }
    public function updateVisimisi()
    {
        $this->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $profil = Profil::find($this->profil_id);

        $profil->visi = $this->visi;
        $profil->misi = $this->misi;
        $profil->save();
        notify()->success('Data visi misi diubah');

        return redirect()->route('profil');
    }
    public function updateSocialMedia()
    {
        $this->validate([
            'instagram_link' => 'required|string',
            'whatsapp_link' => 'required|string',
        ]);

        $profil = Profil::find($this->profil_id);
        $profil->instagram_link = $this->instagram_link;
        $profil->whatsapp_link = $this->whatsapp_link;
        $profil->save();
        notify()->success('Data sosial media diubah');

        return redirect()->route('profil');
    }
    public function updateUnggulan()
    {
        $this->validate([
            'unggulan' => 'required|string',
        ]);

        $profil = Profil::find($this->profil_id);
        $profil->unggulan = $this->unggulan;
        $profil->save();
        notify()->success('Data program unggulan diubah');

        return redirect()->route('profil');
    }
    public function updateAlamat()
    {
        $this->validate([
            'alamat' => 'required|string',
        ]);

        $profil = Profil::find($this->profil_id);
        $profil->alamat = $this->alamat;
        $profil->save();
        notify()->success('Data alamat diubah');

        return redirect()->route('profil');
    }

    public function fetchProfil()
    {
        $this->profil = Profil::first();
    }
    public function render()
    {
        return view('livewire.profilpage')->layout('layouts.app');
    }
    public function switchPage($page)
    {
        $this->activePage = $page;
       
    }
}
