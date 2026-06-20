<div class="col-12 col-lg-8 py-4 px-3 px-lg-0" style="min-height: calc(100vh - 78px)">

    <div class="input-group mb-3">
        <input wire:model="search" type="search" placeholder="Cari Pasaran Prediksi" class="form-control">
    </div>

    <div class="d-flex justify-content-center align-items-center flex-wrap gap-2 col-12 mx-auto">
        @if ($predicts->isEmpty())
            <div class="text-light rounded-2 d-flex flex-column position-relative card-wrapper bg-black py-4 text-center animated-neon-border align-items-center "
                style="background: #1f1f1f !important">
                <h2
                    style="z-index:99;font-family: 'ds-digital', arial;color: yellow;font-weight: 900;font-size:3rem;line-height:2.5rem">
                    PASARAN TIDAK DITEMUKAN
                </h2>
            </div>
        @endif

        @foreach ($predicts as $predict)
            <x-predict-card :item="$predict" />
        @endforeach
    </div>
</div>
