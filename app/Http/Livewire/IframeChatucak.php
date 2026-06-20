<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class IframeChatucak extends Component
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


        curl_setopt($ch, CURLOPT_URL, "https://thailandpoolseveryday.com");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $html = curl_exec($ch);
        curl_close($ch);

        $pecah1 = explode('<h3 class="judul-subkolom Chatuchakpoolstoday" align="center">', $html);
        $pecah1_2 = explode("</h3>", $pecah1[1]);

        $pecah2 = explode('<div class="tanggal-home">Draw date: ', $pecah1[1]);
        $pecah2_2 = explode('</div>', $pecah2[1]);
        $pecah2_3 = explode(', ', $pecah2_2[0]);

        $pecah3 = explode('<span class="bola">', $pecah1[1]);

        $pecah4 = explode('<div class="bola">', $pecah1[1]);
        // dd($pecah4);

        $judul = $pecah1_2[0];
        $tanggal = Carbon::parse($pecah2_3[1])->translatedFormat("d F Y");
        $prize1 = substr($pecah3[1], 0, 4);
        $prize2 = substr($pecah3[2], 0, 4);
        $prize3 = substr($pecah3[3], 0, 4);
        $special1 = substr($pecah4[1], 0, 4);
        $special2 = substr($pecah4[2], 0, 4);
        $special3 = substr($pecah4[3], 0, 4);
        $special4 = substr($pecah4[4], 0, 4);
        $special5 = substr($pecah4[5], 0, 4);
        $special6 = substr($pecah4[6], 0, 4);
        $special7 = substr($pecah4[7], 0, 4);
        $special8 = substr($pecah4[8], 0, 4);
        $special9 = substr($pecah4[9], 0, 4);
        $special10 = substr($pecah4[10], 0, 4);

        $consolation1 = substr($pecah4[11], 0, 4);
        $consolation2 = substr($pecah4[12], 0, 4);
        $consolation3 = substr($pecah4[13], 0, 4);
        $consolation4 = substr($pecah4[14], 0, 4);
        $consolation5 = substr($pecah4[15], 0, 4);
        $consolation6 = substr($pecah4[16], 0, 4);
        $consolation7 = substr($pecah4[17], 0, 4);
        $consolation8 = substr($pecah4[18], 0, 4);
        $consolation9 = substr($pecah4[19], 0, 4);
        $consolation10 = substr($pecah4[20], 0, 4);


        $this->return_value = [
            "title" => $judul,
            "last_result" => $tanggal,
            "prize1" => $prize1,
            "prize2" => $prize2,
            "prize3" => $prize3,
            "special1" => $special1,
            "special2" => $special2,
            "special3" => $special3,
            "special4" => $special4,
            "special5" => $special5,
            "special6" => $special6,
            "special7" => $special7,
            "special8" => $special8,
            "special9" => $special9,
            "special10" => $special10,
            "consolation1" => $consolation1,
            "consolation2" => $consolation2,
            "consolation3" => $consolation3,
            "consolation4" => $consolation4,
            "consolation5" => $consolation5,
            "consolation6" => $consolation6,
            "consolation7" => $consolation7,
            "consolation8" => $consolation8,
            "consolation9" => $consolation9,
            "consolation10" => $consolation10,
        ];
    }

    public function render()
    {
        return view('livewire.iframe-chatucak', $this->return_value);
    }
}
