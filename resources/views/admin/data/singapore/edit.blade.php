@extends("layouts.adminlayout")

@section("title", "Data Singapore")

@section("content")
<div class="p-4 d-flex flex-column gap-4">
    <h1 class="text-center">Data Singapore
        {{ Carbon\Carbon::parse($singapore->date)->isoFormat('dddd, D MMMM YYYY') }}</h1>

    <form action="{{route("admin.data.singapore.update", $singapore->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="input-group mb-3">
            <span class="input-group-text" id="firstResult">Tanggal</span>
            <input type="date" class="form-control" aria-label="first_result"
                aria-describedby="firstResult" name='date' value="{{$singapore->date}}">
        </div>
        @if ($singapore->is_toto)
            @foreach (range(1, 6) as $number)
                <div class="input-group mb-3">
                    <span class="input-group-text" id="winningNumber{{$number}}">Winning Number {{$number}}</span>
                    <input type="text" class="form-control" placeholder="-" name="winning_number_{{$number}}" required value="{{ $singapore->{'winning_number_' . $number} }}">
                </div>
            @endforeach
            <div class="input-group mb-3">
                <span class="input-group-text" id="additionalNumber">Additional Number</span>
                <input type="text" class="form-control" placeholder="-" name='additional_number' required value="{{$singapore->additional_number}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="firstPrize">result</span>
                <input type="text" class="form-control" placeholder="-" name='first_prize' required value="{{$singapore->first_prize}}">
            </div>
        @else

            <div class="input-group mb-3">
                <span class="input-group-text" id="first_prize">First Prize</span>
                <input type="text" class="form-control" placeholder="-" name="first_prize" required value="first_prize">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="second_prize">Second Prize</span>
                <input type="text" class="form-control" placeholder="-" name="second_prize" required value="second_prize">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="third_prize">Third Prize</span>
                <input type="text" class="form-control" placeholder="-" name="third_prize" required value="third_prize">
            </div>
            @foreach (range(1, 10) as $number)
            <div class="input-group mb-3">
                <span class="input-group-text" id="starter{{$number}}">Starter {{$number}}</span>
                <input type="text" class="form-control" placeholder="-" name="starter_{{$number}}" required value="{{ $singapore->{'starter_' . $number} }}">
            </div>
        @endforeach

            @foreach (range(1, 10) as $number)
                <div class="input-group mb-3">
                    <span class="input-group-text" id="consolation{{$number}}">Consolation {{$number}}</span>
                    <input type="text" class="form-control" placeholder="-" name="consolation_{{$number}}" required value="{{ $singapore->{'consolation_' . $number} }}">
                </div>
            @endforeach
        @endif

        <div class="d-flex gap-4 justify-content-center">
            <button class="btn btn-primary">SAVE</button>
            <a href="{{route("admin.data.singapore.index")}}"><button class="btn btn-danger" type="button">Back</button></a>
        </div>
    </form>
</div>

@endsection
