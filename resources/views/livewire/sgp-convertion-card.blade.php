<div class="col-12 col-lg-8 mx-auto">
    <style>
        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            display: none;
        }
    </style>
    <div>
        <div class="card text-white bg-dark neon-border">
            {{-- <img class="card-img-top" src="https://via.placeholder.com/680x90" alt="BBFS Generator" class="w-100"> --}}
            <div class="card-body">
                <h4 class="card-title text-center neon-text">KONVERSI ANGKA TOTO SINGAPORE</h4>
                <div class="col-12 mt-3 d-flex flex-column flex-lg-row gap-3 px-2 px-lg-5 align-items-center">
                    <div class="col-12 col-lg d-flex gap-3">
                        <div class="col d-flex flex-column">
                            <label for="first">Angka 1</label>
                            <input type="number" class="form-control col text-center" id="first" wire:model='first'>
                        </div>
                        <div class="col d-flex flex-column">
                            <label for="second">Angka 2</label>
                            <input type="number" class="form-control col text-center" id="second"
                                wire:model='second'>
                        </div>
                    </div>
                    <div class="col-12 col-lg d-flex gap-3">
                        <div class="col d-flex flex-column">
                            <label for="third">Angka 3</label>
                            <input type="number" class="form-control col text-center" id="third"
                                wire:model='third'>
                        </div>
                        <div class="col d-flex flex-column">
                            <label for="fourth">Angka 4</label>
                            <input type="number" class="form-control col text-center" id="fourth"
                                wire:model='fourth'>
                        </div>
                    </div>
                    <div class="col-12 col-lg d-flex gap-3">
                        <div class="col d-flex flex-column">
                            <label for="fifth">Angka 5</label>
                            <input type="number" class="form-control col text-center" id="fifth"
                                wire:model='fifth'>
                        </div>
                        <div class="col d-flex flex-column">
                            <label for="sixth">Angka 6</label>
                            <input type="number" class="form-control col text-center" id="sixth"
                                wire:model='sixth'>
                        </div>
                    </div>
                    <label class="fs-3"> &#8889; </label>
                    <div class="col d-flex flex-column">
                        <label for="additional">Additional Number</label>
                        <input type="number" class="form-control col text-center" id="additional"
                            wire:model='additional'>
                    </div>
                </div>
                <div class="col-12 d-flex align-items-center flex-column mt-4">
                    <div class="col-12 col-lg-3 text-center">
                        <label class="fw-bold fs-3 neon-text">RESULT :</label>
                        <input type="text" class="form-control text-center" readonly wire:model="result">
                    </div>
                </div>
                <div class="mt-4 col-12 d-flex justify-content-center gap-3">
                    <div class="col-lg-2 col">
                        <button class="w-100 btn btn-danger" wire:click='hapus'>Reset</button>
                    </div>
                    <div class="col-lg-2 col">
                        <button class="w-100 btn btn-primary" wire:click='convert'>Konversi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
