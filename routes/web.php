<?php

use App\Http\Controllers\Admin\AdminNavigationController;
use App\Http\Controllers\HomeNavigation;
use App\Http\Controllers\HongkongController;
use App\Http\Controllers\SingaporeController;
use App\Http\Controllers\SydneyController;
use Carbon\Carbon;
use App\Models\Page;
use App\Models\Site;
use App\Models\Dreambook;
use App\Models\EventComment;
use App\Models\PredictMarket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MacauController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SeoPageController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\DreambookController;
use App\Http\Controllers\SiteEventController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PredictMarketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home navigation
Route::get('/', [HomeNavigation::class, 'index'])->name('home');

Route::get('/lomba-freechip', [HomeNavigation::class, 'lomba'])->name('event');

Route::get('/prediction', [HomeNavigation::class, 'predict'])->name('prediction');

Route::prefix('livedraw')->group(function () {
    Route::get('/sydney', function () {
        return view('livedraw.sydney');
    })->name('livedraw.sydney');

    Route::get('/singapore', function () {
        return view('livedraw.singapore');
    })->name('livedraw.singapore');

    Route::get('/hongkong', function () {
        return view('livedraw.hongkong');
    })->name('livedraw.hongkong');

    Route::get('/macau', function () {
        return view('livedraw.macau');
    })->name('livedraw.macau');

    Route::get('/kingkong', function () {
        return view('livedraw.kingkong');
    })->name('livedraw.kingkong');
});

Route::get('/site-list', function () {
    $sites = Site::all();

    return view('site', compact('sites'));
})->name('site');


Route::prefix('data')->group(function () {
    Route::get('/sydney', function () {
        return view('data.sydney');
    })->name('data.sydney');

    Route::get('/singapore', function () {
        return view('data.singapore');
    })->name('data.singapore');

    Route::get('/hongkong', function () {
        return view('data.hongkong');
    })->name('data.hongkong');

    Route::get('/macau', function () {
        // $macaus = Macau::latest('date')->take(30)->get();
        // return view('data.macau', compact('macaus'));
        return view('data.macau');
    })->name('data.macau');
});

Route::prefix('paito')->group(function () {
    Route::get("/sdy", function () {
        $page = Page::find(1);

        return view('paito-sdy', compact('page'));
    })->name('paito.sydney');

    Route::get("/sgp", function () {
        $page = Page::find(1);

        return view('paito-sgp', compact('page'));
    })->name('paito.singapore');

    Route::get("/hk", function () {
        $page = Page::find(1);

        return view('paito-hk', compact('page'));
    })->name('paito.hongkong');
});

Route::get('/buku-mimpi-erek-erek-2d', function () {
    $dreambooks = Dreambook::all();

    return view("dreambook", compact('dreambooks'));
})->name('dreambook');

Route::prefix('tools')->group(function () {
    Route::get('/prediksi/{slug}', function ($slug) {
        $predict = PredictMarket::where("slug", $slug)->first();
        return view('predict-table', compact('predict'));
    });



    Route::get('/bbfs', function () {

        return view('bbfs');
    })->name('bbfs');

    Route::get('/toto-calculator', function () {
        return view('calculator');
    })->name('calculator');
});

Route::prefix('liveframe')->group(function () {
    Route::get('/hk', function () {
        return view('iframe-hk');
    })->name('iframe.hk');

    Route::get('/macau', function () {
        return view('iframe-macau');
    })->name('iframe.macau');

    Route::get('/sdy', function () {
        return view('iframe-sdy');
    })->name('iframe.sdy');

    Route::get('/sgp', function () {
        return view('iframe-sgp');
    })->name('iframe.sgp');

    Route::get('/sgp-toto', function () {
        return view('iframe-sgp-toto');
    })->name('iframe.sgp-toto');

    Route::get('/pattani', function () {
        return view('iframe-pattani');
    })->name('iframe.pattani');

    Route::get('/pratunam', function () {
        return view('iframe-pratunam');
    })->name('iframe.pratunam');

    Route::get('/chatucak', function () {
        return view('iframe-chatucak');
    })->name('iframe.chatucak');

    Route::get('/krabi', function () {
        return view('iframe-krabi');
    })->name('iframe.krabi');
});

Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'storeRegister']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('/login', [AuthController::class, 'authenticating'])->middleware(['guest']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(['auth']);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return redirect()->route('events.index');
    });
    Route::get('/complaints', [ComplainController::class, 'index'])->name('complaints.index');
    Route::get('/dashboard', [AdminNavigationController::class, 'dashboard'])->name('dashboard');

    // Admin Livedraw
    Route::get("/livedraw", function () {
        return view("admin.livedraw");
    })->name("admin.livedraw.index");

    // Sydney
    Route::get("/sydney", [SydneyController::class, 'index'])->name("admin.data.sydney.index");
    Route::get("/sydney/create", [SydneyController::class, 'create'])->name("admin.data.sydney.create");
    Route::post("/sydney/create", [SydneyController::class, 'store'])->name("admin.data.sydney.store");
    Route::get("/data/sydney/{sydney}", [SydneyController::class, 'edit'])->name("admin.data.sydney.edit");
    Route::put("/data/sydney/{sydney}/update", [SydneyController::class, 'update'])->name("admin.data.sydney.update");
    Route::get("/data/sydney/{sydney}/delete", [SydneyController::class, 'delete'])->name("admin.data.sydney.delete");
    Route::delete("/data/sydney/{sydney}/delete", [SydneyController::class, 'destroy'])->name("admin.data.sydney.destroy");
    Route::get("/livedraw/sydney/create", [SydneyController::class, 'empty'])->name("admin.livedraw.sydney.create");
    Route::get("/livedraw/sydney/edit/{sydney}", [SydneyController::class, 'liveEdit'])->name("admin.livedraw.sydney.edit");

    // Hongkong
    Route::get("/hongkong", [HongkongController::class, 'index'])->name("admin.data.hongkong.index");
    Route::get("/data/hongkong/create", [HongkongController::class, 'create'])->name("admin.data.hongkong.create");
    Route::post("/data/hongkong/store", [HongkongController::class, 'store'])->name("admin.data.hongkong.store");
    Route::get("/data/hongkong/{hongkong}", [HongkongController::class, 'edit'])->name("admin.data.hongkong.edit");
    Route::put("/data/hongkong/{hongkong}/update", [HongkongController::class, 'update'])->name("admin.data.hongkong.update");
    Route::get("/data/hongkong/{hongkong}/delete", [HongkongController::class, 'delete'])->name("admin.data.hongkong.delete");
    Route::delete("/data/hongkong/{hongkong}/delete", [HongkongController::class, 'destroy'])->name("admin.data.hongkong.destroy");
    Route::get("/livedraw/hongkong/create", [HongkongController::class, 'empty'])->name("admin.livedraw.hongkong.create");
    Route::get("/livedraw/hongkong/edit/{hongkong}", [HongkongController::class, 'liveEdit'])->name("admin.livedraw.hongkong.edit");

    // Singapore
    Route::get("/singapore", [SingaporeController::class, 'index'])->name("admin.data.singapore.index");
    Route::get("/data/singapore/create", [SingaporeController::class, 'create'])->name("admin.data.singapore.create");
    Route::post("/data/singapore/store", [SingaporeController::class, 'store'])->name("admin.data.singapore.store");
    Route::get("/data/singapore/{singapore}", [SingaporeController::class, 'edit'])->name("admin.data.singapore.edit");
    Route::put("/data/singapore/{singapore}/update", [SingaporeController::class, 'update'])->name("admin.data.singapore.update");
    Route::get("/data/singapore/{singapore}/delete", [SingaporeController::class, 'delete'])->name("admin.data.singapore.delete");
    Route::delete("/data/singapore/{singapore}/delete", [SingaporeController::class, 'destroy'])->name("admin.data.singapore.destroy");
    Route::get("/livedraw/singapore/create", [SingaporeController::class, 'empty'])->name("admin.livedraw.singapore.create");
    Route::get("/livedraw/singapore/toto/create", [SingaporeController::class, 'emptyToto'])->name("admin.livedraw.singapore.toto.create");
    Route::get("/livedraw/singapore/edit/{singapore}", [SingaporeController::class, 'liveEdit'])->name("admin.livedraw.singapore.edit");
    Route::get("/livedraw/singapore/edit/toto/{singapore}", [SingaporeController::class, 'liveEditToto'])->name("admin.livedraw.singapore.toto.edit");
    Route::get("/singapore/count/all/toto", [SingaporeController::class, 'countToto']);

    // Macau
    Route::get("/macau", [MacauController::class, 'index'])->name("admin.data.macau.index");
    Route::get("/data/macau/{macau}", [MacauController::class, 'edit'])->name("admin.data.macau.edit");
    Route::put("/data/macau/{macau}/update", [MacauController::class, 'update'])->name("admin.data.macau.update");
    Route::get("/data/macau/{macau}/delete", [MacauController::class, 'delete'])->name("admin.data.macau.delete");
    Route::delete("/data/macau/{macau}/delete", [MacauController::class, 'destroy'])->name("admin.data.macau.destroy");
    Route::get("/livedraw/macau/create", [MacauController::class, 'empty'])->name("admin.livedraw.macau.create");
    Route::get("/livedraw/macau/edit/{macau}", [MacauController::class, 'liveEdit'])->name("admin.livedraw.macau.edit");

    Route::resources([
        'page' => PageController::class,
        'navigations' => NavigationController::class,
        'seos' => SeoPageController::class,
        'macaus' => MacauController::class,
        'predicts' => PredictMarketController::class,
        'dreambooks' => DreambookController::class,
        'sites' => SiteController::class,
        'statuses' => StatusController::class,
        'events' => SiteEventController::class,
        'users' => UserController::class,
    ]);

    Route::post('/events/{event}/status', [SiteEventController::class, 'updateStatus'])->name('events.status');

    Route::resource('histories', HistoryController::class)->only('index');

    Route::get('/page-image', function () {

        $page = Page::find(1);
        return view('admin.page.image', compact('page'));
    })->name('admin.page.image');
});

Route::get("/flush-bukti-jp", function () {
    if (Auth::user()->role_id != 1) {
        return abort(403);
    } else {
        $date = Carbon::today()->subDays(3);
        $proves = EventComment::where("created_at", "<=", $date)->get();
        $counter = 0;

        foreach ($proves as $item) {
            $storage_path = substr($item->image, 9);
            Storage::delete($storage_path);
            $counter += 1;
        }

        return "Selesai Menghapus " . $counter . " Gambar";
    }
})->middleware(["auth", "admin"]);
