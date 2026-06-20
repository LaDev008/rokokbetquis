<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SeoPage;
use App\Models\Navigation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SeoPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seos = SeoPage::with('navigation')->get();


        return view('admin.seo.index', compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $navigations = Navigation::all();

        return view('admin.seo.create', compact('navigations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'navigation_id' => 'required',
            'meta_description' => 'required|string|max:255',
            'meta_keywords' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]);

        $navigation = Navigation::find($request->navigation_id);

        $page = Page::find(1);

        if ($request->article) {
            $pecah1 = explode('<h1', $request->article);
            $pecah2 = explode('">', $pecah1[1]);
            $pecah3 = explode('</h1>', $pecah2[1]);
            $title = $pecah3[0];
        } else {
            $title = "Prediksi Paman Sam";
        }

        // $canonical_sub = Str::lower(str_replace(' ', '-', $title));
        // $canonical_sub = str_replace(',', '|', $canonical_sub);
        // $canonical_sub = str_replace('%', '%25', $canonical_sub);

        $canonical = "$page->link$navigation->link";

        $seo = SeoPage::create([
            'title' => $title,
            'navigation_id' => $request->navigation_id,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'meta_canonical' => $canonical,
            'meta_site_name' => $page->main_slogan,
            'author' => $request->author,
            'article' => $request->article,
        ]);

        if ($seo) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Membuat SEO Page');

            return redirect()->route('seos.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SeoPage $seoPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $seoPage = SeoPage::find($id);
        $navigations = Navigation::all();

        return view('admin.seo.edit', compact('navigations', 'seoPage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'navigation_id' => 'required',
            'meta_description' => 'required|string|max:255',
            'meta_keywords' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'article' => 'required',
        ]);

        $navigation = Navigation::find($request->navigation_id);

        $seoPage = SeoPage::find($id);

        $page = Page::find(1);

        $pecah1 = explode('<h1', $request->article);
        $pecah2 = explode('">', $pecah1[1]);
        $pecah3 = explode('</h1>', $pecah2[1]);
        $title = $pecah3[0];

        // $canonical_sub = Str::lower(str_replace(' ', '-', $title));
        // $canonical_sub = str_replace(',', '|', $canonical_sub);
        // $canonical_sub = str_replace('%', '%25', $canonical_sub);

        $canonical = "$page->link$navigation->link";

        $seoPage->title = $title;
        $seoPage->navigation_id = $request->navigation_id;
        $seoPage->meta_description = $request->meta_description;
        $seoPage->meta_keywords = $request->meta_keywords;
        $seoPage->meta_canonical = $canonical;
        $seoPage->meta_site_name = $page->main_slogan;
        $seoPage->author = $request->author;
        $seoPage->article = $request->article;
        $seoPage->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate SEO Page');

        return redirect()->route('seos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = SeoPage::find($id);

        Session::flash('message', 'Berhasil Menghapus Seo Page ' . $page->navigation->name);
        $page->delete();
        Session::flash('status', 'warning');

        return redirect()->route('seos.index');
    }
}
