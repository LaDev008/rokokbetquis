@extends('layouts.adminlayout')
@section('title', 'Event Status List')
@section('content')
    <div class="col-12">
        @if (session()->has('message'))
            <livewire:components.flash status="{{ session('status') }}" message="{{ session('message') }}" />
        @endif
        <div class="position-relative text-center">
            <h1>DAFTAR STATUS EVENT</h1>
            <a href="{{ route('statuses.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <div class="col-12 mt-4 px-4">
            <table class="table table-dark table-bordered table-striped table-hover align-middle text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Status</th>
                        <th>Font Color</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statuses as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <div class="bg-{{ $item->color }} mx-auto" style="width: 60px; height:20px"></div>
                            </td>
                            <td><a href="{{ route('statuses.edit', $item->id) }}"><button
                                        class="btn btn-warning">EDIT</button></a></td>
                            <td>
                                <form action="{{ route('statuses.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Yakin Ingin Hapus ?')">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
