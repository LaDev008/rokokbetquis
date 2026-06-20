<?php

namespace App\Http\Livewire\Admin\Page\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Background extends Component
{
    use WithFileUploads;
    public $background, $old_background, $page;

    public function mount()
    {
        $this->old_background = $this->page->background;
    }

    public function submit()
    {
        if ($this->background) {
            $storage_path = substr($this->background, 9);
            Storage::delete($storage_path);

            $extension = $this->background->getClientOriginalExtension();
            $image_name = "background.$extension";

            $this->background->storeAs('page', $image_name);
            $image_path = "/storage/page/$image_name";

            $this->page->background = $image_path;
            $this->page->save();

            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Mengganti Background');

            return redirect()->route('admin.page.image');
        }
    }

    public function render()
    {
        return view('livewire.admin.page.image.background');
    }
}
