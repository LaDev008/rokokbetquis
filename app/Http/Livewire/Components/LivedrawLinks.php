<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class LivedrawLinks extends Component
{
    public $first = "";
    public $second = "";
    public $third = "";
    public $fourth = "";
    public function render()
    {
        return view('livewire.components.livedraw-links');
    }
}
