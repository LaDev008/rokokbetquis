<?php

namespace App\Http\Livewire\Admin\Macau;

use Carbon\Carbon;
use App\Models\Macau;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;

class Create extends Component
{
    public $day, $date, $result1, $result2, $result3, $result4, $result5;

    public function mount()
    {
    }

    public function changeDay()
    {
        $dayname = date('l', strtotime($this->date));

        switch ($dayname) {
            case "Sunday":
                $dayname = "Minggu";
                break;
            case "Monday":
                $dayname = "Senin";
                break;
            case "Tuesday":
                $dayname = "Selasa";
                break;
            case "Wednesday":
                $dayname = "Rabu";
                break;
            case "Thursday":
                $dayname = "Kamis";
                break;
            case "Friday":
                $dayname = "Jumat";
                break;
            case "Saturday":
                $dayname = "Sabtu";
                break;
            default:
                $dayname = "hari tidak valid";
                break;
        }

        $this->day = $dayname;
    }

    public function submit()
    {
        $macau = new Macau();
        $macau->day = $this->day;
        $macau->date = $this->date;
        $macau->result1 = $this->result1;
        $macau->result2 = $this->result2;
        $macau->result3 = $this->result3;
        $macau->result4 = $this->result4;
        $macau->result5 = $this->result5;
        $macau->last_updated_by = Auth::user()->name;
        $macau->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Memasukkan Data Macau');

        return redirect()->route('macaus.index');
    }

    public function render()
    {
        return view('livewire.admin.macau.create');
    }
}
