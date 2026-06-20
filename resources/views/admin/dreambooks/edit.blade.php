@extends('layouts.adminlayout')
@section('title', 'Edit Buku Mimpi')
@section('content')
    <div class="w-100 d-flex justify-content-center align-items-center h-100">
        <form action="{{ route('dreambooks.update', $dreambook->id) }}" method="post" class="p-4 text-dark bg-light rounded rounded-2 w-75 text-center d-flex flex-column gap-3" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>EDIT EREK EREK NOMOR {{ $dreambook->id }}</h1>
            <div class="d-flex flex-column align-items-center gap-2">
                <img src="{{ $dreambook->image }}" width="400px" height="400px" class="img-thumbnail">
                <div class="input-group">
                    <label for="image" class="w-25 input-group-text">GAMBAR EREK EREK</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="input-group">
                <label for="dreambook" class="input-group-text w-25">BUKU MIMPI</label>
                <textarea name="dreambook" id="dreambook" class="form-control @error('dreambook') is_invalid @enderror" autosize>{{ $dreambook->dreambook }}</textarea>
            </div>
            @error('dreambook')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group">
                <label for="dream2D" class="input-group-text w-25">Tafsir 2D</label>
                <input type="text" class="form-control @error('dream_2d') is_invalid @enderror" value="{{ $dreambook->dream_2d }}" name="dream_2d" id="dream2D">
            </div>
            @error('dream_2d')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group">
                <label for="nature_code" class="w-25 input-group-text">KODE ALAM</label>
                <input type="text" class="form-control" id="nature_code" name="nature_code" value="{{ $dreambook->nature_code }}">
                @error('nature_code')

                @enderror
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-success" type="submit">SUBMIT</button>
                <a href="{{ route('dreambooks.index') }}">
                    <button class="btn btn-danger" type="button">CANCEL</button>
                </a>
            </div>
        </form>
    </div>
@endsection
