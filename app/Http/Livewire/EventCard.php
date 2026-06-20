<?php

namespace App\Http\Livewire;

use App\Models\CommentWinner;
use App\Models\EventComment;
use App\Models\Site;
use App\Models\SiteEvent;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EventCard extends Component
{
    use WithFileUploads, WithPagination;

    public $event, $sites, $site_id, $user_id, $photo, $answer, $site_event_id, $participated = false, $comment_winners;
    public $search = '';

    protected $queryString = ['search' => ["except" => '']];
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'site_id' => 'required',
        'user_id' => 'required',
        'answer' => 'required|max:255',
        'site_event_id' => 'required',
    ];

    protected $messages = [
        'answer.required' => "Silahkan Masukkan Jawaban Anda",
    ];

    public function mount()
    {
        $this->sites = Site::all();
        $this->user_id = Auth::id();
        $this->site_event_id = $this->event->id;
        $this->site_id = $this->event->site_id;
        if ($this->event->eventComments != null) {
            $this->participated = !$this->event->eventComments->where('user_id', Auth::id())->isEmpty();
        }
    }

    public function submit()
    {
        $this->validate();

        $check = $this->event->eventComments->where("user_id", Auth::id())->isEmpty();

        if ($check && $this->event->status_id == 2) {
            $comment = EventComment::create([
                'site_event_id' => $this->site_event_id,
                'user_id' => $this->user_id,
                'site_id' => $this->site_id,
                'answer' => $this->answer,
            ]);

            if ($this->event->need_upload) {
                $extension = $this->photo->getClientOriginalExtension();
                $newname = Auth::user()->name . time() . ".$extension";
                $this->photo->storeAs($this->event->picture_folder, $newname);
                $image_path = "/storage/" . $this->event->picture_folder . "/$newname";

                $comment->image = $image_path;
                $comment->save();
            }
            $this->participated = true;
        }

        return redirect()->route('event');
    }

    public function checking($event_id)
    {
        $event = SiteEvent::with('eventComments')->find($event_id);

        if ($event->eventComments->where('user_id', Auth::id())->count() > 0) {
            $this->participated = true;
        }
    }

    public function maskAnswer(?string $answer): string
    {
        $answer = trim((string) $answer);

        if ($answer === '') {
            return '';
        }

        $length = Str::length($answer);

        if ($length <= 4) {
            return Str::substr($answer, 0, 1) . str_repeat('*', max($length - 2, 0)) . Str::substr($answer, -1);
        }

        return Str::substr($answer, 0, 3) . '***' . Str::substr($answer, -1);
    }


    public function render()
    {
        return view('livewire.event-card', [
            'comments' => EventComment::with('winnerList')->where('site_event_id', $this->event->id)->where('answer', "LIKE", "%" . $this->search . "%")->paginate(30),
        ]);
    }
}
