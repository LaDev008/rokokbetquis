<?php

namespace App\Http\Livewire\Admin\Page\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Logo extends Component
{
    use WithFileUploads;
    public $old_logo, $logo, $page;

    public function mount()
    {
        $this->old_logo = $this->page->logo;
    }

    public function submit()
    {
        if ($this->logo) {
            $storage_path = substr($this->old_logo, 9);
            Storage::delete($storage_path);

            $extension = $this->logo->getClientOriginalExtension();
            $image_name = "logo.$extension";

            $this->logo->storeAs('page', $image_name);
            $image_path = "/storage/page/$image_name";

            $this->page->logo = $image_path;
            $this->page->save();

            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Mengganti Logo');

            return redirect()->route('admin.page.image');
        }
    }

    public function render()
    {
        return view('livewire.admin.page.image.logo');
    }
}
