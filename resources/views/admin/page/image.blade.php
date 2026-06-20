@extends('layouts.adminlayout')
@section('title', 'IMAGE EDITIING')
@section('content')
    <div class="col-12 justify-content-center align-items-center h-100  d-flex flex-column gap-5 p-5">
        <livewire:admin.page.image.logo :page="$page" />
        <livewire:admin.page.image.banner :page="$page" />
        <livewire:admin.page.image.background :page="$page" />
    </div>
@endsection
