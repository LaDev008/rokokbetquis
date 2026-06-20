<?php

namespace App\Http\Livewire\Data;

use Livewire\Component;

class Macau extends Component
{
    public $table_content;

    public function mount()
    {
        $this->loadMacau();
    }

    public function loadMacau()
    {
        set_time_limit(0);
        date_default_timezone_set("Asia/Bangkok");

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://64.227.159.185/data-macau/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);
        curl_close($ch);
        $split1 = explode('<tbody>', $html);
        $split2 = explode('</tbody>', $split1[2]);
        $this->table_content = $split2[0];
    }

    public function render()
    {
        return view('livewire.data.macau');
    }
}
