<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Status;
use App\Models\History;
use App\Models\SiteEvent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CommentWinner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SiteEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role_id <= 4) {
            $events = SiteEvent::with('status', 'site', 'eventComments', 'eventComments.winnerList')->latest()->paginate(30);
        } else {
            $events = SiteEvent::with('status', 'site', 'eventComments', 'eventComments.winnerList')->where('status_id', '!=', 5)->latest()->paginate(30);
        }

        return view('admin.site-events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::all();
        $sites = Site::all();

        return view('admin.site-events.create', compact('statuses', 'sites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'terms' => 'required|string',
            'share_link' => 'required|string|max:255',
            'photo' => 'required|image|mimes:png,jpg,jpeg,webp',
            'site_id' => 'required',
            'status_id' => 'required',
            'date' => 'required',
        ]);

        $extension = $request->file('photo')->getClientOriginalExtension();
        $newname = str_replace(' ', '-', Str::lower($request->title)) . "-" . time() . ".$extension";
        $request->file('photo')->storeAs('events', $newname);
        $image_path = "/storage/events/$newname";

        $picture_folder = Str::random(10);

        $event = SiteEvent::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', Str::lower($request->title)),
            'terms' => $request->terms,
            'share_link' => $request->share_link,
            'image' => $image_path,
            'site_id' => $request->site_id,
            'status_id' => $request->status_id,
            'date' => $request->date,
            'picture_folder' => $picture_folder,
        ]);



        if ($request->need_upload) {
            $event->need_upload = true;
            $event->save();
        }

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Membuat Event Baru');

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteEvent $event)
    {
        return view('admin.site-events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteEvent $event)
    {
        $statuses = Status::all();
        $sites = Site::all();

        return view('admin.site-events.edit', compact('event', 'statuses', 'sites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteEvent $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'terms' => 'required',
            'share_link' => 'required|string|max:255',
            'site_id' => 'required',
            'status_id' => 'required',
            'date' => 'required',
        ]);

        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $newname = str_replace(' ', '-', Str::lower($request->title)) . "-" . time() . ".$extension";

            $request->file('photo')->storeAs('events', $newname);

            $image_path = "/storage/events/$newname";
            $event->image = $image_path;
        }

        if ($request->need_upload) {
            $event->need_upload = true;
        }

        $event->title = $request->title;
        $event->slug = str_replace(' ', '-', Str::lower($request->title));
        $event->terms = $request->terms;
        $event->share_link = $request->share_link;
        $event->date = $request->date;
        $event->site_id = $request->site_id;
        $event->status_id = $request->status_id;
        $event->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate Event');

        return redirect()->route('events.index');
    }

    public function updateStatus(Request $request, SiteEvent $event)
    {
        $status = (int) $request->input('status');
        $allowedStatuses = [1, 2, 4];

        if (!in_array($status, $allowedStatuses, true)) {
            abort(404);
        }

        $event->status_id = $status;
        $event->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Status event berhasil diupdate');

        return redirect()->route('events.index', $request->except(['_token', 'status']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteEvent $event)
    {
        $storage_path = substr($event->image, 9);
        // dd($storage_path, $event->image);
        Storage::delete($storage_path);



        $event->delete();

        History::create([
            'name' => Auth::user()->name,
            'title' => Auth::user()->name . " Hapus Lomba $event->title",
        ]);

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Event');

        return redirect()->route('events.index');
    }
}
