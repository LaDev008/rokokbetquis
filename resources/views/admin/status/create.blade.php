@extends('layouts.adminlayout')
@section('title', 'Buat Situs Baru')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('statuses.store') }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST">
            @csrf
            <h1>BUAT STATUS EVENT BARU</h1>

            <div class="input-group">
                <label for="name" class="w-25 input-group-text">Nama Status</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required>
            </div>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group">
                <label for="color" class="w-25 input-group-text">Warna Kelas Status</label>
                <input type="text" class="form-control" id="color" name="color" autofocus required
                    placeholder="success / primary / warning / danger">
            </div>
            @error('color')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">CREATE</button>
                <a href="{{ route('statuses.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
