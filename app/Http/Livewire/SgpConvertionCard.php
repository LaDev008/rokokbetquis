<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SgpConvertionCard extends Component
{
    public $first, $second, $third, $fourth, $fifth, $sixth, $additional, $result;

    public function hapus()
    {
        $this->reset();
    }

    public function convert()
    {
        $sumAll = $this->first + $this->second + $this->third + $this->fourth + $this->fifth + $this->sixth;
        $double = $sumAll * 2;
        $minusFirst = $double - $this->first - $this->sixth;
        $addAdditional = $minusFirst + $this->additional;
        $last2Digits = substr($addAdditional, -2, 2);
        $sumHundred = $this->fourth + $this->fifth;
        $secondDigit = substr($sumHundred, -1, 1);
        $sumThousand = $this->second + $this->third;
        $firstDigit = substr($sumThousand, -1, 1);
        $this->result = sprintf("%s%s%s", $firstDigit, $secondDigit, $last2Digits);
        // dump($sumAll, $double, $minusFirst, $addAdditional, $last2Digits, $sumHundred, $secondDigit, $sumThousand, $firstDigit, $this->result);
        // $this->reset('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'additional');
    }

    public function render()
    {
        return view('livewire.sgp-convertion-card');
    }
}
