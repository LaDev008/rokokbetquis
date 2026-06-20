@extends('layouts.adminlayout')
@section('title', 'Dashboard')
@section('content')
    <div class="col-12 bg-dark d-flex flex-column gap-5 px-4 text-white h-100">
        @if (Auth::user()->role_id == 1)
            <div class="text-center">
                <label class="fs-1">NAVIGATION LIST</label>
                <table class="table table-light table-hover table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Navigation Name</th>
                            <th>Route Name</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($navigations as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->route_name }}</td>
                                <td><a href="{{ route('navigations.edit', $item->id) }}"><button
                                            class="btn btn-warning">EDIT</button></a></td>
                                <td>
                                    <form action="{{ route('navigations.destroy', $item->id) }}" method="post">@csrf
                                        @method('delete') <button class="btn btn-danger" type="submit"
                                            onclick="return confirm('Yakin Ingin Menghapus Data Navigasi ?')">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


    </div>
@endsection
