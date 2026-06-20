<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class CommentDisplay extends Component
{
    public $username;
    public $date;
    public $answer;
    public $comment;
    public $status;

    public function mount()
    {
        $this->username = substr($this->comment->user->username, 0, 3) . "XXX";
        $this->date = Carbon::parse($this->comment->created_at)->translatedFormat('d / F / Y, H:i:s');
        $this->answer = $this->maskAnswer($this->comment->answer);
        if($this->comment->winnerList) {
            if($this->comment->winnerList->id == '5') {
                $this->status = 'warning';
            } else {
                $this->status = 'success';
            }
        } else {
            $this->status = null;
        }
    }

    public function render()
    {
        return view('livewire.comment-display');
    }

    private function maskAnswer(?string $answer): string
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
}
