<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navigations = Navigation::all();

        return view('admin.navigation.index', compact('navigations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.navigation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'route' => 'required|max:255'
        ]);

        Navigation::create([
            'name' => $request->name,
            'link' => $request->link,
            'route_name' => $request->route,
        ]);

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Menambah Navigasi Baru');

        return redirect()->route('navigations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navigation $navigation)
    {
        return view('admin.navigation.edit', compact('navigation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Navigation $navigation)
    {
        $request->validate([
            'name' => 'string|max:255',
            'link' => 'string|max:255',
            'route' => 'max:255',
        ]);


        $navigation->name = $request->name;
        $navigation->link = $request->link;
        $navigation->route_name = $request->route;
        $navigation->save();


        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengedit Navigasi');

        return redirect()->route('navigations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navigation $navigation)
    {
        $navigation->delete();

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Navigasi');

        return redirect()->route('navigations.index');
    }
}
