<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class IframeSgpToto extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveSingapore();
    }

    public function liveSingapore()
    {
        $data_singapore_toto =\App\Models\Singapore::where("is_toto", true)->latest()->first();

        // Toto Singapore Result
        $sgp_toto_last_result = Carbon::parse($data_singapore_toto->date)->isoFormat("dddd, D MMMM YYYY");

        $result_array = [];

        $sgp_toto_winning_number1 = $data_singapore_toto->winning_number_1;
        $sgp_toto_winning_number2 = $data_singapore_toto->winning_number_2;
        $sgp_toto_winning_number3 = $data_singapore_toto->winning_number_3;
        $sgp_toto_winning_number4 = $data_singapore_toto->winning_number_4;
        $sgp_toto_winning_number5 = $data_singapore_toto->winning_number_5;
        $sgp_toto_winning_number6 = $data_singapore_toto->winning_number_6;
        // if ($checking < 10) {
        //     $sgp_toto_additional_number = "0" . strval($checking);
        // } else {
        //     $sgp_toto_additional_number = $checking;
        // }

        $sgp_toto_additional_number = $data_singapore_toto->additional_number;

        $sgp_toto_result = $data_singapore_toto->first_prize;

        $this->return_value = [
            "sgp_toto_last_result" => $sgp_toto_last_result,
            "sgp_toto_winning_number1" => $sgp_toto_winning_number1,
            "sgp_toto_winning_number2" => $sgp_toto_winning_number2,
            "sgp_toto_winning_number3" => $sgp_toto_winning_number3,
            "sgp_toto_winning_number4" => $sgp_toto_winning_number4,
            "sgp_toto_winning_number5" => $sgp_toto_winning_number5,
            "sgp_toto_winning_number6" => $sgp_toto_winning_number6,
            "sgp_toto_additional_number" => $sgp_toto_additional_number,
            "sgp_toto_result" => $sgp_toto_result,
        ];
    }

    public function render()
    {
        return view('livewire.iframe-sgp-toto', $this->return_value);
    }
}
