@extends("layouts.adminlayout")

@section("title", "Data Hongkong")

@section("content")
    <div class="d-flex flex-column p-4 text-center">
        <div class="d-flex justify-content-center align-items-center gap-4">

            <h1>Data Hongkong</h1>
            <a href="{{route("admin.data.hongkong.create")}}"><button class="btn btn-primary">Add New</button></a>
        </div>
        <table class="table table-bordered table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Prize 1</th>
                    <th>Prize 2</th>
                    <th>Prize 3</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hongkongs as $hongkong)
                <tr>
                    <td>{{Carbon\Carbon::parse($hongkong->date)->isoFormat("dddd, D MMMM YYYY")}}</td>
                    <td>{{$hongkong->first_result}}</td>
                    <td>{{$hongkong->second_result}}</td>
                    <td>{{$hongkong->third_result}}</td>
                    <td><a href="{{route("admin.data.hongkong.edit", $hongkong->id)}}"><button class="btn btn-primary">EDIT</button></a></td>
                    <td><a href="{{route("admin.data.hongkong.delete", $hongkong->id)}}"><button class="btn btn-danger">HAPUS</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
