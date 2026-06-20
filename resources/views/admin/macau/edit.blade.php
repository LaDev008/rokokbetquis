@extends('layouts.adminlayout')
@section('title', 'Edit Macau Details')
@section('content')
    <div class="col-12 h-100 d-flex justify-content-center align-items-center">
        <livewire:admin.macau.edit :macau="$macau">
    </div>
@endsection
