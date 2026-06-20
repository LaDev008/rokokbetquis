<?php

namespace App\Http\Livewire\Admin\SiteEvent;

use App\Models\History;
use App\Models\SiteEvent;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Edit extends Component
{
    use WithFileUploads;

    public $statuses, $sites, $title, $old_photo, $share_link, $need_upload, $site_id, $status_id, $date, $terms, $new_photo, $event;

    protected $rules = [
        'title' => 'required|string|max:255',
        'terms' => 'required',
        'share_link' => 'required|max:255',
        'site_id' => 'required',
        'status_id' => 'required',
        'date' => 'required',
    ];

    public function mount()
    {
        if ($this->event->need_upload) {
            $this->need_upload = true;
        } else {
            $this->need_upload = false;
        }

        $this->site_id = $this->event->site_id;
        $this->status_id = $this->event->status_id;
        $this->title = $this->event->title;
        $this->old_photo = $this->event->image;
        $this->share_link = $this->event->share_link;
        $this->date = date("Y-m-d", strtotime($this->event->date));
        $this->terms = $this->event->terms;
    }

    public function submit()
    {
        if ($this->new_photo) {
            $storage_path = substr($this->event->image, 9);
            Storage::delete($storage_path);

            $extension = $this->new_photo->getClientOriginalExtension();
            $newname = str_replace(" ", "-", $this->title) . time() . ".$extension";
            $this->new_photo->storeAs('events', $newname);
            $image_path = "/storage/events/$newname";

            $this->event->image = $image_path;
        }

        $this->event->title = $this->title;
        $this->event->terms = $this->terms;
        $this->event->date = $this->date;
        $this->event->share_link = $this->share_link;
        $this->event->need_upload = $this->need_upload;
        $this->event->site_id = $this->site_id;
        $this->event->status_id = $this->status_id;
        $this->event->save();

        History::create([
            'name' => Auth::user()->name,
            'title' => "Edit Lomba " . $this->event->title,
        ]);

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate Event Lomba');

        return redirect()->route('events.index');
    }

    public function flush()
    {
      $events = SiteEvent::where("id", "<=", 370)->get();
      
      foreach($events as $event) {
          foreach($event->eventComments as $comment) {
              $storage_path = substr($comment->image, 9);
              Storage::delete($storage_path);
          }
      }
       
       
       
        // $event = SiteEvent::with('eventComments')->find($this->event->id);
        // foreach ($event->eventComments as $comment) {
        //     $storage_path = substr($comment->image, 9);
        //     Storage::delete($storage_path);
        // }

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Semua Bukti Share Member');

        return redirect()->route('events.index');
    }

    public function render()
    {
        return view('livewire.admin.site-event.edit');
    }
}
