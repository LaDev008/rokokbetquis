<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\CommentWinner;
use App\Models\EventComment;
use App\Models\WinnerList;
use Livewire\Component;

class ChooseWinner extends Component
{
    public $comment, $winner_lists, $user_id, $event_comment_id, $winner_list_id = 4;

    public function mount()
    {
        $this->winner_lists = WinnerList::where('id', "<", 5)->get();
        if ($this->comment) {
            $this->event_comment_id = $this->comment->id;
            if ($this->comment->winner_list_id != null) {
                $this->winner_list_id = $this->comment->winner_list_id;
            }
            $this->user_id = $this->comment->user_id;
        }
    }

    public function submit()
    {
        $all_comments = EventComment::where('site_event_id', $this->comment->site_event_id)->get();
        if ($this->winner_list_id < 4) {
            $check = $all_comments->firstWhere('winner_list_id', $this->winner_list_id);
            if ($check) {
                $check->winner_list_id = $this->comment->winner_list_id;
                $check->save();

                $this->comment->winner_list_id = $this->winner_list_id;
                $this->comment->save();
            } else {

                $this->comment->winner_list_id = $this->winner_list_id;
                $this->comment->save();
            }
        } else {
            $this->comment->winner_list_id = $this->winner_list_id;
            $this->comment->save();
        }

        return redirect(route('events.show', $this->comment->site_event_id));


        return redirect()->route('events.show', $this->comment->site_event_id);
    }

    public function render()
    {
        return view('livewire.admin.components.choose-winner');
    }
}
