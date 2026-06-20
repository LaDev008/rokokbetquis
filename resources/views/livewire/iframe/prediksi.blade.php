<div class="container-fluid text-white">

    <style>
        .box {
            position: relative;
            width: 100%;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            -webkit-box-reflect: below 0 linear-gradient(transparent, transparent, #0005);
        }

        .box .loader {
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            animation: animateLoading 2s linear infinite;
        }

        .box .loader:nth-child(2),
        .box .loader:nth-child(4) {
            animation-delay: -1s;
            filter: hue-rotate(290deg);
        }

        @keyframes animateLoading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .box .loader:nth-child(1)::before,
        .box .loader:nth-child(2)::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(to top, transparent, rgba(0, 255, 249, 0.5));
            background-size: 25px 45px;
            background-repeat: no-repeat;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .loader i {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background: #00fff9;
            border-radius: 50%;
            box-shadow: 0 0 10px #00fff9,
                0 0 5px #00fff9,
                0 0 7.5px #00fff9,
                0 0 10px #00fff9,
                0 0 12.5px #00fff9,
                0 0 15px #00fff9,
                0 0 17.5px #00fff9,
                0 0 20px #00fff9,
                0 0 22.5px #00fff9,
                0 0 25px #00fff9;
            z-index: 10;
        }

        .box .loader span {
            position: absolute;
            inset: 5px;
            background: #000;
            border-radius: 50%;
            z-index: 1;
        }

        .purple-theme {
            background-image: -moz-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            background-image: -webkit-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            background-image: -ms-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            font-family: 'Chakra Petch', sans-serif;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-12 g-0">
            <table
                class="table-bordered border-light table border-2 border text-center text-white bg-dark align-middle mb-0"
                style="height:100vh">
                <thead>
                    <tr class="purple-theme">
                        <td colspan="3" class="fs-5 fw-semibold">PREDIKSI {{ $market->name }}</td>
                    </tr>
                </thead>
                <tbody class="fs-5 fw-bold">
                    <tr>
                        <td colspan="2">TANGGAL :
                            {{ Carbon\Carbon::parse($market->updated_at)->addDay()->isoFormat('dddd, D MMMM YYYY') }}
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="purple-theme fw-semibold">BBFS</td>
                        <td>{{ $market->bbfs }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="purple-theme fw-semibold">ANGKA MAIN</td>
                        <td>{{ $market->angka_main }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="purple-theme fw-semibold">COLOK BEBAS</td>
                        <td>{{ $market->colok_bebas }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="purple-theme fw-semibold">COLOK MACAU</td>
                        <td>{{ $market->colok_macau }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="purple-theme fw-semibold">COLOK SHIO</td>
                        <td>{{ $market->shio }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="purple-theme fw-semibold" rowspan="2">ANGKA 2D</td>
                        <td>{{ $market->dua_d1 . ' * ' . $market->dua_d2 . ' * ' . $market->dua_d3 . ' * ' . $market->dua_d4 . ' * ' . $market->dua_d5}}</td>
                    </tr>
                    <tr>
                        <td>{{$market->dua_d6 . ' * ' . $market->dua_d7 . ' * ' . $market->dua_d8 . ' * ' . $market->dua_d9 . ' * ' . $market->dua_d10 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
