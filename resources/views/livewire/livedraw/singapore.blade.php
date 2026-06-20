<div class="container text-white" wire:poll.5000ms="liveSingapore">

    <style>
        .singapore-theme {
            background-image: -moz-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
            background-image: -webkit-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
            background-image: -ms-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
            font-family: 'Chakra Petch', sans-serif;
            color: #000000;
        }

        .box {
            position: relative;
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            -webkit-box-reflect: below 0 linear-gradient(transparent, transparent, #0005);
        }

        .box .loader {
            position: absolute;
            width: 50px;
            height: 50px;
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
            inset: 10px;
            background: #000;
            border-radius: 50%;
            z-index: 1;
        }
    </style>

    <div class="row justify-content-center p-lg-4">

        <div class="col-lg-6 col-12">
            <table class="table-bordered border-info fw-bold fs-5 table border-2 border text-center text-white bg-dark">
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
                                {{ $sgp_toto_winning_number2 }}
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

        <div class="col-lg-6 col-sm-12">
            <table
                class="table-bordered bg-dark border-info fs-5 fw-semibold table border-2 border text-center text-white">
                <thead>
                    <tr class="singapore-theme">
                        <td class="fw-semibold" colspan="4">SINGAPORE POOLS</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class=" font-digital">Last Result : {{ $sgp_4d_last_result }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="singapore-theme fw-semibold" colspan="2">Prize 1</td>
                        <td colspan="2">
                            @if ($sgp_p1 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_p1 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="singapore-theme fw-semibold" colspan="2">Prize 2</td>
                        <td colspan="2">
                                {{ $sgp_p2 }}
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="singapore-theme fw-semibold" colspan="2">Prize 3</td>
                        <td colspan="2">
                            @if ($sgp_p3 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_p3 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="singapore-theme fw-semibold" colspan="2">Starter</td>
                        <td class="singapore-theme fw-semibold" colspan="2">Consolation</td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($sgp_starter1 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter1 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_starter2 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter2 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation1 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation1 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation2 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation2 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($sgp_starter3 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter3 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_starter4 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter4 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation3 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation3 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation4 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation4 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($sgp_starter5 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter5 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_starter6 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter6 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation5 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation5 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation6 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation6 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($sgp_starter7 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter7 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_starter8 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter8 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation7 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation7 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation8 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation8 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($sgp_starter9 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter9 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_starter10 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_starter10 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation9 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation9 }}
                            @endif
                        </td>
                        <td>
                            @if ($sgp_consolation10 == '-')
                                <x-loader />
                            @else
                                {{ $sgp_consolation10 }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>

            <livewire:components.livedraw-links first="sydney" second="hongkong" third="macau" fourth="kingkong"/>
        </div>
    </div>




</div>
