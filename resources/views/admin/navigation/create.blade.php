@extends('layouts.adminlayout')
@section('title', 'Create Navigation')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form class="p-4 shadow with-3d-shadow d-flex flex-column gap-3" action="{{ route('navigations.store') }}"
            method="post">
            @csrf
            <h1>Create New Navigation</h1>
            <div class="input-group">
                <label for="name" class="input-group-text">Nama Navigasi</label>
                <input type="text" class="form-control" id="name" name="name" autofocus
                    placeholder="Create Navigation">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <label for="link" class="input-group-text">Link Navigasi</label>
                <input type="text" class="form-control" id="link" name="link"
                    placeholder="http://localhost:8000/navigation/create">
                @error('link')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <label for="route" class="input-group-text">Route Navigasi</label>
                <input type="text" class="form-control" id="route" name="route" placeholder="navigation.create">
                @error('route')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-flex gap-3 justify-content-center col-12">
                <button class="btn btn-primary" type="submit">SUBMIT</button>
                <a href="{{ route('navigations.index') }}">
                    <button class="btn btn-danger" type="button">CANCEL</button>
                </a>
            </div>
        </form>
    </div>
@endsection
