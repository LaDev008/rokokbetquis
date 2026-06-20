<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserList extends Component
{

    public $search = '';
    protected $queryString = ['search' => ['except' => '']];

    public function render()
    {
        return view('livewire.user-list', [
            'users' => User::with('role')->where('role_id', ">", Auth::user()->role_id)->where('username', 'LIKE', '%' . $this->search . "%")->orderBy('role_id')->orderBy('username')->paginate(100),
        ]);
    }
}
