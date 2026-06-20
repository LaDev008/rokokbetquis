<?php

namespace App\Http\Livewire\Admin\SiteEvent;

use DateTime;
use App\Models\History;
use Livewire\Component;
use App\Models\SiteEvent;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;

class Create extends Component
{
    use WithFileUploads;

    public $statuses, $sites, $title, $photo, $share_link, $need_upload = true, $site_id, $status_id, $date, $terms;

    protected $rules = [
        'title' => 'required|string|max:255',
        'terms' => 'required',
        'share_link' => 'required|max:255',
        'photo' => 'required|image|mimes:png,jpg,jpeg,webp',
        'site_id' => 'required',
        'status_id' => 'required',
        'date' => 'required',
    ];

    public function mount()
    {
        $this->need_upload = true;
        $this->site_id = $this->sites->first()->id;
        $this->status_id = $this->statuses->first()->id;
    }

    public function submit()
    {
        $this->validate();

        $extension = $this->photo->getClientOriginalExtension();
        $newname = str_replace(' ', '-', Str::lower($this->title)) . "-" . time() . ".$extension";
        $this->photo->storeAs('events', $newname);
        $image_path = "/storage/events/$newname";

        $picture_folder = Str::random(10);

        $event = SiteEvent::create([
            'title' => $this->title,
            'slug' => str_replace(' ', '-', Str::lower($this->title)),
            'terms' => $this->terms,
            'share_link' => $this->share_link,
            'image' => $image_path,
            'site_id' => $this->site_id,
            'status_id' => $this->status_id,
            'date' => $this->date,
            'picture_folder' => $picture_folder,
        ]);


        if ($this->need_upload) {
            $event->need_upload = true;
            $event->save();
        }

        History::create([
            'name' => Auth::user()->name,
            'title' => "Buat Lomba $event->title",
        ]);

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Membuat Event Baru');

        return redirect()->route('events.index');
    }

    public function render()
    {
        return view('livewire.admin.site-event.create');
    }
}
