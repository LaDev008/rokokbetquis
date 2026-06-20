@extends('layouts.mainlayout')
@section('title', 'Prediksi')
@section('stylesheet')
    @include('css.home')
@endsection

@section('content')
        <livewire:predict-card />
@endsection
