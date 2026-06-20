@extends('layouts.adminlayout')
@section('title', 'EDIT Page Details')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <livewire:admin.page.form.edit :page="$page" />
    </div>
@endsection
