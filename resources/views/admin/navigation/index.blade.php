@extends('layouts.adminlayout')
@section('title', 'Navigation List')
@section('content')

    <div class="col-12 text-center py-3">
        @if (session()->has('message'))
            <livewire:components.flash status="{{ session('status') }}" message="{{ session('message') }}" />
        @endif

        <div class="col-12 position-relative align-middle">
            <h1>Navigation List</h1>
            <a href="{{ route('navigations.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <table class="table table-bordered table-hover table-dark align-middle table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Navigasi</th>
                    <th>Nama Route</th>
                    <th>Alamat URL</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($navigations as $navigation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="w-50">{{ $navigation->name }}</td>
                        <td>{{ $navigation->route_name }}</td>
                        <td>{{ asset($navigation->link) }}</td>
                        <td><a href="{{ route('navigations.edit', $navigation->id) }}"><button
                                    class="btn btn-warning px-4">Edit</button></a></td>
                        <td>
                            <form action="{{ route('navigations.destroy', $navigation->id) }}" method="post">
                                @csrf @method('delete') <button class="btn btn-danger px-4"
                                    onclick="return confirm('Yakin Ingin Hapus ???')">Hapus</button></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
