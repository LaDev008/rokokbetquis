@extends('layouts.mainlayout')
@section('title', 'Login Akun')
@section('content')
    <div class="col-12 col-lg-8 mx-auto bg-dark p-3 p-lg-5 mx-1 neon-border">
        <form action="{{ route('login') }}" method="post"
            class="rounded rounded-3 mx-auto text-center p-4 shadow shadow-lg d-flex flex-column gap-3 pb-0">
            @csrf
             @if (session()->has('message'))
            <livewire:components.flash />
        @endif
            <h1 class="neon-text">Login Form</h1>
            <div class="mt-2 text-start col-12 col-lg-4 mx-auto">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is_invalid @enderror" name="username"
                    id="username" required>
            </div>
            @error('username')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
            <div class="mt-2 text-start col-12 col-lg-4 mx-auto">
                <label for="password">password</label>
                <input type="password" class="form-control" required name="password" id="password">
            </div>
            <div class="d-flex justify-content-center col-12">
                <button class="btn register-button col-lg-3 col-9" type="submit">LOGIN</button>
            </div>
        </form>
        <div class="col-lg-4 mx-auto text-center">
            <label style="font-size: 1.25rem">Belum Punya Akun ? <span><a href="{{ route('register') }}"
                        class="text-decoration-none fw-bold neon-text">DAFTAR
                        SEKARANG</a></span></label>
        </div>
    </div>
@endsection
