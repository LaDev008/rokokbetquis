@extends('layouts.adminlayout')
@section('content')
    <div class="d-flex justify-content-center flex-column text-center text-white">
        @if (session()->has('message'))
            <x-flash />
        @endif

        <div class="col-12 position-relative py-3 text-black">
            <h1>LIST PASARAN PREDIKSI PAMANSAM</h1>
            <a href="{{ route('predicts.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <table class="table-bordered table-light table-hover table align-middle">
            <thead class="table-dark">
                <tr>
                    <td>No.</td>
                    <td>Logo</td>
                    <td>NAMA PASARAN</td>
                    <td>Jam Tutup</td>
                    <td>Jam Buka</td>
                    <td>Artikel</td>
                    <td colspan="2">ACTION</td>
                </tr>
            </thead>
            <tbody class="fw-semibold">
                @foreach ($predicts as $predict)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ $predict->emblem }}" alt="" width="30px" height="30px"></td>
                        <td>{{ $predict->name }}</td>
                        <td>{{ $predict->close }}</td>
                        <td>{{ $predict->open }}</td>
                        <td>
                            <textarea class="form-control" readonly style="height:200px;">{{ $predict->article }}</textarea>
                        </td>
                        <td><a href="{{ route('predicts.edit', $predict->id) }}"><button class="btn btn-outline-warning"
                                    type="button">EDIT</button></a>
                        </td>
                        <td>
                            <form action="{{ route('predicts.destroy', $predict->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" onclick="return confirm('Yakin Hapus ?')"
                                    type="submit">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
