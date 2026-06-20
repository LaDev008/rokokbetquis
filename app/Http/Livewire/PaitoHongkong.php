<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class PaitoHongkong extends Component
{
    public $page;

    public function mount() {
        $this->page = Page::find(1);
    }

    public function render()
    {
        return view('livewire.paito-hongkong');
    }
}
