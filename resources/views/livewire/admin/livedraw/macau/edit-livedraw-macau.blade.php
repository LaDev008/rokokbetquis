<div class="p-4 d-flex flex-column gap-4">
    <h1 class="text-center">Livedraw Macau
        {{ Carbon\Carbon::parse($data_macau->date)->isoFormat('dddd, d MMMM YYYY') }}</h1>

    <form wire:submit.prevent="update">
        <div class="input-group mb-3">
            <span class="input-group-text" id="firstResult">00:00</span>
            <input type="text" class="form-control" placeholder="-" aria-label="result_1"
                aria-describedby="firstResult" wire:model='result_1'>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="secondResult">13:00</span>
            <input type="text" class="form-control" placeholder="-" aria-label="result_2"
                aria-describedby="secondResult" wire:model='result_2'>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="thirdResult">16:00</span>
            <input type="text" class="form-control" placeholder="-" aria-label="result_3"
                aria-describedby="thirdResult" wire:model='result_3'>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="thirdResult">19:00</span>
            <input type="text" class="form-control" placeholder="-" aria-label="result_4"
                aria-describedby="thirdResult" wire:model='result_4'>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="thirdResult">22:00</span>
            <input type="text" class="form-control" placeholder="-" aria-label="result_5"
                aria-describedby="thirdResult" wire:model='result_5'>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="thirdResult">23:00</span>
            <input type="text" class="form-control" placeholder="-" aria-label="result_6"
                aria-describedby="thirdResult" wire:model='result_6'>
        </div>

        <div class="d-flex gap-4 justify-content-center">

            <button class="btn btn-primary">SAVE</button>
            <a href="{{route("admin.livedraw.index")}}"><button class="btn btn-danger" type="button">Back</button></a>
        </div>
    </form>
</div>
