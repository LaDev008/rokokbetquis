<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Flash extends Component
{
    public $status, $message;

    public function render()
    {
        return view('livewire.components.flash');
    }
}
