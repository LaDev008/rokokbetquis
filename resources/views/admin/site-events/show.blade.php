@extends('layouts.adminlayout')
@section('title', 'Comment Event')
@section('content')
    <livewire:admin.site-event.search :event="$event" :key="$event->id" />
@endsection
