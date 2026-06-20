<?php

namespace App\Http\Livewire\Admin\Macau;

use App\Models\Macau;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Edit extends Component
{
    public $day, $date, $result1, $result2, $result3, $result4, $result5, $macau;

    public function mount()
    {
        $this->day = $this->macau->day;
        $this->date = $this->macau->date;
        $this->result1 = $this->macau->result1;
        $this->result2 = $this->macau->result2;
        $this->result3 = $this->macau->result3;
        $this->result4 = $this->macau->result4;
        $this->result5 = $this->macau->result5;
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
        $this->macau->day = $this->day;
        $this->macau->date = $this->date;
        $this->macau->result1 = $this->result1;
        $this->macau->result2 = $this->result2;
        $this->macau->result3 = $this->result3;
        $this->macau->result4 = $this->result4;
        $this->macau->result5 = $this->result5;
        $this->macau->last_updated_by = Auth::user()->name;
        $this->macau->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate Data Macau');

        return redirect()->route('macaus.index');
    }

    public function render()
    {
        return view('livewire.admin.macau.edit');
    }
}
