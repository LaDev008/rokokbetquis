<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PredictMarket;

class PredictCardHome extends Component
{

    public $search = '';
    protected $queryString = ['search' => ['except' => '']];
    public $market = '';

    public function loadMarket(PredictMarket $market)
    {
        $this->market = $market;
    }


    public function render()
    {
        return view('livewire.predict-card-home', [
            'predicts' => PredictMarket::where('name', 'LIKE', '%' . $this->search . "%")->get(),
        ]);
    }
}
