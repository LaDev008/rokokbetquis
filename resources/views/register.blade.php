@extends('layouts.mainlayout')
@section('title', 'Daftar Member')
@section('content')
    <div class="col-12 col-lg-8 mx-auto p-3 p-lg-5 mb-5">
        <style>
            .register-form label {
                font-size: 1rem;
            }
        </style>
        @if (session()->has('message'))
            <livewire:components.flash />
        @endif

        <form action="{{ route('register') }}" method="post" class=" neon-border bg-dark p-lg-5 register-form">
            @csrf
            <h1 class="text-white text-center neon-text">DAFTAR AKUN {{config('app.name', '')}}</h1>
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
                <label for="phone_number">Nomor Handphone</label>
                <input type="numeric" class="form-control" id="phone_number" name="phone_number" required>
                @error('phone_number')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-12 mt-4">
                <div class="alert alert-warning" role="alert">
                    <h3 class="text-black">PERHATIAN !!</h3>
                    <h6>Isilah data dengan benar sesuai dengan akun yang terdaftar di Situs Nana4D. Agar mempermudah proses
                        pembagian hadiah event - event togel.</h6>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-3 mt-lg-5">
                <a href="{{ route('home') }}" class="col-lg-3 col-4">
                    <button class="btn btn-danger w-100" type="button">CANCEL</button>
                </a>
                <button class="btn btn-primary col-lg-3 col-4">SUBMIT</button>
            </div>

        </form>

    </div>
@endsection
