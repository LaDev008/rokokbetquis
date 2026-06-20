<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NavLink extends Component
{
    public $route, $name, $routeProp = null;

    public function render()
    {
        return view('livewire.admin.nav-link');
    }
}
