<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SiteEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PredictMarket;

class HomeNavigation extends Controller
{
    public function index()
    {
        $page = Page::find(1);

        return view('home', compact( 'page'));
    }

    public function lomba()
    {
        $events = SiteEvent::with('status', 'eventComments')->where('status_id', "!=", "5")->latest()->limit(20)->get();

        return view('event', compact('events'));
    }

    public function predict()
    {
        $predicts = PredictMarket::all();

        return view('prediction', compact('predicts'));
    }
}
