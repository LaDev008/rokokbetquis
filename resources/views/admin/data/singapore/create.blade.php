@extends('layouts.adminlayout')

@section('title', 'Data Singapore')

@section('content')
    <div class="p-4 d-flex flex-column gap-4">
        <h1 class="text-center">Tambah Data Singapore</h1>

        <form action="{{ route('admin.data.singapore.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="firstResult">Tanggal</span>
                <input type="date" class="form-control" name='date' value="{{ date('Y-m-d') }}">
            </div>
            <div class="d-flex gap-4 align-items-center">
                {{-- create 2 radio button between Toto and 4D by switching the value of is_toto --}}
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_toto" id="is_toto" value="1" checked>
                    <label class="form-check-label" for="is_toto">Toto</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_toto" id="is_4d" value="0">
                    <label class="form-check-label" for="is_4d">4D</label>
                </div>
            </div>

            @foreach (range(1, 6) as $number)
                <div class="input-group mb-3">
                    <span class="input-group-text" id="winningNumber{{ $number }}">Winning Number
                        {{ $number }}</span>
                    <input type="text" class="form-control" placeholder="-" name="winning_number_{{ $number }}"
                        required value="-">
                </div>
            @endforeach
            <div class="input-group mb-3">
                <span class="input-group-text" id="additionalNumber">Additional Number</span>
                <input type="text" class="form-control" placeholder="-" name='additional_number' required value="-">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="firstPrize">First Prize</span>
                <input type="text" class="form-control" placeholder="-" name='first_prize' required value="-">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="secondPrize">Second Prize</span>
                <input type="text" class="form-control" placeholder="-" name='second_prize' required value="-">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="thirdPrize">Third Prize</span>
                <input type="text" class="form-control" placeholder="-" name='third_prize' required value="-">
            </div>

            @foreach (range(1, 10) as $number)
                <div class="input-group mb-3">
                    <span class="input-group-text" id="starter{{ $number }}">Starter {{ $number }}</span>
                    <input type="text" class="form-control" placeholder="-" name="starter_{{ $number }}" required
                        value="-">
                </div>
            @endforeach
            @foreach (range(1, 10) as $number)
                <div class="input-group mb-3">
                    <span class="input-group-text" id="consolation{{ $number }}">Consolation
                        {{ $number }}</span>
                    <input type="text" class="form-control" placeholder="-" name="consolation_{{ $number }}"
                        required value="-">
                </div>
            @endforeach

            <div class="d-flex gap-4 justify-content-center">
                <button class="btn btn-primary">SAVE</button>
                <a href="{{ route('admin.data.singapore.index') }}"><button class="btn btn-danger"
                        type="button">Back</button></a>
            </div>
        </form>
    </div>

@endsection
