<?php

namespace App\Http\Livewire\Iframe;

use App\Models\PredictMarket;
use Livewire\Component;
use Illuminate\Http\Request;

class Prediksi extends Component
{
    public $query;
    public $market;

    public function mount() {

        $this->market = PredictMarket::where("slug", $this->query)->first();
    }

    public function render()
    {
        return view('livewire.iframe.prediksi');
    }
}
