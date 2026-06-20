<?php

namespace App\Http\Livewire\Admin\Livedraw\Sydney;

use App\Models\Sydney;
use Livewire\Component;

class EditLivedrawSydney extends Component
{
    public $data_sydney;
    public string $first_result;
    public string $second_result;
    public string $third_result;

    public function mount($sydney) {
        $this->data_sydney = $sydney;
        $this->first_result = $this->data_sydney->first_result ? $this->data_sydney->first_result : "-";
        $this->second_result = $this->data_sydney->second_result ? $this->data_sydney->second_result : "-";
        $this->third_result = $this->data_sydney->third_result ? $this->data_sydney->third_result : "-";
    }

    public function update() {

        $this->data_sydney->first_result = $this->first_result;
        $this->data_sydney->second_result = $this->second_result;
        $this->data_sydney->third_result = $this->third_result;
        $this->data_sydney->save();

        return redirect()->route("admin.livedraw.sydney.edit", $this->data_sydney->id);
    }

    public function render()
    {
        return view('livewire.admin.livedraw.sydney.edit-livedraw-sydney');
    }
}
