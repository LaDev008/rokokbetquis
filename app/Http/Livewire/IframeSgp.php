<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class IframeSgp extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveSingapore();
    }

    public function liveSingapore()
    {
        $data_singapore_4d = \App\Models\Singapore::where("is_toto", false)->latest()->first();
        $sgp_4D_last_result = Carbon::parse($data_singapore_4d->date)->isoFormat("dddd, D MMMM YYYY");

        // 4D Lottery Results
        $sgp_p1 = $data_singapore_4d->first_prize;
        $sgp_p2 = $data_singapore_4d->second_prize;
        $sgp_p3 = $data_singapore_4d->third_prize;
        $sgp_starter1 = $data_singapore_4d->starter_1;
        $sgp_starter2 = $data_singapore_4d->starter_2;
        $sgp_consolation1 = $data_singapore_4d->consolation_1;
        $sgp_consolation2 = $data_singapore_4d->consolation_2;
        $sgp_starter3 = $data_singapore_4d->starter_3;
        $sgp_starter4 = $data_singapore_4d->starter_4;
        $sgp_consolation3 = $data_singapore_4d->consolation_3;
        $sgp_consolation4 = $data_singapore_4d->consolation_4;
        $sgp_starter5 = $data_singapore_4d->starter_5;
        $sgp_starter6 = $data_singapore_4d->starter_6;
        $sgp_consolation5 = $data_singapore_4d->consolation_5;
        $sgp_consolation6 = $data_singapore_4d->consolation_6;
        $sgp_starter7 = $data_singapore_4d->starter_7;
        $sgp_starter8 = $data_singapore_4d->starter_8;
        $sgp_consolation7 = $data_singapore_4d->consolation_7;
        $sgp_consolation8 = $data_singapore_4d->consolation_8;
        $sgp_starter9 = $data_singapore_4d->starter_9;
        $sgp_starter10 = $data_singapore_4d->starter_10;
        $sgp_consolation9 = $data_singapore_4d->consolation_9;
        $sgp_consolation10 = $data_singapore_4d->consolation_10;
        // End Of Singapore Pools 4D

        // $clearWhiteSpace = preg_replace('/\s+/', '', $sgp_consolation3);


        // Satpam Nomor
        foreach (range(1, 3) as $numbers) {
            if (intval(${"sgp_p" . $numbers}) < 99) {
                ${"sgp_p" . $numbers} = "-";
            } else if (Str::length(preg_replace('/\s+/', '', ${"sgp_p" . $numbers})) == 3) {
                ${"sgp_p" . $numbers} = "0" . ${'sgp_p' . $numbers};
            };
        }
        foreach (range(1, 10) as $numbers) {
            if (!intval(${"sgp_starter" . $numbers})) {
                ${"sgp_starter" . $numbers} = "-";
            } else if (Str::length(preg_replace('/\s+/', '', ${"sgp_starter" . $numbers})) == 3) {
                ${"sgp_starter" . $numbers} = "0" . ${"sgp_starter" . $numbers};
            };
        }
        foreach (range(1, 10) as $numbers) {
            if (!intval(${"sgp_consolation" . $numbers})) {
                ${"sgp_consolation" . $numbers} = "-";
            } else if (Str::length(preg_replace('/\s+/', '', ${"sgp_consolation" . $numbers})) == 3) {
                ${"sgp_consolation" . $numbers} = "0" . ${"sgp_consolation" . $numbers};
            };
        }


        $this->return_value = [
            "sgp_4d_last_result" => $sgp_4D_last_result,
            "sgp_p1" => $sgp_p1,
            "sgp_p2" => $sgp_p2,
            "sgp_p3" => $sgp_p3,
            "sgp_starter1" => $sgp_starter1,
            "sgp_starter2" => $sgp_starter2,
            "sgp_starter3" => $sgp_starter3,
            "sgp_starter4" => $sgp_starter4,
            "sgp_starter5" => $sgp_starter5,
            "sgp_starter6" => $sgp_starter6,
            "sgp_starter7" => $sgp_starter7,
            "sgp_starter8" => $sgp_starter8,
            "sgp_starter9" => $sgp_starter9,
            "sgp_starter10" => $sgp_starter10,
            "sgp_consolation1" => $sgp_consolation1,
            "sgp_consolation2" => $sgp_consolation2,
            "sgp_consolation3" => $sgp_consolation3,
            "sgp_consolation4" => $sgp_consolation4,
            "sgp_consolation5" => $sgp_consolation5,
            "sgp_consolation6" => $sgp_consolation6,
            "sgp_consolation7" => $sgp_consolation7,
            "sgp_consolation8" => $sgp_consolation8,
            "sgp_consolation9" => $sgp_consolation9,
            "sgp_consolation10" => $sgp_consolation10,
        ];
    }

    public function render()
    {
        return view('livewire.iframe-sgp', $this->return_value);
    }
}
