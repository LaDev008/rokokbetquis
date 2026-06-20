@extends("layouts.adminlayout")

@section("title", "Data Hongkong")

@section("content")

<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="bg-secondary p-4 w-75 d-flex justify-center gap-4 flex-column">
        <h1 class="text-white text-center">Hapus Data Hongkong {{Carbon\Carbon::parse($hongkong->date)->isoFormat("dddd, D MMMM YYYY")}}</h1>
        <form action="{{route("admin.data.hongkong.destroy", $hongkong->id)}}" class="d-flex w-100 gap-4" method="POST">
            @csrf
            @method("delete")
            <button class="flex-grow-1 btn btn-primary">GAS</button>
            <a href="{{route("admin.data.hongkong.index")}}" class="flex-grow-1"><button class="btn btn-danger w-100" type="button">TAHAN</button></a>
        </form>
    </div>
</div>

@endsection
