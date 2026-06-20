<div class="container-fluid text-white" wire:poll.5000ms="liveHongkong">
    <style>
        .hongkong-theme {
            background-image: -moz-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            background-image: -webkit-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            background-image: -ms-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            box-shadow: 0px 3px 2.91px 0.09px rgba(0, 0, 0), inset #ffffff40 2px 2px 4px, inset -2px -2px 4px black;
            font-family: 'Chakra Petch', sans-serif;
        }

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
    </style>

    <div class="row justify-content-center">
        <div class="col-12 p-0">
            <table class="table-bordered border-info fw-bold fs-6 table border-2 border text-center text-white bg-dark align-middle mb-0" style="height:100vh">
                <thead>
                    <tr class="hongkong-theme">
                        <td class="fs-5" colspan="4">Hongkong POOLS</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="font-digital">Last Result : {{ $hk_last_result }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="2">Prize 1</td>
                        <td colspan="2">
                            @if ($hk_p1 == '-')
                                <x-loader />
                            @else
                                {{ $hk_p1 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="2">Prize 2</td>
                        <td colspan="2">
                            @if ($hk_p2 == '-')
                                <x-loader />
                            @else
                                {{ $hk_p2 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="hongkong-theme" colspan="2">Prize 3</td>
                        <td colspan="2">
                            @if ($hk_p3 == '-')
                                <x-loader />
                            @else
                                {{ $hk_p3 }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
