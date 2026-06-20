<div class="p-4 d-flex flex-column gap-4">
    <h1 class="text-center">Livedraw Hongkong
        {{ Carbon\Carbon::parse($data_hongkong->date)->isoFormat('dddd, d MMMM YYYY') }}</h1>

    <form wire:submit.prevent="update">
        <div class="input-group mb-3">
            <span class="input-group-text" id="firstResult">First Result</span>
            <input type="text" class="form-control" placeholder="-" aria-label="first_result"
                aria-describedby="firstResult" wire:model='first_result'>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="secondResult">Second Result</span>
            <input type="text" class="form-control" placeholder="-" aria-label="second_result"
                aria-describedby="secondResult" wire:model='second_result'>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="thirdResult">Third Result</span>
            <input type="text" class="form-control" placeholder="-" aria-label="third_result"
                aria-describedby="thirdResult" wire:model='third_result'>
        </div>

        <div class="d-flex gap-4 justify-content-center">

            <button class="btn btn-primary">SAVE</button>
            <a href="{{route("admin.livedraw.index")}}"><button class="btn btn-danger" type="button">Back</button></a>
        </div>
    </form>
</div>
