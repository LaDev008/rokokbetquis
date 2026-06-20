<?php

namespace App\Http\Livewire\Admin\Livedraw\Singapore;

use Livewire\Component;
use App\Models\Singapore;

class EditLivedrawSingapore extends Component
{
    public $data_singapore;
    public string $first_prize;
    public string $second_prize;
    public string $third_prize;
    public string $starter_1;
    public string $starter_2;
    public string $starter_3;
    public string $starter_4;
    public string $starter_5;
    public string $starter_6;
    public string $starter_7;
    public string $starter_8;
    public string $starter_9;
    public string $starter_10;
    public string $consolation_1;
    public string $consolation_2;
    public string $consolation_3;
    public string $consolation_4;
    public string $consolation_5;
    public string $consolation_6;
    public string $consolation_7;
    public string $consolation_8;
    public string $consolation_9;
    public string $consolation_10;

    public function mount(Singapore $singapore) {
        $this->data_singapore = $singapore;
        $this->first_prize = $this->data_singapore->first_prize ? $this->data_singapore->first_prize : "-";
        $this->second_prize = $this->data_singapore->second_prize ? $this->data_singapore->second_prize : "-";
        $this->third_prize = $this->data_singapore->third_prize ? $this->data_singapore->third_prize : "-";
        $this->starter_1 = $this->data_singapore->starter_1 ? $this->data_singapore->starter_1 : "-";
        $this->starter_2 = $this->data_singapore->starter_2 ? $this->data_singapore->starter_2 : "-";
        $this->starter_3 = $this->data_singapore->starter_3 ? $this->data_singapore->starter_3 : "-";
        $this->starter_4 = $this->data_singapore->starter_4 ? $this->data_singapore->starter_4 : "-";
        $this->starter_5 = $this->data_singapore->starter_5 ? $this->data_singapore->starter_5 : "-";
        $this->starter_6 = $this->data_singapore->starter_6 ? $this->data_singapore->starter_6 : "-";
        $this->starter_7 = $this->data_singapore->starter_7 ? $this->data_singapore->starter_7 : "-";
        $this->starter_8 = $this->data_singapore->starter_8 ? $this->data_singapore->starter_8 : "-";
        $this->starter_9 = $this->data_singapore->starter_9 ? $this->data_singapore->starter_9 : "-";
        $this->starter_10 = $this->data_singapore->starter_10 ? $this->data_singapore->starter_10 : "-";
        $this->consolation_1 = $this->data_singapore->consolation_1 ? $this->data_singapore->consolation_1 : "-";
        $this->consolation_2 = $this->data_singapore->consolation_2 ? $this->data_singapore->consolation_2 : "-";
        $this->consolation_3 = $this->data_singapore->consolation_3 ? $this->data_singapore->consolation_3 : "-";
        $this->consolation_4 = $this->data_singapore->consolation_4 ? $this->data_singapore->consolation_4 : "-";
        $this->consolation_5 = $this->data_singapore->consolation_5 ? $this->data_singapore->consolation_5 : "-";
        $this->consolation_6 = $this->data_singapore->consolation_6 ? $this->data_singapore->consolation_6 : "-";
        $this->consolation_7 = $this->data_singapore->consolation_7 ? $this->data_singapore->consolation_7 : "-";
        $this->consolation_8 = $this->data_singapore->consolation_8 ? $this->data_singapore->consolation_8 : "-";
        $this->consolation_9 = $this->data_singapore->consolation_9 ? $this->data_singapore->consolation_9 : "-";
        $this->consolation_10 = $this->data_singapore->consolation_10 ? $this->data_singapore->consolation_10 : "-";

    }

    public function update() {

        $this->data_singapore->first_prize = $this->first_prize;
        $this->data_singapore->second_prize = $this->second_prize;
        $this->data_singapore->third_prize = $this->third_prize;
        $this->data_singapore->starter_1 = $this->starter_1;
        $this->data_singapore->starter_2 = $this->starter_2;
        $this->data_singapore->starter_3 = $this->starter_3;
        $this->data_singapore->starter_4 = $this->starter_4;
        $this->data_singapore->starter_5 = $this->starter_5;
        $this->data_singapore->starter_6 = $this->starter_6;
        $this->data_singapore->starter_7 = $this->starter_7;
        $this->data_singapore->starter_8 = $this->starter_8;
        $this->data_singapore->starter_9 = $this->starter_9;
        $this->data_singapore->starter_10 = $this->starter_10;
        $this->data_singapore->consolation_1 = $this->consolation_1;
        $this->data_singapore->consolation_2 = $this->consolation_2;
        $this->data_singapore->consolation_3 = $this->consolation_3;
        $this->data_singapore->consolation_4 = $this->consolation_4;
        $this->data_singapore->consolation_5 = $this->consolation_5;
        $this->data_singapore->consolation_6 = $this->consolation_6;
        $this->data_singapore->consolation_7 = $this->consolation_7;
        $this->data_singapore->consolation_8 = $this->consolation_8;
        $this->data_singapore->consolation_9 = $this->consolation_9;
        $this->data_singapore->consolation_10 = $this->consolation_10;
        $this->data_singapore->save();

        return redirect()->route("admin.livedraw.singapore.edit", $this->data_singapore->id);
    }
    public function render()
    {
        return view('livewire.admin.livedraw.singapore.edit-livedraw-singapore');
    }
}
