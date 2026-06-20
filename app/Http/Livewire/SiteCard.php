<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SiteCard extends Component
{
    public $site;
    public $site_link;

    public function mount()
    {
        $pecah = explode('/', $this->site->link);

        $this->site_link = $pecah[2];
    }

    public function render()
    {
        return view('livewire.site-card');
    }
}
