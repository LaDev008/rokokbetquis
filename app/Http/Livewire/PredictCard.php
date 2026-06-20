<?php

namespace App\Http\Livewire;

use App\Models\PredictMarket;
use Livewire\Component;

class PredictCard extends Component
{
    public $search = '';
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.predict-card', [
            'predicts' => PredictMarket::where('name', 'LIKE', '%' . $this->search . "%")->get(),
        ]);
    }
}
