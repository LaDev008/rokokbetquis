@extends("layouts.adminlayout")

@section("title", "Data Singapore")

@section("content")
    <div class="d-flex flex-column p-4 text-center">
        <div class="d-flex justify-content-center align-items-center gap-4">

            <h1>Data Singapore</h1>
            <a href="{{route("admin.data.singapore.create")}}"><button class="btn btn-primary">Add New</button></a>
        </div>
        <table class="table table-bordered table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Prize 1</th>
                    <th>Prize 2</th>
                    <th>Prize 3</th>
                    <th>Toto / 4D</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($singapores as $singapore)
                <tr>
                    <td>{{Carbon\Carbon::parse($singapore->date)->isoFormat("dddd, D MMMM YYYY")}}</td>
                    <td>{{$singapore->first_prize}}</td>
                    <td>{{$singapore->second_prize}}</td>
                    <td>{{$singapore->third_prize}}</td>
                    <td>{{$singapore->is_toto ? "Toto" : "4D"}}</td>
                    <td><a href="{{route("admin.data.singapore.edit", $singapore->id)}}"><button class="btn btn-primary">EDIT</button></a></td>
                    <td><a href="{{route("admin.data.singapore.delete", $singapore->id)}}"><button class="btn btn-danger">HAPUS</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
