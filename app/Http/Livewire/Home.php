<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $sydney, $singapore, $hongkong, $singapore_toto;

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.home');
    }
}
