<?php

namespace App\Http\Livewire\Components;

use Carbon\Carbon;
use Livewire\Component;

class DateDisplay extends Component
{
    public $date;

    public function mount()
    {
        $this->now();
    }

    public function now()
    {
        $this->date = Carbon::now()->translatedFormat('d-m-Y, H:i:s');
    }

    public function render()
    {
        return view('livewire.components.date-display');
    }
}
