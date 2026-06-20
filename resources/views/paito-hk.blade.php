@extends('layouts.mainlayout')
@section('title', 'Paito Hongkong')

@section('stylesheet')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #000000;
            background-image: url(/wp-content/uploads/2022/09/bgpage.png);
            background-repeat: repeat;
            background-position: 50% 50%;
            overflow-x: hidden;
        }

        header {
            z-index: 100000 !important;
        }

        .nav-link,
        .active {
            font-weight: 700;
        }

        .nav-link:hover {
            color: yellow;
            transform: scale(1.2);
        }

        .navbar-brand {
            position: absolute;
            top: 3px;
            left: 50%;
            transform: translateX(-50%);
        }

        a {
            color: #666;
        }

        a:hover {
            color: #eee;
            text-decoration: none;
        }

        body>.container,
        body>.boxcontainer>.container,
        .navbar .container {
            margin-bottom: 5px;
            max-width: 850px;
            color: #333333;
        }

        body>.container a {
            color: #333333;
        }

        body>.boxcontainer {
            width: 850px;
            max-width: 100%;
            margin: 0 auto;
            box-shadow: 0 0 6px #000000;
        }

        .boxcontainer .navbar {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        #header,
        #topbar {
            background: #000000;
            background: -webkit-linear-gradient(to top, #790202, #000000);
            background: linear-gradient(to top, #790202, #000000);
        }

        #header a,
        #topbar a,
        .navbar-dark .navbar-nav .dropdown-menu a {
            text-decoration: none;
            color: #ffffff;
        }

        .widgettitle {
            background-color: #021b79;
        }

        .widgettitle h3 {
            color: #ffffff;
        }

        #listpasaran a.btn,
        .post-list a.btn,
        .comment-act .btn {
            background-color: #021b79;
            border-color: #011356;
            color: #ffffff;
        }

        #listpasaran a.btn:hover,
        .post-list a.btn:hover,
        .post-list a.btn:focus,
        .comment-act .btn:hover,
        .comment-act .btn:focus {
            background-color: #025ba7;
            border-color: #011356;
            color: #ffffff;
        }

        #listpasaran a.btn:after,
        .post-list a.btn:after {
            border-left-color: #011356 !important;
        }

        #listpasaran a.btn:hover:after,
        .post-list a.btn:hover:after {
            border-left-color: #ffffff !important;
        }

        #footerwidget {
            background-color: #555555;
        }

        #footer {
            background-color: #333333;
        }

        #footer,
        #footer p,
        #footer a {
            color: #ffffff;
        }

        #contentwrap {
            background-color: #f1f1f1;
        }

        .pageside {
            background-color: #ffffff;
            box-shadow: 0 0 3px #000000;
            border-color: #000000;
        }

        #pagecontent .pagetitle,
        #pagecontent .pagetitle a {
            color: #000000;
        }

        body.post .rescir {
            background: #021b79;
            color: #ffffff;
        }

        #nav-main .nav-main,
        #nav-main .sub-menu,
        #nav-main .children {
            z-index: 999999;
        }

        .noselect {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        table {
            border-collapse: collapse;
        }

        table {
            margin: 0 !important;
            width: 100% !important;
        }

        table,
        td,
        th {
            border: 1px solid black;
            cursor: default;
        }

        #drawing-table thead td {
            text-transform: uppercase;
            text-align: center;
            border: 1px solid #d9d9d9;
            background: linear-gradient(45deg, purple, rebeccapurple, magenta, fuchsia) !important;
            padding: 5px 0;
            line-height: 1.4;
        }

        #drawing-table thead td:not(.asux) {
            font-size: 12px;
            color: #FFF !important;
        }

        #drawing-table th.asux {
            background: #808080;
            color: #FFF !important;
            border-top: none !important;
        }

        #drawing-table td {
            background: #FFF;
            color: #000;
            font-weight: bold;
        }

        #drawing-table tr:nth-last-child(5n+1) td {
            background: #e8e4e7;
        }

        #drawing-table td.asux {
            color: #d7d1d1;
            width: 20px;
            font-weight: bold;
        }

        .top {
            background: none repeat scroll 0 0 #ffffff !important;
        }

        .asu {
            font-weight: bold;
            width: 20px;
        }

        .menu2 {
            background: #F0F0F0;
            position: relative;
            width: 100%;
            z-index: 99999;
            padding: 5px;
        }

        #clear {
            float: right;
        }

        #color-selector p {
            display: none;
        }

        .color {
            float: left;
            height: 20px;
            position: relative;
            width: 9.7%;
        }

        .color.eraser {
            background: none repeat scroll 0 0 white;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Red {
            background: none repeat scroll 0 0 #ff5050;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Pink {
            background: none repeat scroll 0 0 #ff99cc;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Green {
            background: none repeat scroll 0 0 #a9d08e;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Violet {
            background: none repeat scroll 0 0 #9966ff;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Teal {
            background: none repeat scroll 0 0 #66ffcc;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Blue {
            background: none repeat scroll 0 0 #9bc2e6;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Grey {
            background: none repeat scroll 0 0 #b2b2b2;
            cursor: pointer;
            border: 1px solid black;
        }

        .color.Orange {
            background: none repeat scroll 0 0 #f4b084;
            cursor: pointer;
            border: 1px solid black;
        }

        .color input {
            background: rgba(0, 0, 0, 0);
            border: 0 none;
            float: right;
            left: 220px;
            position: absolute;
        }

        .colorpicker_submit {
            color: #ffffff;
        }

        .colorpicker {
            z-index: 20;
        }

        .selected {
            border: 1px solid white;
        }

        #btnSubmit {
            float: left;
            margin-top: 0;
            width: 10%;
            cursor: pointer;
            font-size: 12px;
            line-height: 12px;
            height: 20px;
        }

        .asu,
        .asux,
        .asuxx,
        .entry-content td.asu,
        .entry-content td.asux,
        .entry-content td.asuxx {
            padding: 0 !important;
            font-size: 12px !important;
            border-color: #d9d9d9;
        }

        @media (max-width:767px) {

            .asu,
            .asux,
            .asuxx,
            .entry-content td.asu,
            .entry-content td.asux,
            .entry-content td.asuxx {
                font-size: 10px !important;
            }

            #btnSubmit {
                width: auto;
                padding: 0;
            }

            #btnSubmit {
                font-size: 10px !important;
                padding-left: 4px !important;
                padding-right: 4px !important;
            }
        }

        #colormenu.fixed {
            position: fixed;
            top: 0;
            left: 0;
        }

        body.admin-bar #colormenu.fixed {
            top: 32px;
        }

        table,
        td,
        th {
            border-color: #FFF;
        }

        .dayprint th {
            font-size: 11px;
            padding: 3px 0;
            background: #3e3e3e;
            color: #FFF;
            font-weight: bold;
            text-align: center;
        }

        #drawing-table td {
            text-align: center;
        }

        #btnSubmit {
            padding: 0;
        }

        .e1 {
            background-color: red !important;
            color: white !important;
        }

        .k1 {
            background-color: green !important;
            color: white !important;
        }

        .c1 {
            background-color: blue !important;
            color: white !important;
        }

        .a1 {
            background-color: orange !important;
            color: white !important;
        }

        a {
            text-decoration: none;
        }

        .box-ads {
            width: 100%;
            justify-content: space-evenly;
        }

        .box1,
        .box2 {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }

        .box1 img,
        .box2 img {
            width: 100%;
            margin-top: 10px;
        }

        header {
            z-index: 100000;
        }

        .main-logo {
            width: 116px;
            height: 42px;
        }

        header {
            z-index: 100;
        }

        .cell-gradient {
            background-image: -moz-linear-gradient(90deg, #feed41 0%, #ff6f01 100%);
            background-image: -webkit-linear-gradient(90deg, #feed41 0%, #ff6f01 100%);
            background-image: -ms-linear-gradient(90deg, #feed41 0%, #ff6f01 100%);
            font-family: "Chakra Petch", Arial, Helvetica, sans-serif;
            color: #000000;
        }
    </style>
@endsection

@section('content')
    <div class="d-flex w-100 font-weight-bolder fs-1 justify-content-center button-gradient">
        <label>PAITO HONGKONG</label>
    </div>

    <form id="selectForm">
        <div class="row no-gutters justify-content-center mt-3 mb-4">
            <div class="col-2 px-1"><input maxlength="1" placeholder="as" class="cari form-control form-control-sm text-center"
                    type="text" id="asc" style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><input maxlength="1" placeholder="kop"
                    class="cari form-control form-control-sm text-center" type="text" id="kopc"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><input maxlength="1" placeholder="kepala"
                    class="cari form-control form-control-sm text-center" type="text" id="kepalac"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><input maxlength="1" placeholder="ekor"
                    class="cari form-control form-control-sm text-center" type="text" id="ekorc"
                    style="background:#FFF;" autocomplete="off"></div>
            <div class="col-2 px-1"><button id="rb" type="button" class="btn btn-dark btn-sm"
                    onclick="resetSelectForm()">Clear</button></div>
        </div>
    </form>

    <div class="col-12 d-flex gap-3 d-lg-none">
        <div class="col">
            <div class="button-gradient text-center">
                <a href="{{ route('paito.sydney') }}" class="text-white text-decoration-none">
                    PAITO <br> SYDNEY
                </a>
            </div>
        </div>
        <div class="col">
            <div class="button-gradient text-center">
                <a href="{{ route('paito.singapore') }}" class="text-white text-decoration-none">
                    PAITO <br> SINGAPORE
                </a>
            </div>
        </div>
    </div>

    <form method="get" action="" class="mb-2 mt-2" id="paitoHk"></form>
    <div class="menu2" id="colormenu">
        <fieldset id="color-selector">
            <button id="btnSubmit" class="col">CLEAR</button>
            <div class="color col" style="background:#ff5050;" data-color="#ff5050"></div>
            <div class="color col" style="background:#ff99cc;" data-color="#ff99cc"></div>
            <div class="color col" style="background:#a9d08e;" data-color="#a9d08e"></div>
            <div class="color col" style="background:#9966ff;" data-color="#9966ff"></div>
            <div class="color col" style="background:#66ffcc;" data-color="#66ffcc"></div>
            <div class="color col" style="background:#9bc2e6;" data-color="#9bc2e6"></div>
            <div class="color col" style="background:#b2b2b2;" data-color="#b2b2b2"></div>
            <div class="color col" style="background:#f4b084;" data-color="#f4b084"></div>
            <div class="color col  eraser" data-color="eraser"></div>
        </fieldset>
    </div>
    <table id="drawing-table" class="noselect mt-2 mb-3" border="1" width="100">
        <thead>
            <tr>
                <th class="cell-gradient text-center" colspan="4"><b>Senin</b></th>
                <th class="cell-gradient text-center">D</th>

                <th class="cell-gradient text-center" colspan="4"><b>Selasa</b></th>
                <th class="cell-gradient text-center">D</th>

                <th class="cell-gradient text-center" colspan="4"><b>Rabu</b></th>
                <th class="cell-gradient text-center">D</th>

                <th class="cell-gradient text-center" colspan="4"><b>Kamis</b></th>
                <th class="cell-gradient text-center">D</th>

                <th class="cell-gradient text-center" colspan="4"><b>Jumat</b></th>
                <th class="cell-gradient text-center">D</th>

                <th class="cell-gradient text-center" colspan="4"><b>Sabtu</b></th>
                <th class="cell-gradient text-center">D</th>

                <th class="cell-gradient text-center" colspan="4"><b>Minggu</b></th>
                <th class="cell-gradient text-center">D</th>
            </tr>
        </thead>
        @php
            use App\Models\Hongkong;
            $data_hk = Hongkong::orderByDesc('date')
                ->get()
                ->groupBy(function ($item) {
                    return Carbon\Carbon::parse($item->date)
                        ->startOfWeek(Carbon\Carbon::MONDAY)
                        ->format('Y-m-d');
                });
        @endphp
        <tbody>
            @foreach ($data_hk as $week => $items)
                <tr>
                    @php
                        // Initialize an array to hold each day's data
$days = [
    'senin' => null,
    'selasa' => null,
    'rabu' => null,
    'kamis' => null,
    'jumat' => null,
    'sabtu' => null,
    'minggu' => null,
];

// Loop through items and assign them to the correct day
foreach ($items as $item) {
    $dayOfWeek = Carbon\Carbon::parse($item->date)->format('l'); // Get the day of the week

    // Assign item to corresponding day
    switch ($dayOfWeek) {
        case 'Monday':
            $days['senin'] = $item;
            break;
        case 'Tuesday':
            $days['selasa'] = $item;
            break;
        case 'Wednesday':
            $days['rabu'] = $item;
            break;
        case 'Thursday':
            $days['kamis'] = $item;
            break;
        case 'Friday':
            $days['jumat'] = $item;
            break;
        case 'Saturday':
            $days['sabtu'] = $item;
            break;
        case 'Sunday':
            $days['minggu'] = $item;
                                    break;
                            }
                        }
                    @endphp

                    <!-- Loop through days to create the table cells -->
                    @foreach ($days as $day => $item)
                        @if ($item)
                            <td class="asu">{{ substr($item->first_result, 0, 1) }}</td>
                            <td class="asu">{{ substr($item->first_result, 1, 1) }}</td>
                            <td class="asu">{{ substr($item->first_result, 2, 1) }}</td>
                            <td class="asu">{{ substr($item->first_result, 3, 1) }}</td>
                            <td class="asux">
                                {{ intval(substr($item->first_result, 2, 1)) + intval(substr($item->first_result, 3, 1)) < 10
                                    ? intval(substr($item->first_result, 2, 1)) + intval(substr($item->first_result, 3, 1))
                                    : intval(
                                            substr(
                                                (string) (intval(substr($item->first_result, 2, 1)) + intval(substr($item->first_result, 3, 1))),
                                                0,
                                                1,
                                            ),
                                        ) +
                                        intval(
                                            substr(
                                                (string) (intval(substr($item->first_result, 2, 1)) + intval(substr($item->first_result, 3, 1))),
                                                1,
                                                1,
                                            ),
                                        ) }}
                            </td>
                        @else
                            <!-- If no data for this day, display placeholder cells -->
                            <td class="asu">-</td>
                            <td class="asu">-</td>
                            <td class="asu">-</td>
                            <td class="asu">-</td>
                            <td class="asux">-</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>

    </table>

    <script>
        var patType = '4d';
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/storage/hk/script-live.js"></script>
    <script type="text/javascript" src="/storage/hk/script-lite.js"></script>
    <script type="text/javascript" src="/storage/hk/script-site.js"></script>

@endsection
