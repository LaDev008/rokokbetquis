@extends('layouts.adminlayout')
@section('title', 'Edit Status')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('statuses.update', $status->id) }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST">
            @csrf
            @method('put')
            <h1>EDIT STATUS EVENT</h1>

            <div class="input-group">
                <label for="name" class="w-25 input-group-text">Nama Status</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required
                    value="{{ $status->name }}">
            </div>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group">
                <label for="color" class="w-25 input-group-text">Warna Kelas Status</label>
                <input type="text" class="form-control" id="color" name="color" autofocus required
                    value="{{ $status->color }}">
            </div>
            @error('color')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">SUBMIT</button>
                <a href="{{ route('statuses.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
