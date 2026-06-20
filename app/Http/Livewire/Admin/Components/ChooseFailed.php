<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\CommentWinner;

class ChooseFailed extends Component
{
    public $comment, $user_id, $event_comment_id, $winner_list_id, $reason = '';

    public function mount()
    {
        if ($this->comment) {

            $this->event_comment_id = $this->comment->id;
            $this->user_id = $this->comment->user_id;
            $this->winner_list_id = 5;
        }
    }

    public function submit()
    {
        $this->comment->winner_list_id = $this->winner_list_id;
        $this->comment->failed_reason = $this->reason;
        $this->comment->save();

        return redirect()->route('events.show', $this->comment->site_event_id);
    }

    public function render()
    {
        return view('livewire.admin.components.choose-failed');
    }
}
