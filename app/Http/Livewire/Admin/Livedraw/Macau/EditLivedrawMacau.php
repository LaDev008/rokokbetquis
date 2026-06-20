<?php

namespace App\Http\Livewire\Admin\Livedraw\Macau;

use Livewire\Component;

class EditLivedrawMacau extends Component
{
    public $data_macau;
    public string $result_1;
    public string $result_2;
    public string $result_3;
    public string $result_4;
    public string $result_5;
    public string $result_6;

    public function mount($macau) {
        $this->data_macau = $macau;
        $this->result_1 = $this->data_macau->result1 ? $this->data_macau->result1 : "-";
        $this->result_2 = $this->data_macau->result2 ? $this->data_macau->result2 : "-";
        $this->result_3 = $this->data_macau->result3 ? $this->data_macau->result3 : "-";
        $this->result_4 = $this->data_macau->result4 ? $this->data_macau->result4 : "-";
        $this->result_5 = $this->data_macau->result5 ? $this->data_macau->result5 : "-";
        $this->result_6 = $this->data_macau->result6 ? $this->data_macau->result6 : "-";
    }

    public function update() {

        $this->data_macau->result1 = $this->result_1;
        $this->data_macau->result2 = $this->result_2;
        $this->data_macau->result3 = $this->result_3;
        $this->data_macau->result4 = $this->result_4;
        $this->data_macau->result5 = $this->result_5;
        $this->data_macau->result6 = $this->result_6;
        $this->data_macau->save();

        return redirect()->route("admin.livedraw.index");
    }

    public function render()
    {
        return view('livewire.admin.livedraw.macau.edit-livedraw-macau');
    }
}
