<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Macau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MacauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $macaus = Macau::latest('date')->get();

        return view('admin.macau.index', compact('macaus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.macau.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Macau $macau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Macau $macau)
    {
        return view('admin.macau.edit', compact('macau'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Macau $macau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Macau $macau)
    {
        $macau->delete();

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Data Macau');

        return redirect()->route('macaus.index');
    }

    public function empty(){
        $check_macau = Macau::where("date", date("Y-m-d"))->first();
        if ($check_macau) {
            return redirect()->route('admin.livedraw.index');
        }
        $macau = new Macau();
        $macau->date = date("Y-m-d");
        $macau->day = strtolower(Carbon::parse(date("Y-m-d"))->isoFormat("dddd"));
        $macau->save();

        return redirect()->route("admin.livedraw.index");
    }

    public function liveEdit() {
        $last_macau = Macau::orderByDesc("date")->first();

        return view("admin.livedraw.macau.edit", compact('last_macau'));
    }
}
