@extends("layouts.adminlayout")

@section("title", "Data Sydney")

@section("content")
    <div class="d-flex flex-column p-4 text-center">
        <div class="d-flex gap-4 justify-content-center align-items-center">
            <h1>Data Sydney</h1>
            <a class="" href="{{route("admin.data.sydney.create")}}"><button class="btn btn-primary">Create New</button></a></td>
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
                @foreach ($sydneys as $sydney)
                <tr>
                    <td>{{Carbon\Carbon::parse($sydney->date)->isoFormat("dddd, D MMMM YYYY")}}</td>
                    <td>{{$sydney->first_result}}</td>
                    <td>{{$sydney->second_result}}</td>
                    <td>{{$sydney->third_result}}</td>
                    <td><a href="{{route("admin.data.sydney.edit", $sydney->id)}}"><button class="btn btn-primary">EDIT</button></a></td>
                    <td><a href="{{route("admin.data.sydney.delete", $sydney->id)}}"><button class="btn btn-danger">HAPUS</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$sydneys->links()}}
@endsection
