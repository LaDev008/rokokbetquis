<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Tools extends Component
{
    public $show_menu = false;

    public function toggleMenu()
    {
        $this->show_menu = !$this->show_menu;
    }



    public function render()
    {
        return view('livewire.component.tools');
    }
}
