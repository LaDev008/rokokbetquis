@extends('layouts.adminlayout')
@section('title', 'Data Macau')
@section('content')

    <div class="col-12 position-relative py-3 text-center">
        @if (session()->has('message'))
            <livewire:components.flash status="{{ session('status') }}" message={{ session('message') }} />
        @endif
        <h1>Macau Data LIST</h1>
        <a href="{{ route('macaus.create') }}">
            <button class="btn btn-primary px-5" style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                Create New
            </button>
        </a>

    </div>
    <div class="col-12 px-2">

        <table class="table table-hover table-striped table-dark text-center align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Result 1</th>
                    <th>Result 2</th>
                    <th>Result 3</th>
                    <th>Result 4</th>
                    <th>Result 5</th>
                    <th>Result 6</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($macaus as $item)
                    <tr>

                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $item->day }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->result1 }}</td>
                        <td>{{ $item->result2 }}</td>
                        <td>{{ $item->result3 }}</td>
                        <td>{{ $item->result4 }}</td>
                        <td>{{ $item->result5 }}</td>
                        <td>{{ $item->result6 }}</td>
                        <td><a href="{{ route('macaus.edit', $item->id) }}"><button class="btn btn-warning">EDIT</button></a>
                        </td>
                        <td>
                            <form action="{{ route('macaus.destroy', $item->id) }}" method="post">@csrf @method('delete')
                                <button class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
