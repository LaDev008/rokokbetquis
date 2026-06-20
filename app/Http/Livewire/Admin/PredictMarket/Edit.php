<?php

namespace App\Http\Livewire\Admin\PredictMarket;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $predict;
    public $name;
    public $open;
    public $close;
    public $article;
    public $photo;
    public $old_photo;
    public $background;
    public $old_background;
    public $livedraw;

    public function mount()
    {
        $this->name = $this->predict->name;
        $this->open = $this->predict->open;
        $this->close = $this->predict->close;
        $this->article = $this->predict->article;
        $this->old_photo = $this->predict->emblem;
        $this->old_background = $this->predict->image;
        if ($this->predict->livedraw) {
            $this->livedraw = $this->predict->livedraw;
        }
    }

    public function submit()
    {


        if ($this->photo) {
            if ($this->old_photo) {
                $storage_path = substr($this->old_photo, 9);
                Storage::delete($storage_path);
            }

            $extension =  $this->photo->getClientOriginalExtension();
            $name = str_replace(" ", '-', Str::lower($this->name));
            $newname = "$name.$extension";

            $this->photo->storeAs("market/emblem", $newname);

            $emblem_path = "/storage/market/emblem/$newname";
            $this->predict->emblem = $emblem_path;
            $this->predict->save();
        }

        if ($this->background) {
            if ($this->old_background) {
                $storage_path = substr($this->old_background, 9);
                Storage::delete($storage_path);
            }

            $extension =  $this->background->getClientOriginalExtension();
            $name = str_replace(" ", '-', Str::lower($this->name));
            $newname = "$name.$extension";

            $this->background->storeAs("market/emblem", $newname);

            $background_path = "/storage/market/background/$newname";
            $this->predict->image = $background_path;
            $this->predict->save();
        }
        
        $slug = str_replace(' ', '-', $this->name);
        $slug = Str::lower($slug);
        $this->predict->slug = $slug;
        $this->predict->name = $this->name;
        $this->predict->open = $this->open;
        $this->predict->close = $this->close;
        $this->predict->article = $this->article;
        if ($this->livedraw) {
            $this->predict->livedraw = $this->livedraw;
        }
        $this->predict->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Memperbarui Pasaran');

        return redirect(route('predicts.index'));
    }

    public function render()
    {
        return view('livewire.admin.predict-market.edit');
    }
}
