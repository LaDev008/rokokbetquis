<?php

namespace App\Http\Livewire\Admin\Livedraw\Hongkong;

use Livewire\Component;

class EditLivedrawHongkong extends Component
{

    public $data_hongkong;
    public string $first_result;
    public string $second_result;
    public string $third_result;

    public function mount($hongkong) {
        $this->data_hongkong = $hongkong;
        $this->first_result = $this->data_hongkong->first_result ? $this->data_hongkong->first_result : "-";
        $this->second_result = $this->data_hongkong->second_result ? $this->data_hongkong->second_result : "-";
        $this->third_result = $this->data_hongkong->third_result ? $this->data_hongkong->third_result : "-";
    }

    public function update() {

        $this->data_hongkong->first_result = $this->first_result;
        $this->data_hongkong->second_result = $this->second_result;
        $this->data_hongkong->third_result = $this->third_result;
        $this->data_hongkong->save();

        return redirect()->route("admin.livedraw.hongkong.edit", $this->data_hongkong->id);
    }
    public function render()
    {
        return view('livewire.admin.livedraw.hongkong.edit-livedraw-hongkong');
    }
}
