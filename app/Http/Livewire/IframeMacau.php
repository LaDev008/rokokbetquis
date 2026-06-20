<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class IframeMacau extends Component
{

    public $return_value = [];

    public function mount()
    {
        $this->liveFeed();
    }


    public function liveFeed()
    {
        set_time_limit(0);
        date_default_timezone_set("Asia/Bangkok");

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://maintogelsgp.com/livedraw/toto-macau");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);

        curl_close($ch);

        $split1 = explode('<tbody>', $html);
        $title_split1 = explode('<div class="fw-bold">', $split1[1]);
        $title_split2 = explode('</div>', $title_split1[1]);
        $title = $title_split2[0];

        $split2 = explode('<tr>', $split1[1]);
        $split3 = explode('</tr>', $split2[3]);
        $split4 = explode('<td>', $split3[0]);
        $result[1] = intval(substr($split4[1], 0, 4));
        $result[2] = intval(substr($split4[2], 0, 4));
        $result[3] = intval(substr($split4[3], 0, 4));
        $result[4] = intval(substr($split4[4], 0, 4));
        $result[5] = intval(substr($split4[5], 0, 4));
        $result[6] = intval(substr($split4[6], 0, 4));


        foreach (range(1, 6) as $item) {

            if (Str::length($result[$item]) == 3) {
                $result[$item] = "0$result[$item]";
            }
        }


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
        return view('livewire.iframe-macau', $this->return_value);
    }
}
