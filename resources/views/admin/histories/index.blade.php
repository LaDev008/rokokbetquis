@extends('layouts.adminlayout')
@section('title', 'Histories')
@section('content')
    <div class="col-12">
        <h1 class="text-center">History List Admin</h1>

        <table class="table table-hover table-dark table-bordered table-striped align-middle text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Admin</th>
                    <th>Judul</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i:s') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
