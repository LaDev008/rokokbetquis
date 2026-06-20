<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class FlashError extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.components.flash-error');
    }
}
