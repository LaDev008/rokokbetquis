<?php

namespace App\Http\Livewire\Livedraw;

use Carbon\Carbon;
use App\Models\Macau as MacauModel;
use Livewire\Component;
use Illuminate\Support\Str;

class Macau extends Component
{

    public $return_value = [];

    public function mount()
    {
        $this->liveFeed();
    }


    public function liveFeed()
    {
        $macau = MacauModel::orderByDesc("date")->first();

        $title = "LIVEDRAW TOTO MACAU 4D " . Carbon::parse($macau->date)->isoFormat("DD MMMM YYYY");

        $result[1] = $macau->result1;
        $result[2] = $macau->result2;
        $result[3] = $macau->result3;
        $result[4] = $macau->result4;
        $result[5] = $macau->result5;
        $result[6] = $macau->result6;


        $this->return_value = [
            "macau1" => $result[1],
            "macau2" => $result[2],
            "macau3" => $result[3],
            "macau4" => $result[4],
            "macau5" => $result[5],
            "macau6" => $result[6],
            "title" => $title,
        ];
    }

    public function render()
    {
        return view('livewire.livedraw.macau', $this->return_value);
    }
}
