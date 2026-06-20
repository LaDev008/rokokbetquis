@extends('layouts.mainlayout')

@section('title', 'dreambook')

@section('dreambook', 'active')

@section('stylesheet')
    @include('css.dreambook')
@endsection

@section('content')
    <div style="background: #00000099" class="d-flex justify-content-around flex-wrap gap-3 col-12 col-lg-8 mx-auto py-4">
        @foreach ($dreambooks as $item)
            <x-dream-card-mobile :item="$item" />
            <x-dream-card :item="$item" />
        @endforeach
    </div>
@endsection
