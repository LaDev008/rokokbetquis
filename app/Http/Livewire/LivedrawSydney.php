<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivedrawSydney extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->liveSydney();
    }

    public function liveSydney()
    {
        set_time_limit(0);
        date_default_timezone_set("Asia/Bangkok");


        $date = date("d F Y");
        $datecurl = date("d/m/Y");
        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://livedrawtogel.vip/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);
        curl_close($ch);

        $split1 = explode("Result Sydney Pools Terbaru</h5>", $html);
        $split2 = explode("</td>", $split1[1]);
        $split3 = explode("LIVE DRAW Sydney", $split2[0]);
        $split4 = explode(", ", $split3[1]);
        $sdy_last_result = $split4[1];

        // SDY Result
        $syd_p1 = substr($split2[2], -6, 6); //Prize 1
        $syd_p2 = substr($split2[4], -6, 6); // Prize 2
        $syd_p3 = substr($split2[6], -6, 6); // Prize 3
        $syd_starter = substr($split2[8], -6, 6); // Starter
        $syd_consolation = substr($split2[10], -6, 6); //Consolation

        // Variable == Integer ??
        if (!intval($syd_p1)) {
            $syd_p1 = "-";
        }
        if (!intval($syd_p2)) {
            $syd_p2 = "-";
        }
        if (!intval($syd_p3)) {
            $syd_p3 = "-";
        }
        if (!intval($syd_starter)) {
            $syd_starter = "-";
        }
        if (!intval($syd_consolation)) {
            $syd_consolation = "-";
        }

        $this->return_value = [
            "sdy_last_result" => $sdy_last_result,
            "sdy_p1" => $syd_p1,
            "sdy_p2" => $syd_p2,
            "sdy_p3" => $syd_p3,
            "sdy_starter" => $syd_starter,
            "sdy_consolation" => $syd_consolation,
        ];
    }

    public function render()
    {
        return view('livewire.livedraw-sydney');
    }
}
