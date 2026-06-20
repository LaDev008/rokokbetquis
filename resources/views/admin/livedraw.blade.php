@php
use App\Models\Sydney;
use App\Models\Hongkong;
use App\Models\Singapore;
use App\Models\Macau;

$last_sydney = Sydney::orderByDesc('date')->first();
$last_hongkong = Hongkong::orderByDesc('date')->first();
$last_singapore_4d = Singapore::where("is_toto", false)->orderByDesc('date')->first();
$last_singapore_toto = Singapore::where("is_toto", true)->orderByDesc('date')->first();
$last_macau = Macau::orderByDesc("date")->first();
@endphp

@extends('layouts.adminlayout')
@section('title', 'Livedraw')
@section('content')
<div class="d-flex p-4 flex-column gap-3">
    <div class="text-center ">
        <h1>LIVEDRAW PASARAN SDY, SGP, HK Dan Macau</h1>
    </div>

    <table class="table table-bordered table-responsive-lg text-center">
        <thead>
            <tr>
                <th scope="col">Pasaran</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Prize 1</th>
                <th scope="col">Prize 2</th>
                <th scope="col">Prize 3</th>
                <th scope="col" colspan="2">Actions</th>
        </thead>
        <tbody>
            <tr>
                <td>Sydney</td>
                <td>{{ Carbon\Carbon::parse($last_sydney->date)->isoFormat('dddd, D MMMM Y') }}</td>
                <td>{{ $last_sydney->first_result }}</td>
                <td>{{ $last_sydney->second_result }}</td>
                <td>{{ $last_sydney->third_result }}</td>
                <td><a href="{{ route('admin.livedraw.sydney.edit', $last_sydney->id) }}" class="btn btn-primary">Edit
                        Livedraw</a></td>
                <td><a href="{{ route('admin.livedraw.sydney.create') }}" class="btn btn-success">Kosongin Result</a>
                </td>
            </tr>

            <tr>
                <td>Singapore 4D</td>
                <td>{{ Carbon\Carbon::parse($last_singapore_4d->date)->isoFormat('dddd, D MMMM Y') }}</td>
                <td>{{ $last_singapore_4d->first_prize }}</td>
                <td>{{ $last_singapore_4d->second_prize }}</td>
                <td>{{ $last_singapore_4d->third_prize }}</td>
                <td><a href="{{ route('admin.livedraw.singapore.edit', $last_singapore_4d->id) }}" class="btn btn-primary">Edit
                        Livedraw</a></td>
                <td><a href="{{ route('admin.livedraw.singapore.create') }}" class="btn btn-success">Kosongin Result</a>
                </td>
            </tr>

            <tr>
                <td>SGP Toto</td>
                <td>{{ Carbon\Carbon::parse($last_singapore_toto->date)->isoFormat('dddd, D MMMM Y') }}</td>
                <td>{{ $last_singapore_toto->first_prize }}</td>
                <td colspan="2" class="align-middle">TOTO</td>
                <td><a href="{{ route('admin.livedraw.singapore.toto.edit', $last_singapore_toto->id) }}" class="btn btn-primary">Edit
                        Livedraw</a></td>
                <td><a href="{{ route('admin.livedraw.singapore.toto.create') }}" class="btn btn-success">Kosongin Result</a>
                </td>
            </tr>

            <tr>
                <td>Hongkong</td>
                <td>{{ Carbon\Carbon::parse($last_hongkong->date)->isoFormat('dddd, D MMMM Y') }}</td>
                <td>{{ $last_hongkong->first_result }}</td>
                <td>{{ $last_hongkong->second_result }}</td>
                <td>{{ $last_hongkong->third_result }}</td>
                <td><a href="{{ route('admin.livedraw.hongkong.edit', $last_hongkong->id) }}" class="btn btn-primary">Edit
                        Livedraw</a></td>
                <td><a href="{{ route('admin.livedraw.hongkong.create') }}" class="btn btn-success">Kosongin Result</a>
                </td>
            </tr>

            <tr>
                <td rowspan="2" class="align-middle">Macau</td>
                <td rowspan="2" class="align-middle">{{ Carbon\Carbon::parse($last_macau->date)->isoFormat('dddd, D MMMM Y') }}</td>
                <td>{{ $last_macau->result1 }}</td>
                <td>{{ $last_macau->result2 }}</td>
                <td>{{ $last_macau->result3 }}</td>
                <td rowspan="2" class="align-middle"><a href="{{ route('admin.livedraw.macau.edit', $last_macau->id) }}" class="btn btn-primary">Edit
                        Livedraw</a></td>
                <td rowspan="2" class="align-middle"><a href="{{ route('admin.livedraw.macau.create') }}" class="btn btn-success">Kosongin Result</a>
                </td>
            </tr>
            <tr>
                <td>{{ $last_macau->result4 }}</td>
                <td>{{ $last_macau->result5 }}</td>
                <td>{{ $last_macau->result6 }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
