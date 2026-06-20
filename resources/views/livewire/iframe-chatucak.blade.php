<div class="container-fluid text-white" wire:poll.5000ms="getLive">

    <style>
        .main-theme {
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
                class="table-bordered bg-dark border-info fs-5 fw-semibold table border-2 border text-center text-white mb-0 align-middle"
                style="height:100vh">
                <thead>
                    <tr class="main-theme">
                        <td class="fw-semibold" colspan="4">Chatucak Pools</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class=" font-digital">Last Result : {{ $last_result }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td class="main-theme fw-semibold" colspan="2">Prize 1</td>
                        <td colspan="2">
                            @if ($prize1 == '-')
                                <x-loader />
                            @else
                                {{ $prize1 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="main-theme fw-semibold" colspan="2">Prize 2</td>
                        <td colspan="2">
                            @if ($prize2 == '-')
                                <x-loader />
                            @else
                                {{ $prize2 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="main-theme fw-semibold" colspan="2">Prize 3</td>
                        <td colspan="2">
                            @if ($prize3 == '-')
                                <x-loader />
                            @else
                                {{ $prize3 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td class="main-theme fw-semibold" colspan="2">Special</td>
                        <td class="main-theme fw-semibold" colspan="2">Consolation</td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($special1 == '-')
                                <x-loader />
                            @else
                                {{ $special1 }}
                            @endif
                        </td>
                        <td>
                            @if ($special2 == '-')
                                <x-loader />
                            @else
                                {{ $special2 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation1 == '-')
                                <x-loader />
                            @else
                                {{ $consolation1 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation2 == '-')
                                <x-loader />
                            @else
                                {{ $consolation2 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($special3 == '-')
                                <x-loader />
                            @else
                                {{ $special3 }}
                            @endif
                        </td>
                        <td>
                            @if ($special4 == '-')
                                <x-loader />
                            @else
                                {{ $special4 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation3 == '-')
                                <x-loader />
                            @else
                                {{ $consolation3 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation4 == '-')
                                <x-loader />
                            @else
                                {{ $consolation4 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($special5 == '-')
                                <x-loader />
                            @else
                                {{ $special5 }}
                            @endif
                        </td>
                        <td>
                            @if ($special6 == '-')
                                <x-loader />
                            @else
                                {{ $special6 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation5 == '-')
                                <x-loader />
                            @else
                                {{ $consolation5 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation6 == '-')
                                <x-loader />
                            @else
                                {{ $consolation6 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($special7 == '-')
                                <x-loader />
                            @else
                                {{ $special7 }}
                            @endif
                        </td>
                        <td>
                            @if ($special8 == '-')
                                <x-loader />
                            @else
                                {{ $special8 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation7 == '-')
                                <x-loader />
                            @else
                                {{ $consolation7 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation8 == '-')
                                <x-loader />
                            @else
                                {{ $consolation8 }}
                            @endif
                        </td>
                    </tr>
                    <tr class="mt-2">
                        <td>
                            @if ($special9 == '-')
                                <x-loader />
                            @else
                                {{ $special9 }}
                            @endif
                        </td>
                        <td>
                            @if ($special10 == '-')
                                <x-loader />
                            @else
                                {{ $special10 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation9 == '-')
                                <x-loader />
                            @else
                                {{ $consolation9 }}
                            @endif
                        </td>
                        <td>
                            @if ($consolation10 == '-')
                                <x-loader />
                            @else
                                {{ $consolation10 }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
