<?php

namespace App\Http\Livewire\Data;

use Livewire\Component;

class Sydney extends Component
{
    public $iframe_table;

    public function mount()
    {
        $konten = file_get_contents("https://livetogelresmi.net/data-sdy");
        $pecah1 = explode('<div class="tabel tabel-data text-center">', $konten);
        $pecah2 = explode("</table>", $pecah1[1]);
        $pecah3 = explode('<table class="mx-auto">', $pecah2[0]);

        $this->iframe_table = $pecah3[1];
    }

    public function render()
    {
        return view('livewire.data.sydney');
    }
}
