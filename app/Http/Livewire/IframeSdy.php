<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class IframeSdy extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveSydney();
    }

    public function liveSydney()
    {
        $sydney = \App\Models\Sydney::latest()->first();
        $sdy_last_result = Carbon::parse($sydney->date)->isoFormat("dddd, D MMMM YYYY");
        $sdy_p1 = $sydney->first_result;
        $sdy_p2 = $sydney->second_result;
        $sdy_p3 = $sydney->third_result;

        // Variable == Integer ??
        if (!intval($sdy_p1)) {
            $sdy_p1 = "-";
        }
        if (!intval($sdy_p2)) {
            $sdy_p2 = "-";
        }
        if (!intval($sdy_p3)) {
            $sdy_p3 = "-";
        }

        $this->return_value = [
            "sdy_last_result" => $sdy_last_result,
            "sdy_p1" => $sdy_p1,
            "sdy_p2" => $sdy_p2,
            "sdy_p3" => $sdy_p3,
        ];
    }

    public function render()
    {
        return view('livewire.iframe-sdy', $this->return_value);
    }
}
