<div class="container-fluid g-0 text-white" wire:poll.5000ms="liveSingapore">

    <style>
        .singapore-theme {
            background-image: -moz-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            background-image: -webkit-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
            background-image: -ms-linear-gradient(90deg, rgb(81, 0, 136) 0%, rgb(152, 0, 255) 50%, rgb(81, 0, 136) 100%);
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

        <div class="col-12 g-0">
            <table
                class="table-bordered border-info fw-bold fs-5 table border-2 border text-center text-white bg-dark mb-0 align-middle"
                style="height: 100vh">
                <thead>
                    <tr class="singapore-theme">
                        <th class="fs-3 border-right-0" colspan="6" style="border-right: none">Singapore
                            Toto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" class="border-left-0 font-digital" style="border-left: none">Last Result
                            :
                            {{ $sgp_toto_last_result }}
                        </td>
                    </tr>
                    <tr>
                        <td class="singapore-theme" colspan="6">Winning Number</td>
                    </tr>
                    <tr>
                        <td>
                            @if ($sgp_toto_winning_number1 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_winning_number1 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_toto_winning_number2 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_winning_number2 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_toto_winning_number3 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_winning_number3 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_toto_winning_number4 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_winning_number4 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_toto_winning_number5 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_winning_number5 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_toto_winning_number6 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_winning_number6 }}
                            @endif
                        </td>
                    <tr>
                        <td class="singapore-theme" colspan="6">Additional Number</td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            @if ($sgp_toto_additional_number == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_additional_number }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="singapore-theme" colspan="6">Result</td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            @if ($sgp_toto_result == '-')
                                <x-loader />
                            @else
                                {{ $sgp_toto_result }}
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>




</div>
