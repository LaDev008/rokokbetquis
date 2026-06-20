@extends('layouts.adminlayout')
@section('title', 'Buat Situs Baru')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('sites.store') }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST" enctype="multipart/form-data">
            @csrf
            <h1>BUAT SITUS BARU</h1>

            <div class="input-group">
                <label for="photo" class="input-group-text">LOGO</label>
                <input type="file" class="form-control" name="photo" id="photo">
            </div>
            @error('photo')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="name" class="w-25 input-group-text">Nama Situs</label>
                <input type="text" class="form-control" id="name" name="name" autofocus required value="NANA4D">
            </div>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="link" class="w-25 input-group-text">Link Situs</label>
                <input type="text" class="form-control" id="link" name="link" required
                    value="https://nana4d.online">
            </div>
            @error('link')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="minimal_bet" class="w-25 input-group-text">Minimal Bet</label>
                <input type="text" class="form-control" id="minimal_bet" name="minimal_bet" required value="100 Perak">
            </div>
            @error('minimal_bet')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="minimal_deposit" class="w-25 input-group-text">Minimal Deposit</label>
                <input type="text" class="form-control" id="minimal_deposit" name="minimal_deposit" required
                    value="10.000">
            </div>
            @error('minimal_deposit')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="minimal_withdraw" class="w-25 input-group-text">Minimal Withdraw</label>
                <input type="text" class="form-control" id="minimal_withdraw" name="minimal_withdraw" required
                    value="25.000">
            </div>
            @error('minimal_withdraw')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="bbfs" class="w-25 input-group-text">Jumlah Digit BBFS</label>
                <input type="text" class="form-control" id="bbfs" name="bbfs" required value="9 Digit">
            </div>
            @error('bbfs')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="top_promo" class="w-25 input-group-text">Top Promo</label>
                <input type="text" class="form-control" id="top_promo" name="top_promo" required value="Cashback 25%">
            </div>
            @error('top_promo')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="service" class="w-25 input-group-text">Pelayanan</label>
                <input type="text" class="form-control" id="service" name="service" required value="24 Jam">
            </div>
            @error('service')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="markets" class="w-25 input-group-text">Jumlah Pasaran</label>
                <input type="text" class="form-control" id="markets" name="markets" required value="87 Pasaran">
            </div>
            @error('markets')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="bet_type" class="w-25 input-group-text">Tipe Bet</label>
                <input type="text" class="form-control" id="bet_type" name="bet_type" required
                    value="Bet Full, Bet Diskon, Bet Bolak Balik, Bet Prize 123">
            </div>
            @error('bet_type')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="deposit_bank" class="w-25 input-group-text">Deposit Via Bank</label>
                <input type="text" class="form-control" id="deposit_bank" name="deposit_bank" required
                    value="BCA, BRI, BNI, BSI, CIMB, MANDIRI">
            </div>
            @error('deposit_bank')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="deposit_ewallet" class="w-25 input-group-text">Deposit Via E-Wallet</label>
                <input type="text" class="form-control" id="deposit_ewallet" name="deposit_ewallet" required
                    value="DANA, GOPAY, OVO, LINKAJA, QRIS">
            </div>
            @error('deposit_ewallet')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">CREATE</button>
                <a href="{{ route('sites.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
