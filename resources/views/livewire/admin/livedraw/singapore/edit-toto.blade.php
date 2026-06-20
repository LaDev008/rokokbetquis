<div class="p-4 d-flex flex-column gap-4">
    <h1 class="text-center">Livedraw Singapore Toto
        {{ Carbon\Carbon::parse($data_singapore->date)->isoFormat('dddd, d MMMM YYYY') }}</h1>

    <form wire:submit.prevent="update">
        @foreach (range(1, 6) as $number)
        <div class="input-group mb-3">
            <span class="input-group-text" id="winningNumber{{$number}}">Winning Number {{$number}}</span>
            <input type="text" class="form-control" placeholder="-" aria-label="winning_number{{$number}}"
                aria-describedby="winningNumber{{$number}}" wire:model="{{ $data_singapore->{'winning_number_' . $number} }}">
        </div>
        @endforeach
        <div class="input-group mb-3">
            <span class="input-group-text" id="additionalNumber">Additional Number</span>
            <input type="text" class="form-control" placeholder="-" aria-label="additional_number"
                aria-describedby="additionalNumber" wire:model='additional_number'>
        </div>

        <div class="d-flex gap-4 justify-content-center">
            <button class="btn btn-primary">SAVE</button>
            <button class="btn btn-success" type="button" wire:click="countResult">Count Result</button>
            <a href="{{route("admin.livedraw.index")}}"><button class="btn btn-danger" type="button">Back</button></a>
        </div>
    </form>
</div>
