@extends('layouts.adminlayout')
@section('title', 'Buat Event Lomba Baru')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <livewire:admin.site-event.edit :statuses="$statuses" :sites="$sites" :event="$event" />
    </div>
@endsection
