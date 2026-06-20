@extends('layouts.adminlayout')
@section('title', 'Edit Situs')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('sites.update', $site->id) }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>EDIT SITUS</h1>

            <div class="d-flex w-100">
                <div class="w-50 d-flex flex-column mx-auto">
                    <label>OLD:</label>
                    <img src="{{ $site->image }}" class="d-block w-100" />
                </div>
            </div>

            <div class="input-group">
                <label for="photo" class="input-group-text">LOGO</label>
                <input type="file" class="form-control" name="photo" id="photo">
            </div>

            <div class="input-group">
                <label for="name" class="w-25 input-group-text">Nama Situs</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required
                    value="{{ $site->name }}">
            </div>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="link" class="w-25 input-group-text">Link Situs</label>
                <input type="text" class="form-control" id="link" name="link" required
                    value="{{ $site->link }}">
            </div>
            @error('link')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="minimal_bet" class="w-25 input-group-text">Minimal Bet</label>
                <input type="text" class="form-control" id="minimal_bet" name="minimal_bet" required value="{{ $site->minimal_bet }}">
            </div>
            @error('minimal_bet')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="minimal_deposit" class="w-25 input-group-text">Minimal Deposit</label>
                <input type="text" class="form-control" id="minimal_deposit" name="minimal_deposit" required
                    value="{{ $site->minimal_deposit }}">
            </div>
            @error('minimal_deposit')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="minimal_withdraw" class="w-25 input-group-text">Minimal Withdraw</label>
                <input type="text" class="form-control" id="minimal_withdraw" name="minimal_withdraw" required
                    value="{{ $site->minimal_withdraw }}">
            </div>
            @error('minimal_withdraw')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="bbfs" class="w-25 input-group-text">Jumlah Digit BBFS</label>
                <input type="text" class="form-control" id="bbfs" name="bbfs" required value="{{ $site->bbfs }}">
            </div>
            @error('bbfs')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="top_promo" class="w-25 input-group-text">Top Promo</label>
                <input type="text" class="form-control" id="top_promo" name="top_promo" required value="{{ $site->top_promo }}">
            </div>
            @error('top_promo')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="service" class="w-25 input-group-text">Pelayanan</label>
                <input type="text" class="form-control" id="service" name="service" required value="{{ $site->service }}">
            </div>
            @error('service')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="markets" class="w-25 input-group-text">Jumlah Pasaran</label>
                <input type="text" class="form-control" id="markets" name="markets" required value="{{ $site->markets }}">
            </div>
            @error('markets')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="bet_type" class="w-25 input-group-text">Tipe Bet</label>
                <input type="text" class="form-control" id="bet_type" name="bet_type" required
                    value="{{ $site->bet_type }}">
            </div>
            @error('bet_type')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="deposit_bank" class="w-25 input-group-text">Deposit Via Bank</label>
                <input type="text" class="form-control" id="deposit_bank" name="deposit_bank" required
                    value="{{ $site->deposit_bank }}">
            </div>
            @error('deposit_bank')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="deposit_ewallet" class="w-25 input-group-text">Deposit Via E-Wallet</label>
                <input type="text" class="form-control" id="deposit_ewallet" name="deposit_ewallet" required
                    value="{{ $site->deposit_ewallet }}">
            </div>
            @error('deposit_ewallet')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">SUBMIT</button>
                <a href="{{ route('sites.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
