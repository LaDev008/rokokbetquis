@extends("layouts.adminlayout")

@section("title", "Data Singapore")

@section("content")

<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="bg-secondary p-4 w-75 d-flex justify-center gap-4 flex-column">
        <h1 class="text-white text-center">Hapus Data Singapore {{Carbon\Carbon::parse($singapore->date)->isoFormat("dddd, D MMMM YYYY")}}</h1>
        <form action="{{route("admin.data.singapore.destroy", $singapore->id)}}" class="d-flex w-100 gap-4" method="POST">
            @csrf
            @method("delete")
            <button class="flex-grow-1 btn btn-primary">GAS</button>
            <a href="{{route("admin.data.singapore.index")}}" class="flex-grow-1"><button class="btn btn-danger w-100" type="button">TAHAN</button></a>
        </form>
    </div>
</div>
@endsection
