@extends('layouts.adminlayout')
@section('title', 'History Admin')
@section('content')
<div class="col-12">
    @if (session()->has('message'))
        <livewire:components.flash />
    @endif

    <div class="position-relative text-center">
        <h1>DAFTAR LOMBA TOGEL NANAGROUP</h1>
        <a href="{{ route('events.create') }}">
            <button class="btn btn-primary px-5"
                style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                Create New
            </button>
        </a>
    </div>

    <table class="table table-bordered table-hover table-dark align-middle table-striped text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th colspan="4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($histories as $history)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
