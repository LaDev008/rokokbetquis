<?php

namespace App\Http\Livewire\Admin\SiteEvent;

use App\Models\EventComment;
use Livewire\Component;

class Search extends Component
{
    public $search = '', $event, $comment_id, $reason = '';
    public $item = '';

    protected $queryString = ['search' => ['except' => '']];

    public function mount()
    {
    }

    public function setComment($id)
    {
        $data = EventComment::find($id);
        $this->item = $data;
    }

    public function cancel($id, $userId)
    {
        $comment = EventComment::with('user')->find($id);
        $comment->winner_list_id = null;
        $comment->save();
    }

    public function render()
    {
        return view('livewire.admin.site-event.search', [
            'comments' => EventComment::with('user')->where('site_event_id', $this->event->id)->where('answer', 'like', '%' . $this->search . '%')->orderBy('created_at')->get()
        ]);
    }
}
