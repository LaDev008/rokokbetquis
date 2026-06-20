@extends('layouts.mainlayout')
@section('title', 'Lomba Freechip')
@section('content')
    <div class="col-12 col-lg-8 mx-auto bg-dark d-flex flex-wrap text-center neon-border">
        @if ($events->isEmpty())
            <h1 class="text-white text-center col-12">TIDAK ADA EVENT FREECHIP TERSEDIA.</h1>
            <h4 class="text-white mt-3 text-center col-12">NANTIKAN EVENT FREECHIP MENARIK LAINNYA DARI ROKOKSLOTQUIS.
            </h4>
        @endif
        @foreach ($events as $event)
            <livewire:event-card :event="$event" />
        @endforeach
    </div>
@endsection
