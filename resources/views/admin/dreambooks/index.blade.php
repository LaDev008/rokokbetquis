@extends('layouts.adminlayout')
@section('content')
    <div class="d-flex justify-content-center flex-column text-center text-white">
        @if (session()->has('message'))
            <x-flash />
        @endif

        <label class="fs-1 fw-semibold">EREK-EREK BUKU MIMPI</label>

            <table class="table-light table-hover table-striped table border border-1 border-light table-bordered">
                <thead>
                    <tr class="table-dark">
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Detail</th>
                        <th>2D</th>
                        <th>Kode Alam</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($dreambooks as $dreambook)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ $dreambook->image }}" alt="{{ $dreambook->dream_2d }}" width="50px" height="50px">
                        </td>
                        <td>{{ $dreambook->dreambook }}</td>
                        <td>{{ $dreambook->dream_2d }}</td>
                        <td>{{ $dreambook->nature_code }}</td>
                        <td><a href="{{ route('dreambooks.edit', $dreambook->id) }}"><button class="btn btn-warning">EDIT</button></a></td>
                        <td>
                            {{-- <form action="{{ route('predicts.destroy', $predict->id) }}" method="post"> --}}
                            <form action="#" method="post">
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
