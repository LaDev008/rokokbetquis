@extends('layouts.adminlayout')
@section('title', 'Seo Page Lists')
@section('content')
    <div class="col-12 text-center">
        @if (session()->has('message'))
            <livewire:components.flash />
        @endif
        <div class="col-12 position-relative py-3">

            <h1>SEO PAGE LIST</h1>
            <a href="{{ route('seos.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <div class="col-12 mt-4 px-4">
            <table class="table table-dark table-bordered table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Halaman</th>
                        <th>Canonical</th>
                        <th>Author</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seos as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->navigation->name }}</td>
                            <td>{{ $item->meta_canonical }}</td>
                            <td>{{ $item->author }}</td>
                            <td><a href="{{ route('seos.edit', $item->id) }}"><button
                                        class="btn btn-warning">EDIT</button></a></td>
                            <td>
                                <form action="{{ route('seos.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Yakin Ingin Hapus ?')">HAPUS</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
