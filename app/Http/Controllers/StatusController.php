<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();

        return view('admin.status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Status::create([
            'name' => $request->name,
            'color' => $request->color,
        ]);

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Membuat Status Baru');

        return redirect()->route('statuses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('admin.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $request->validate([
            'name' => "required|string|max:255",
        ]);

        $status->name = $request->name;
        $status->color = $request->color;
        $status->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate Status');

        return redirect()->route('statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Status');

        return redirect()->route('statuses.index');
    }
}
