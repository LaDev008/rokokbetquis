@extends('layouts.adminlayout')
@section('title', 'Create Seo Page')
@section('content')
    <div class="col-12 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('seos.store') }}"
            class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center"
            method="POST">
            @csrf
            <h1>CREATE NEW SEO PAGE</h1>

            <select class="form-select" aria-label="Default select example" name="navigation_id">
                <option selected hidden>--- Alamat SEO ---</option>
                @foreach ($navigations as $navigation)
                    <option value="{{ $navigation->id }}">{{ $navigation->name }}</option>
                @endforeach
            </select>

            <div class="input-group">
                <label for="meta_description" class="w-25 input-group-text">META DESCRIPTION</label>
                <input type="text" class="form-control" id="meta_description" name="meta_description" autofocus required>
            </div>
            @error('meta_description')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="meta_keywords" class="w-25 input-group-text">META KEYWORDS</label>
                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" required>
            </div>
            @error('meta_keywords')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <label for="author" class="w-25 input-group-text">META AUTHOR NAME</label>
                <input type="text" class="form-control" id="author" name="author" required
                    placeholder="Masukkan Nama Author Untuk Meta Tag">
            </div>
            @error('author')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="form-floating col-12">
                <textarea class="form-control" placeholder="Leave a comment here" id="article" name="article"></textarea>
                <label for="article">ARTICLE</label>
            </div>

            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-success">CREATE</button>
                <a href="{{ route('seos.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
            </div>
        </form>
    </div>
@endsection
