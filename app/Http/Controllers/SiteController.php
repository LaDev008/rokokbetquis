<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();

        return view('admin.sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|max:255',
            'photo' => 'required|file|mimes:png,jpg,jpeg,webp,gif',
        ]);


        $extension = $request->file('photo')->getClientOriginalExtension();

        $newname = str_replace(' ', '-', $request->name) . ".$extension";

        $storedPath = $request->file('photo')->storeAs('sites', $newname, 'public');

        $image_path = $this->buildPublicStorageUrl($storedPath);
        $mirrorWritten = $this->mirrorPublicStorageFile($storedPath);
        $debugInfo = $this->buildSiteUploadDebug($request->file('photo'), $storedPath, $image_path, $mirrorWritten);
        Log::info('Site upload debug', $debugInfo);

        $site = Site::create([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $image_path,
            'minimal_bet' => $request->minimal_bet,
            'minimal_deposit' => $request->minimal_deposit,
            'minimal_withdraw' => $request->minimal_withdraw,
            'bbfs' => $request->bbfs,
            'top_promo' => $request->top_promo,
            'service' => $request->service,
            'markets' => $request->markets,
            'bet_type' => $request->bet_type,
            'deposit_bank' => $request->deposit_bank,
            'deposit_ewallet' => $request->deposit_ewallet,
        ]);

        if ($site) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Membuat Situs Baru');
            Session::flash('site_upload_debug', $debugInfo);

            return redirect()->route('sites.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        return view('admin.sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'photo' => 'nullable|file|mimes:png,jpg,jpeg,webp,gif',
        ]);

        if ($request->file('photo')) {
            $storage_path = $this->extractStorageRelativePath($site->image);
            Storage::disk('public')->delete($storage_path);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $newname = str_replace(' ', '-', $request->name) . ".$extension";

            $storedPath = $request->file('photo')->storeAs('sites', $newname, 'public');

            $image_path = $this->buildPublicStorageUrl($storedPath);
            $mirrorWritten = $this->mirrorPublicStorageFile($storedPath);
            $debugInfo = $this->buildSiteUploadDebug($request->file('photo'), $storedPath, $image_path, $mirrorWritten);
            Log::info('Site upload debug', $debugInfo);
            Session::flash('site_upload_debug', $debugInfo);
            $site->image = $image_path;
        }

        $site->name = $request->name;
        $site->link = $request->link;
        $site->minimal_bet = $request->minimal_bet;
        $site->minimal_deposit = $request->minimal_deposit;
        $site->minimal_withdraw = $request->minimal_withdraw;
        $site->bbfs = $request->bbfs;
        $site->top_promo = $request->top_promo;
        $site->service = $request->service;
        $site->markets = $request->markets;
        $site->bet_type = $request->bet_type;
        $site->deposit_bank = $request->deposit_bank;
        $site->deposit_ewallet = $request->deposit_ewallet;
        $site->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate Situs');

        return redirect()->route('sites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        $storage_path = $this->extractStorageRelativePath($site->image);
        Storage::disk('public')->delete($storage_path);

        $site->delete();

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Situs');

        return redirect()->route('sites.index');
    }

    private function buildSiteUploadDebug(UploadedFile $photo, string $storedPath, string $imagePath, bool $mirrorWritten): array
    {
        $diskAbsolutePath = Storage::disk('public')->path($storedPath);
        $publicAbsolutePath = public_path(ltrim($this->extractPublicPathFromImage($imagePath), '/'));
        $publicStoragePath = public_path('storage');

        return [
            'original_name' => $photo->getClientOriginalName(),
            'stored_disk' => 'public',
            'stored_relative_path' => $storedPath,
            'stored_absolute_path' => $diskAbsolutePath,
            'stored_file_exists' => file_exists($diskAbsolutePath),
            'saved_image_url' => $imagePath,
            'public_absolute_path' => $publicAbsolutePath,
            'public_file_exists' => file_exists($publicAbsolutePath),
            'public_storage_path' => $publicStoragePath,
            'public_storage_is_symlink' => is_link($publicStoragePath),
            'public_storage_is_directory' => is_dir($publicStoragePath),
            'mirror_written' => $mirrorWritten,
            'warning' => !is_link($publicStoragePath)
                ? 'Folder public/storage saat ini bukan symlink aktif. File baru bisa tersimpan di storage/app/public tapi tidak otomatis muncul di public/storage.'
                : null,
        ];
    }

    private function buildPublicStorageUrl(string $storedPath): string
    {
        return '/storage/' . str_replace('\\', '/', ltrim($storedPath, '/'));
    }

    private function extractPublicPathFromImage(string $imagePath): string
    {
        return parse_url($imagePath, PHP_URL_PATH) ?: $imagePath;
    }

    private function extractStorageRelativePath(string $imagePath): string
    {
        $publicPath = $this->extractPublicPathFromImage($imagePath);

        return ltrim(Str::after($publicPath, '/storage/'), '/');
    }

    private function mirrorPublicStorageFile(string $storedPath): bool
    {
        $sourcePath = Storage::disk('public')->path($storedPath);
        $publicStoragePath = public_path('storage');
        $targetPath = public_path('storage/' . str_replace('/', DIRECTORY_SEPARATOR, $storedPath));
        $targetDirectory = dirname($targetPath);

        if (!file_exists($sourcePath)) {
            return false;
        }

        if (is_link($publicStoragePath)) {
            return false;
        }

        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        return copy($sourcePath, $targetPath);
    }
}
