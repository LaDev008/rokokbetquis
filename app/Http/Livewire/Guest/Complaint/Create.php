<?php

namespace App\Http\Livewire\Guest\Complaint;

use Livewire\Component;
use App\Models\Complain;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class Create extends Component
{
    public $username;
    public $whatsapp;
    public $title;
    public $content;
    public $search;
    public $result;
    public $complainCode;

    protected $rules = [
        'username' => 'required|string|max:255',
        'whatsapp' => 'required',
        'title' => 'required|string|max:255',
        'content' => 'required',
    ];

    public function submit() {
        $this->validate();
        $complain = Complain::create([
            'username' => $this->username,
            'whatsapp' => $this->whatsapp,
            'title' => $this->title,
            'content' => $this->content,
            'code' => Str::random(10),
        ]);

        if($complain) {
            Session::flash('status', 'success');
            Session::flash('message', 'Keluhan Sudah Berhasil Dikirim, Terima Kasih');

            $this->reset();
            $this->complainCode = $complain->code;
        }
    }

    public function search() {
        $this->result = Complain::firstWhere('code', $this->search);
    }

    public function render()
    {
        return view('livewire.guest.complaint.create');
    }
}
