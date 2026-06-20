<?php

namespace App\Http\Livewire\Admin\Complaints;

use Livewire\Component;
use App\Models\Complain;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $complaints;
    public $answer;

    public function mount()
    {
        if(Auth::user()->role_id == 1) {
            $this->complaints = Complain::orderBy('created_at', 'desc')->get();
        } else {
            $this->complaints = Complain::where('done', false)->orderBy('created_at', 'desc')->get();
        }
    }

    public function resetAnswer() {
        $this->answer = '';
    }
    public function submit($id) {
        $this->validate([
            'answer' => 'required|string|max:255',
        ]);

        $complain = Complain::find($id);
        // dd("submitted", $this->all(), $id, $complain);
        $complain->answer = $this->answer;
        $complain->done = true;
        $complain->save();

        $this->refresh();
        $this->resetAnswer();
    }

    public function refresh() {
        if(Auth::user()->role_id == 1) {
            $this->complaints = Complain::orderBy('created_at', 'desc')->get();
        } else {
            $this->complaints = Complain::where('done', false)->orderBy('created_at', 'desc')->get();
        }
    }

    public function done($id) {
        $complain = Complain::find($id);
        $complain->done = true;
        $complain->save();

        $this->refresh();
    }

    public function render()
    {
        return view('livewire.admin.complaints.index');
    }
}
