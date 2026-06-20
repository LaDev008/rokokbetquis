<?php

namespace App\Http\Livewire\Admin\Page\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Banner extends Component
{
    use WithFileUploads;
    public $banner, $old_banner, $page;

    public function mount()
    {
        $this->old_banner = $this->page->banner;
    }

    public function submit()
    {
        if ($this->banner) {
            $storage_path = substr($this->old_banner, 9);
            Storage::delete($storage_path);

            $extension = $this->banner->getClientOriginalExtension();
            $image_name = "banner.$extension";

            $this->banner->storeAs('page', $image_name);
            $image_path = "/storage/page/$image_name";

            $this->page->banner = $image_path;
            $this->page->save();

            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Mengganti Banner');

            return redirect()->route('admin.page.image');
        }
    }

    public function render()
    {
        return view('livewire.admin.page.image.banner');
    }
}
