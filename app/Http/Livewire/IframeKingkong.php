<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class IframeKingkong extends Component
{
    public $return_value = [];

    public function mount()
    {
        $this->getLive();
    }

    public function getLive()
    {
        set_time_limit(0);
        date_default_timezone_set("Asia/Bangkok");


        $ch = curl_init();


        curl_setopt($ch, CURLOPT_URL, "https://kingkongpools.com");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);
        curl_close($ch);

        $pecah1 = explode('<img src="/image/', $html);
        $pecah2 = explode('<div class="result-date">', $html);
        $pecah3 = explode(' <span>', $pecah2[1]);
        $day = substr($pecah3[0], 0, 3);
        $lower = Str::lower($day);
        $rest = substr($pecah3[0], 3);


        switch ($lower) {
            case 'mon':
                $replace = str_replace("mon", "Senin", $lower);
                break;

            case 'tue':
                $replace = str_replace("tue", "Selasa", $lower);
                break;

            case 'wed':
                $replace = str_replace("wed", "Rabu", $lower);
                break;

            case 'thu':
                $replace = str_replace("thu", "Kamis", $lower);
                break;

            case 'fri':
                $replace = str_replace("fri", "Jumat", $lower);
                break;

            case 'sat':
                $replace = str_replace("sat", "Sabtu", $lower);
                break;

            case 'sun':
                $replace = str_replace("sun", "Minggu", $lower);
                break;

            default:
                # code...
                break;
        }

        $first_digit = substr($pecah1[5], 0, 1);
        $second_digit = substr($pecah1[6], 0, 1);
        $third_digit = substr($pecah1[7], 0, 1);
        $fourth_digit = substr($pecah1[8], 0, 1);

        $last_result = "$replace$rest";

        $this->return_value = [
            'first_digit' => $first_digit,
            'second_digit' => $second_digit,
            'third_digit' => $third_digit,
            'fourth_digit' => $fourth_digit,
            'last_result' => $last_result,
        ];
    }

    public function render()
    {
        return view('livewire.iframe-kingkong', $this->return_value);
    }
}
