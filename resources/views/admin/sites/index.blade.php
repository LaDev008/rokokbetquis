@extends('layouts.adminlayout')
@section('title', 'Site List')
@section('content')
    <div class="col-12">
        @if (session()->has('message'))
            <livewire:components.flash status="{{ session('status') }}" message="{{ session('message') }}" />
        @endif
        @if (session()->has('site_upload_debug'))
            @php($siteUploadDebug = session('site_upload_debug'))
            <div class="alert alert-warning mx-4 mt-4">
                <h5 class="mb-3">Debug Upload Logo Site</h5>
                <div><strong>Original file:</strong> {{ $siteUploadDebug['original_name'] }}</div>
                <div><strong>Disk:</strong> {{ $siteUploadDebug['stored_disk'] }}</div>
                <div><strong>Stored path:</strong> {{ $siteUploadDebug['stored_relative_path'] }}</div>
                <div><strong>Stored absolute path:</strong> {{ $siteUploadDebug['stored_absolute_path'] }}</div>
                <div><strong>Stored file exists:</strong> {{ $siteUploadDebug['stored_file_exists'] ? 'yes' : 'no' }}</div>
                <div><strong>Saved image URL:</strong> {{ $siteUploadDebug['saved_image_url'] }}</div>
                <div><strong>Public path:</strong> {{ $siteUploadDebug['public_absolute_path'] }}</div>
                <div><strong>Public file exists:</strong> {{ $siteUploadDebug['public_file_exists'] ? 'yes' : 'no' }}</div>
                <div><strong>`public/storage` path:</strong> {{ $siteUploadDebug['public_storage_path'] }}</div>
                <div><strong>`public/storage` is symlink:</strong> {{ $siteUploadDebug['public_storage_is_symlink'] ? 'yes' : 'no' }}</div>
                <div><strong>Mirror written:</strong> {{ $siteUploadDebug['mirror_written'] ? 'yes' : 'no' }}</div>
                @if (!empty($siteUploadDebug['warning']))
                    <div class="mt-2 text-danger"><strong>Warning:</strong> {{ $siteUploadDebug['warning'] }}</div>
                @endif
            </div>
        @endif
        <div class="position-relative text-center">
            <h1>DAFTAR NAMA SITUS</h1>
            <a href="{{ route('sites.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>

        <div class="col-12 mt-4 px-4">
            <table class="table table-dark table-bordered table-striped table-hover align-middle text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Logo Situs</th>
                        <th>Nama Situs</th>
                        <th>Link Situs</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ $item->image }}" height="55px" /></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->link }}</td>
                            <td><a href="{{ route('sites.edit', $item->id) }}"><button
                                        class="btn btn-warning">EDIT</button></a></td>
                            <td>
                                <form action="{{ route('sites.destroy', $item->id) }}" method="post">
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
