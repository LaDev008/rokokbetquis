@extends('layouts.adminlayout')
@section('title', 'Buat User Baru')
@section('content')

    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('users.store') }}" method="post" class="shadow-lg bg-light rounded-lg w-75 p-5">
            @csrf
            <h1 class="text-black text-center mb-5">DAFTAR AKUN ADMIN NANA4D</h1>
            <div class="">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" required name="name">
            </div>
            <div class="mt-4">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
                @error('username')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    required>
                @error('password_confirmation')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="role_id">ROLE</label>
                <select name="role_id" id="role_id" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="phone_number">Nomor Handphone</label>
                <input type="numeric" class="form-control" id="phone_number" name="phone_number" required>
                @error('phone_number')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-12 d-flex justify-content-center gap-3 mt-5">
                <a href="{{ route('users.index') }}" class="w-25">
                    <button class="btn btn-danger w-100" type="button">CANCEL</button>
                </a>
                <button type="submit" class="btn btn-primary w-25">SUBMIT</button>
            </div>

        </form>
    </div>

@endsection
