@extends('layouts.mainlayout')
@section('title', 'Daftar Situs')
@section('content')
    <div class="col-12 col-lg-8 bg-dark p-lg-5 d-flex gap-3 flex-wrap">
        <h1 class="neon-text col-12 text-center my-4">
            INFORMASI SITUS {{$sites[0]->name}}
        </h1>
        @foreach ($sites as $site)
            <livewire:site-card :site="$site" />
        @endforeach

    </div>
@endsection
