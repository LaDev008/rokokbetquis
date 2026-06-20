@extends("layouts.adminlayout")

@section("title", "Data Hongkong")

@section("content")
<div class="p-4 d-flex flex-column gap-4">
    <h1 class="text-center">Create New Data Hongkong</h1>

    <form action="{{route("admin.data.hongkong.store")}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="firstResult">Tanggal</span>
            <input type="date" class="form-control" aria-label="first_result"
                aria-describedby="firstResult" name='date' value="{{date('Y-m-d')}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="firstResult">First Result</span>
            <input type="text" class="form-control" placeholder="-" aria-label="first_result"
                aria-describedby="firstResult" name='first_result' required value="-">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="secondResult">Second Result</span>
            <input type="text" class="form-control" placeholder="-" aria-label="second_result"
                aria-describedby="secondResult" name='second_result' required value="-">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="thirdResult">Third Result</span>
            <input type="text" class="form-control" placeholder="-" aria-label="third_result"
                aria-describedby="thirdResult" name='third_result' required value="-">
        </div>

        <div class="d-flex gap-4 justify-content-center">

            <button class="btn btn-primary">SAVE</button>
            <a href="{{route("admin.data.hongkong.index")}}"><button class="btn btn-danger" type="button">Back</button></a>
        </div>
    </form>
</div>

@endsection
