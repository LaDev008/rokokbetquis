<?php

namespace App\Http\Controllers\Admin;

use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNavigationController extends Controller
{
    public function dashboard() {
        $navigations = Navigation::all();

        // return view('admin.dashboard', compact('navigations'));
        return redirect()->route('events.index');
    }
}
