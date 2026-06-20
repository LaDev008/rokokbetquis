<div class="col-12 d-flex flex-wrap justify-content-around">

    <div class="input-group mb-3">
        <input wire:model="search" type="search" placeholder="Cari Pasaran Prediksi" class="form-control fw-bold"
            style="color: purple !important;font-size:1.5rem;">
    </div>

    <style>
        .market-button:hover label {
            cursor: pointer;
        }
    </style>

    @if ($predicts->isEmpty())
        <div class="col-lg-3 col-6 p-3">
            <div class="text-light rounded-2 d-flex flex-column position-relative card-wrapper bg-black py-4 text-center animated-neon-border align-items-center "
                style="background: #1f1f1f !important">
                <h2
                    style="z-index:99;font-family: 'ds-digital', arial;color: yellow;font-weight: 900;font-size:3rem;line-height:2.5rem">
                    PASARAN TIDAK DITEMUKAN
                </h2>
            </div>
        </div>
    @endif

    @foreach ($predicts as $item)
        <div class="col-lg-3 col-12 col-sm-6 p-3">
            <div class="neon-border d-flex flex-column align-items-center pt-4 px-2 market-card animated-neon-border-2 position-relative"
                style="background: url('/storage/page/frame-background.webp');background-size: 100% 100%; background-repeat: no-repeat; height: 400px">

                <button type="button" data-bs-toggle="modal" data-bs-target="#info"
                    wire:click='loadMarket({{ $item->id }})' style="position: absolute; right: 1rem; top: 1rem;"
                    class="bg-transparent border-0">
                    <img src="/storage/page/icon/info.png" width="28px" height="28px">
                </button>


                <img src="{{ $item->emblem }}" alt="" width="65px" height="65px" class="market-emblem">
                <div
                    class="font-airstrike col-12 text-center d-flex justify-content-center align-items-center market-title">
                    PREDIKSI
                    {{ $item->name }}</div>
                <label
                    class="d-none d-lg-block market-date">{{ Carbon\Carbon::parse($item->updated_at)->addDays(1)->translatedFormat('l, d F Y') }}</label>
                <label
                    class="d-lg-none market-date">{{ Carbon\Carbon::parse($item->updated_at)->addDays(1)->translatedFormat('D, d/m/Y') }}</label>
                <a class=" col-12 text-center text-decoration-none font-digital market-button"
                    href="{{ '/tools/prediksi/' . $item->slug }}"><label style="color: yellow">LIHAT
                        PREDIKSI</label></a>
                <a class=" col-12 text-center text-decoration-none market-button" href="{{ $item->livedraw }}"
                    style="color: yellow;margin-top: 2rem;"><label>
                        {{-- {{ $item->angka_main }} --}}
                        LIVE DRAW
                    </label></a>
            </div>
        </div>
    @endforeach

    <!-- Modal -->
    <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="marketInfo" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-lg modal-fullscreen-lg-down" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black fs-4 fw-bold" id="marketInfo">
                        {{ $market ? "Pasaran $market->name" : 'Pasaran' }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div class="d-flex gap-2 flex-column flex-lg-row">
                        <img src={{ $market ? $market->emblem : 'Loading . . .' }} alt=""
                            class="col-12 col-lg-3">
                        <div class="d-flex flex-column col-12 col-lg-9 gap-3">
                            <div class="input-group">
                                <label for="close" class="input-group-text col-6 col-lg-4">Jam Tutup Pasaran</label>
                                <input type="text" readonly
                                    value="{{ $market ? $market->close . ' WIB' : 'Loading . . .' }}"
                                    class="form-control">
                            </div>

                            <div class="input-group">
                                <label for="open" class="input-group-text col-6 col-lg-4">Jam Buka Pasaran</label>
                                <input type="text" readonly
                                    value="{{ $market ? $market->open . ' WIB' : 'Loading . . .' }}"
                                    class="form-control">
                            </div>

                            <a href={{ $market ? '/tools/prediksi/' . $market->slug : 'Loading . . .' }}
                                class="col-9 col-lg-6 mx-auto">

                                <button class="btn btn-primary w-100">
                                    Prediksi Pasaran {{ $market ? $market->name : 'Loading . . .' }}
                                </button>
                            </a>
                            <button type="button" class="btn btn-secondary col-9 col-lg-6 mx-auto"
                                data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
