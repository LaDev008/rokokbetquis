<?php

namespace App\Http\Livewire\Admin\Livedraw\Singapore;

use Livewire\Component;
use App\Models\Singapore;

class EditToto extends Component
{

    public $data_singapore;
    public string $winning_number_1;
    public string $winning_number_2;
    public string $winning_number_3;
    public string $winning_number_4;
    public string $winning_number_5;
    public string $winning_number_6;
    public string $additional_number;

    public function mount($singapore)
    {
        $this->data_singapore = $singapore;
        $this->winning_number_1 = $this->data_singapore->winning_number_1 ? $this->data_singapore->winning_number_1 : "-";
        $this->winning_number_2 = $this->data_singapore->winning_number_2 ? $this->data_singapore->winning_number_2 : "-";
        $this->winning_number_3 = $this->data_singapore->winning_number_3 ? $this->data_singapore->winning_number_3 : "-";
        $this->winning_number_4 = $this->data_singapore->winning_number_4 ? $this->data_singapore->winning_number_4 : "-";
        $this->winning_number_5 = $this->data_singapore->winning_number_5 ? $this->data_singapore->winning_number_5 : "-";
        $this->winning_number_6 = $this->data_singapore->winning_number_6 ? $this->data_singapore->winning_number_6 : "-";
        $this->additional_number = $this->data_singapore->additional_number;
    }

    public function update()
    {

        $this->data_singapore->winning_number_1 = $this->winning_number_1;
        $this->data_singapore->winning_number_2 = $this->winning_number_2;
        $this->data_singapore->winning_number_3 = $this->winning_number_3;
        $this->data_singapore->winning_number_4 = $this->winning_number_4;
        $this->data_singapore->winning_number_5 = $this->winning_number_5;
        $this->data_singapore->winning_number_6 = $this->winning_number_6;
        $this->data_singapore->additional_number = $this->additional_number;
        $this->data_singapore->save();

        return redirect()->route("admin.livedraw.singapore.edit", $this->data_singapore->id);
    }

    public function countResult()
    {
        $sumAll = $this->data_singapore->winning_number_1 + $this->data_singapore->winning_number_2 + $this->data_singapore->winning_number_3 + $this->data_singapore->winning_number_4 + $this->data_singapore->winning_number_5 + $this->data_singapore->winning_number_6;
        $double = $sumAll * 2;
        $minusFirst = $double - $this->data_singapore->winning_number_1 - $this->data_singapore->winning_number_6;
        $addAdditional = $minusFirst + $this->data_singapore->additional_number;
        $last2Digits = substr($addAdditional, -2, 2);
        $sumHundred = $this->data_singapore->winning_number_4 + $this->data_singapore->winning_number_5;
        $secondDigit = substr($sumHundred, -1, 1);
        $sumThousand = $this->data_singapore->winning_number_2 + $this->data_singapore->winning_number_3;
        $firstDigit = substr($sumThousand, -1, 1);
        $result = sprintf("%s%s%s", $firstDigit, $secondDigit, $last2Digits);
        $this->data_singapore->first_prize = $result;
        $this->data_singapore->save();
    }
    public function render()
    {
        return view('livewire.admin.livedraw.singapore.edit-toto');
    }
}
