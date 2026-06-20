<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\History;
use App\Models\Singapore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SingaporeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $singapores = Singapore::orderByDesc("date")->paginate(50);

        return view("admin.data.singapore.index", compact('singapores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.data.singapore.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $singapore = new Singapore();
        if($singapore->is_toto) {
            $validatedData = $request->validate([
                'date' => 'required',
                'winning_number_1' => 'required',
                'winning_number_2' => 'required',
                'winning_number_3' => 'required',
                'winning_number_4' => 'required',
                'winning_number_5' => 'required',
                'winning_number_6' => 'required',
                'additional_number' => 'required',
            ]);

            $singapore->date = $request->date;
            $singapore->day = strtolower(Carbon::parse($request->date)->isoFormat("dddd"));
            $singapore->is_toto = $request->is_toto;
            $singapore->winning_number_1 = $request->winning_number_1;
            $singapore->winning_number_2 = $request->winning_number_2;
            $singapore->winning_number_3 = $request->winning_number_3;
            $singapore->winning_number_4 = $request->winning_number_4;
            $singapore->winning_number_5 = $request->winning_number_5;
            $singapore->winning_number_6 = $request->winning_number_6;
            $singapore->additional_number = $request->additional_number;
            $sumAll = $singapore->winning_number_1 + $singapore->winning_number_2 + $singapore->winning_number_3 + $singapore->winning_number_4 + $singapore->winning_number_5 + $singapore->winning_number_6;
            $double = $sumAll * 2;
            $minusFirst = $double - $singapore->winning_number_1 - $singapore->winning_number_6;
            $addAdditional = $minusFirst + $singapore->additional_number;
            $last2Digits = substr($addAdditional, -2, 2);
            $sumHundred = $singapore->winning_number_4 + $singapore->winning_number_5;
            $secondDigit = substr($sumHundred, -1, 1);
            $sumThousand = $singapore->winning_number_2 + $singapore->winning_number_3;
            $firstDigit = substr($sumThousand, -1, 1);
            $result = sprintf("%s%s%s", $firstDigit, $secondDigit, $last2Digits);
            $singapore->first_prize = $result;
            $singapore->save();

        } else {
            $validatedData = $request->validate([
                'date' => 'required',
                'first_prize' => 'required',
                'second_prize' => 'required',
                'third_prize' => 'required',
                'starter_1' => 'required',
                'starter_2' => 'required',
                'starter_3' => 'required',
                'starter_4' => 'required',
                'starter_5' => 'required',
                'starter_6' => 'required',
                'starter_7' => 'required',
                'starter_8' => 'required',
                'starter_9' => 'required',
                'starter_10' => 'required',
                'consolation_1' => 'required',
                'consolation_2' => 'required',
                'consolation_3' => 'required',
                'consolation_4' => 'required',
                'consolation_5' => 'required',
                'consolation_6' => 'required',
                'consolation_7' => 'required',
                'consolation_8' => 'required',
                'consolation_9' => 'required',
                'consolation_10' => 'required',
            ]);

            $singapore->date = $request->date;
            $singapore->day = strtolower(Carbon::parse($request->date)->isoFormat("dddd"));
            $singapore->is_toto = $request->is_toto;
            $singapore->first_prize = $request->first_prize;
            $singapore->second_prize = $request->second_prize;
            $singapore->third_prize = $request->third_prize;
            $singapore->starter_1 = $request->starter_1;
            $singapore->starter_2 = $request->starter_2;
            $singapore->starter_3 = $request->starter_3;
            $singapore->starter_4 = $request->starter_4;
            $singapore->starter_5 = $request->starter_5;
            $singapore->starter_6 = $request->starter_6;
            $singapore->starter_7 = $request->starter_7;
            $singapore->starter_8 = $request->starter_8;
            $singapore->starter_9 = $request->starter_9;
            $singapore->starter_10 = $request->starter_10;
            $singapore->consolation_1 = $request->consolation_1;
            $singapore->consolation_2 = $request->consolation_2;
            $singapore->consolation_3 = $request->consolation_3;
            $singapore->consolation_4 = $request->consolation_4;
            $singapore->consolation_5 = $request->consolation_5;
            $singapore->consolation_6 = $request->consolation_6;
            $singapore->consolation_7 = $request->consolation_7;
            $singapore->consolation_8 = $request->consolation_8;
            $singapore->consolation_9 = $request->consolation_9;
            $singapore->consolation_10 = $request->consolation_10;
            $singapore->save();
        }

        Session::flash("status", "success");
        Session::flash('message', 'Data berhasil Ditambahkan.');

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Menambahkan Data Singapore " . Carbon::parse($singapore->date)->isoFormat("dddd, D MMMM Y"),
        ]);



        return redirect()->route("admin.data.singapore.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Singapore $singapore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Singapore $singapore)
    {
        return view("admin.data.singapore.edit", compact("singapore"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Singapore $singapore)
    {
        if($singapore->is_toto) {
            $validatedData = $request->validate([
            'date' => 'required',
            'winning_number_1' => 'required',
            'winning_number_2' => 'required',
            'winning_number_3' => 'required',
            'winning_number_4' => 'required',
            'winning_number_5' => 'required',
            'winning_number_6' => 'required',
            'additional_number' => 'required',
            ]);

            $singapore->date = $request->date;
            $singapore->day = strtolower(Carbon::parse($request->date)->isoFormat("dddd"));
            $singapore->winning_number_1 = $request->winning_number_1;
            $singapore->winning_number_2 = $request->winning_number_2;
            $singapore->winning_number_3 = $request->winning_number_3;
            $singapore->winning_number_4 = $request->winning_number_4;
            $singapore->winning_number_5 = $request->winning_number_5;
            $singapore->winning_number_6 = $request->winning_number_6;
            $singapore->additional_number = $request->additional_number;
            $sumAll = $singapore->winning_number_1 + $singapore->winning_number_2 + $singapore->winning_number_3 + $singapore->winning_number_4 + $singapore->winning_number_5 + $singapore->winning_number_6;
            $double = $sumAll * 2;
            $minusFirst = $double - $singapore->winning_number_1 - $singapore->winning_number_6;
            $addAdditional = $minusFirst + $singapore->additional_number;
            $last2Digits = substr($addAdditional, -2, 2);
            $sumHundred = $singapore->winning_number_4 + $singapore->winning_number_5;
            $secondDigit = substr($sumHundred, -1, 1);
            $sumThousand = $singapore->winning_number_2 + $singapore->winning_number_3;
            $firstDigit = substr($sumThousand, -1, 1);
            $result = sprintf("%s%s%s", $firstDigit, $secondDigit, $last2Digits);
            $singapore->first_prize = $result;
            $singapore->save();

        } else {
            $validatedData = $request->validate([
                'date' => 'required',
                'first_prize' => 'required',
                'second_prize' => 'required',
                'third_prize' => 'required',
                'starter_1' => 'required',
                'starter_2' => 'required',
                'starter_3' => 'required',
                'starter_4' => 'required',
                'starter_5' => 'required',
                'starter_6' => 'required',
                'starter_7' => 'required',
                'starter_8' => 'required',
                'starter_9' => 'required',
                'starter_10' => 'required',
                'consolation_1' => 'required',
                'consolation_2' => 'required',
                'consolation_3' => 'required',
                'consolation_4' => 'required',
                'consolation_5' => 'required',
                'consolation_6' => 'required',
                'consolation_7' => 'required',
                'consolation_8' => 'required',
                'consolation_9' => 'required',
                'consolation_10' => 'required',
            ]);

            $singapore->date = $request->date;
            $singapore->day = strtolower(Carbon::parse($request->date)->isoFormat("dddd"));
            $singapore->first_prize = $request->first_prize;
            $singapore->second_prize = $request->second_prize;
            $singapore->third_prize = $request->third_prize;
            $singapore->starter_1 = $request->starter_1;
            $singapore->starter_2 = $request->starter_2;
            $singapore->starter_3 = $request->starter_3;
            $singapore->starter_4 = $request->starter_4;
            $singapore->starter_5 = $request->starter_5;
            $singapore->starter_6 = $request->starter_6;
            $singapore->starter_7 = $request->starter_7;
            $singapore->starter_8 = $request->starter_8;
            $singapore->starter_9 = $request->starter_9;
            $singapore->starter_10 = $request->starter_10;
            $singapore->consolation_1 = $request->consolation_1;
            $singapore->consolation_2 = $request->consolation_2;
            $singapore->consolation_3 = $request->consolation_3;
            $singapore->consolation_4 = $request->consolation_4;
            $singapore->consolation_5 = $request->consolation_5;
            $singapore->consolation_6 = $request->consolation_6;
            $singapore->consolation_7 = $request->consolation_7;
            $singapore->consolation_8 = $request->consolation_8;
            $singapore->consolation_9 = $request->consolation_9;
            $singapore->consolation_10 = $request->consolation_10;
            $singapore->save();
        }


        Session::flash("status", "success");
        Session::flash('message', 'Data berhasil diperbarui.');

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Mengupdate Data Singapore " . Carbon::parse($singapore->date)->isoFormat("dddd, D MMMM Y"),
        ]);


        return redirect()->route("admin.data.singapore.index");
    }

    public function delete(Singapore $singapore) {
        return view("admin.data.singapore.delete", compact("singapore"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Singapore $singapore)
    {
        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Menghapus Data Singapore " . Carbon::parse($singapore->date)->isoFormat("dddd, D MMMM Y"),
        ]);

        $singapore->delete();

        return redirect()->route("admin.data.singapore.index");
    }


    public function empty(){
        $check_singapore = Singapore::where("date", date("Y-m-d"))->where("is_toto", false)->first();
        if ($check_singapore) {
            return redirect()->route('admin.livedraw.index');
        }
        $singapore = new Singapore();
        $singapore->date = date("Y-m-d");
        $singapore->day = strtolower(Carbon::parse(date("Y-m-d"))->isoFormat("dddd"));
        $singapore->is_toto = false;
        $singapore->save();

        return redirect()->route("admin.livedraw.index");
    }

    public function emptyToto(){
        $check_singapore = Singapore::where("date", date("Y-m-d"))->where("is_toto", true)->first();
        if ($check_singapore) {
            return redirect()->route('admin.livedraw.index');
        }
        $singapore = new Singapore();
        $singapore->date = date("Y-m-d");
        $singapore->day = strtolower(Carbon::parse(date("Y-m-d"))->isoFormat("dddd"));
        $singapore->is_toto = true;
        $singapore->save();

        return redirect()->route("admin.livedraw.index");
    }

    public function countToto() {
        $totos = Singapore::where("is_toto", true)->get();
        foreach($totos as $toto) {
            $sumAll = $toto->winning_number_1 + $toto->winning_number_2 + $toto->winning_number_3 + $toto->winning_number_4 + $toto->winning_number_5 + $toto->winning_number_6;
            $double = $sumAll * 2;
            $minusFirst = $double - $toto->winning_number_1 - $toto->winning_number_6;
            $addAdditional = $minusFirst + $toto->additional_number;
            $last2Digits = substr($addAdditional, -2, 2);
            $sumHundred = $toto->winning_number_4 + $toto->winning_number_5;
            $secondDigit = substr($sumHundred, -1, 1);
            $sumThousand = $toto->winning_number_2 + $toto->winning_number_3;
            $firstDigit = substr($sumThousand, -1, 1);
            $result = sprintf("%s%s%s", $firstDigit, $secondDigit, $last2Digits);
            $toto->first_prize = $result;
            $toto->save();
        }
    }

    public function liveEdit() {
        $last_singapore = Singapore::orderByDesc("date")->where("is_toto", false)->first();

        return view("admin.livedraw.singapore.edit", compact('last_singapore'));
    }

    public function liveEditToto() {
        $last_singapore_toto = Singapore::orderByDesc("date")->where("is_toto", true)->first();

        return view("admin.livedraw.singapore.edit-toto", compact('last_singapore_toto'));
    }
}
