<?php

namespace App\Http\Livewire\Livedraw;

use Carbon\Carbon;
use Livewire\Component;

class Hongkong extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveHongkong();
    }

    public function liveHongkong()
    {
        $data_hk = \App\Models\Hongkong::orderByDesc("date")->first();

        $hk_last_result = Carbon::parse($data_hk->date)->isoFormat("dddd, D MMMM YYYY");
;
        $hk_p1 = $data_hk->first_result;
        $hk_p2 = $data_hk->second_result;
        $hk_p3 = $data_hk->third_result;

        foreach (range(1, 3) as $numbers) {
            if (!intval(${"hk_p" . $numbers})) {
                ${"hk_p" . $numbers} = "-";
            };
        }

        $this->return_value = [
            "hk_last_result" => $hk_last_result,
            "hk_p1" => $hk_p1,
            "hk_p2" => $hk_p2,
            "hk_p3" => $hk_p3,
        ];
    }

    public function render()
    {
        return view('livewire.livedraw.hongkong', $this->return_value);
    }
}
