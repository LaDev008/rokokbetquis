<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\History;
use App\Models\Hongkong;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HongkongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hongkongs = Hongkong::orderByDesc("date")->paginate(50);
        return view("admin.data.hongkong.index", compact("hongkongs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.data.hongkong.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'date' => 'required',
            'first_result' => 'required',
            'second_result' => 'required',
            'third_result' => 'required',
        ]);
        $validatedData['day'] = Carbon::parse($validatedData['date'])->translatedFormat('l');

        $hongkong = Hongkong::create($validatedData);
        Session::flash("status", "success");
        Session::flash('message', 'Data berhasil Ditambahkan.');

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Menambahkan Data Hongkong " . Carbon::parse($hongkong->date)->isoFormat("dddd, D MMMM Y"),
        ]);


        return redirect()->route("admin.data.hongkong.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Hongkong $hongkong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hongkong $hongkong)
    {

        //
        return view("admin.data.hongkong.edit", compact("hongkong"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hongkong $hongkong)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'first_result' => 'required',
            'second_result' => 'required',
            'third_result' => 'required',
        ]);

        $hongkong->update($validatedData);
        Session::flash("status", "success");
        Session::flash('message', 'Data berhasil diperbarui.');

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Mengupdate Data Hongkong " . Carbon::parse($hongkong->date)->isoFormat("dddd, D MMMM Y"),
        ]);


        return redirect()->route("admin.data.hongkong.index");
    }

    public function delete(Hongkong $hongkong) {
        return view("admin.data.hongkong.delete", compact("hongkong"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hongkong $hongkong)
    {
        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Menghapus Data Hongkong " . Carbon::parse($hongkong->date)->isoFormat("dddd, D MMMM Y"),
        ]);

        $hongkong->delete();

        return redirect()->route("admin.data.hongkong.index");
    }

    public function empty(){
        $check_hongkong = Hongkong::where("date", date("Y-m-d"))->first();
        if ($check_hongkong) {
            return redirect()->route('admin.livedraw.index');
        }
        $hongkong = new Hongkong();
        $hongkong->date = date("Y-m-d");
        $hongkong->day = strtolower(Carbon::parse(date("Y-m-d"))->isoFormat("dddd"));
        $hongkong->save();

        return redirect()->route("admin.livedraw.index");
    }

    public function liveEdit() {
        $last_hongkong = Hongkong::orderByDesc("date")->first();

        return view("admin.livedraw.hongkong.edit", compact('last_hongkong'));
    }
}
