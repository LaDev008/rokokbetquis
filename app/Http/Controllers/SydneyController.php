<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sydney;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SydneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sydneys = Sydney::orderByDesc("date")->paginate(50);
        return view("admin.data.sydney.index", compact("sydneys"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.data.sydney.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'first_result' => 'required',
            'second_result' => 'required',
            'third_result' => 'required',
        ]);

        $sydney = new Sydney();
        $sydney->date = $validatedData['date'];
        $sydney->day = strtolower(Carbon::parse($validatedData['date'])->isoFormat("dddd"));
        $sydney->first_result = $validatedData['first_result'];
        $sydney->second_result = $validatedData['second_result'];
        $sydney->third_result = $validatedData['third_result'];
        $sydney->save();

        Session::flash("status", "success");
        Session::flash('message', 'Data berhasil diperbarui.');

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Memasukkan Data Sydney " . Carbon::parse($sydney->date)->isoFormat("dddd, D MMMM Y"),
        ]);

        return redirect()->route("admin.data.sydney.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Sydney $sydney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sydney $sydney)
    {
        return view("admin.data.sydney.edit", compact("sydney"));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sydney $sydney)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'first_result' => 'required',
            'second_result' => 'required',
            'third_result' => 'required',
        ]);

        $sydney->update($validatedData);
        Session::flash("status", "success");
        Session::flash('message', 'Data berhasil diperbarui.');

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Mengupdate Data Sydney " . Carbon::parse($sydney->date)->isoFormat("dddd, D MMMM Y"),
        ]);


        return redirect()->route("admin.data.sydney.index");
    }

    public function delete(Sydney $sydney)
    {
        return view("admin.data.sydney.delete", compact("sydney"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sydney $sydney)
    {
        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Menghapus Data Sydney " . Carbon::parse($sydney->date)->isoFormat("dddd, D MMMM Y"),
        ]);

        $sydney->delete();

        return redirect()->route("admin.data.sydney.index");
    }

    public function empty()
    {
        $check_sydney = Sydney::where("date", date("Y-m-d"))->first();
        if ($check_sydney) {
            return redirect()->route('admin.livedraw.index');
        }
        $sydney = new Sydney();
        $sydney->date = date("Y-m-d");
        $sydney->day = strtolower(Carbon::parse(date("Y-m-d"))->isoFormat("dddd"));
        $sydney->save();

        return redirect()->route("admin.livedraw.index");
    }

    public function liveEdit()
    {
        $last_sydney = Sydney::orderByDesc("date")->first();

        return view("admin.livedraw.sydney.edit", compact('last_sydney'));
    }
}
