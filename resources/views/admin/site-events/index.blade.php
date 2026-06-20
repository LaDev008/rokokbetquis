@extends('layouts.adminlayout')
@section('title', 'EVENT LIST')
@section('content')
    <div class="col-12">
        @if (session()->has('message'))
            <livewire:components.flash />
        @endif



        <div class="position-relative text-center">
            <h1>DAFTAR LOMBA TOGEL {{ config('app.name', 'NANA4DQUIS') }}</h1>
            <a href="{{ route('events.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        </div>


        <table class="table table-bordered table-hover table-dark align-middle table-striped text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th colspan="4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr data-event-id="{{ $event->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ url($event->image) }}" target="_blank"><button
                                    class="btn btn-primary">PREVIEW</button></a></td>
                        <td>{{ $event->title }}</td>
                        <td>{{ date('d F Y', strtotime($event->date)) }}</td>
                        <td>
                            <div class="d-flex justify-content-center status-select-shell">
                                <form action="{{ route('events.status', $event->id) }}"
                                    method="post" class="w-100 status-toggle-form">
                                    @csrf
                                    @foreach (request()->query() as $key => $value)
                                        @if (is_array($value))
                                            @foreach ($value as $item)
                                                <input type="hidden" name="{{ $key }}[]"
                                                    value="{{ $item }}">
                                            @endforeach
                                        @else
                                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                        @endif
                                    @endforeach
                                    <div class="status-select-wrap">
                                        <select class="form-select form-select-sm status-toggle-select"
                                            data-status="{{ $event->status_id }}"
                                            name="status"
                                            aria-label="Ubah status event">
                                            <option value="1" @selected($event->status_id == 1)>Belum Dimulai</option>
                                            <option value="2" @selected($event->status_id == 2)>Sedang Berjalan</option>
                                            <option value="4" @selected($event->status_id == 4)>Tutup</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td><a href="{{ route('events.edit', $event->id) }}"><button
                                    class="btn btn-warning">EDIT</button></a>
                        </td>
                        <td>
                            <form action="{{ route('events.destroy', $event->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Yakin Ingin Hapus ?')">HAPUS</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}">
                                <button type="button" class="btn btn-success">KOMENTAR</button>
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#winner{{ $event->id }}">
                                LIST PEMENANG
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="winner{{ $event->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="winner-list" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="winner-list">DAFTAR PEMENANG {{ $event->title }}
                                        {{ date('d F Y', strtotime($event->date)) }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-numbered">
                                        @foreach ($event->eventComments->where('winner_list_id', '!=', null)->where('winner_list_id', '<', 5)->sortBy('winner_list_id') as $item)
                                            @if ($loop->first)
                                                <li class="mt-3">USER YANG MENANG:</li>
                                            @endif
                                            <li class="list-group-item">
                                                {{ $item->winnerList->name . ' - ' . $item->user->name . ' - ' . $item->answer }}
                                            </li>
                                        @endforeach

                                        @foreach ($event->eventComments->where('winner_list_id', 5) as $failures)
                                            @if ($loop->first)
                                                <li class="mt-3">USER YANG GUGUR:</li>
                                            @endif
                                            <li class="list-group-item">
                                                {{ $failures->winnerList->name . ' - ' . $failures->user->name . ' - ' . $failures->failed_reason }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                                    <a href="{{ route('events.show', $event->id) }}">
                                        <button type="button" class="btn btn-primary">EDIT</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="sticky-bottom">

        {{ $events->links() }}
    </div>

@endsection

@push('scripts')
    <style>
        .status-select-shell {
            min-width: 180px;
        }

        .status-chip {
            letter-spacing: .04em;
            text-transform: uppercase;
            font-size: .78rem;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .35);
        }

        .status-select-wrap {
            position: relative;
            width: 100%;
        }

        .status-select-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: .85rem;
            pointer-events: none;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .18), 0 8px 20px rgba(0, 0, 0, .25);
        }

        .status-toggle-select {
            border: 1px solid rgba(255, 255, 255, .18);
            border-radius: .85rem;
            padding: .55rem 2.5rem .55rem .85rem;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .12), rgba(255, 255, 255, .04)),
                rgba(20, 10, 40, .92);
            color: #fff;
            font-weight: 700;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .10);
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
            text-align: center;
            text-align-last: center;
            transition: background .2s ease, border-color .2s ease, box-shadow .2s ease, color .2s ease;
        }

        .status-toggle-select.status-pending {
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .14), rgba(255, 255, 255, .05)),
                rgba(13, 110, 253, .28);
            border-color: rgba(13, 110, 253, .65);
        }

        .status-toggle-select.status-running {
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .14), rgba(255, 255, 255, .05)),
                rgba(25, 135, 84, .28);
            border-color: rgba(25, 135, 84, .65);
        }

        .status-toggle-select.status-closed {
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .14), rgba(255, 255, 255, .05)),
                rgba(220, 53, 69, .28);
            border-color: rgba(220, 53, 69, .65);
        }

        .status-toggle-select:focus {
            border-color: rgba(0, 255, 255, .65);
            box-shadow: 0 0 0 .2rem rgba(0, 255, 255, .15), inset 0 1px 0 rgba(255, 255, 255, .10);
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .16), rgba(255, 255, 255, .06)),
                rgba(20, 10, 40, .96);
            color: #fff;
        }

        .status-select-wrap::before {
            content: "⌄";
            position: absolute;
            right: .9rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, .8);
            pointer-events: none;
            font-size: 1rem;
            font-weight: 900;
        }

        .status-toggle-select option {
            color: #111;
            background: #fff;
            font-weight: 600;
        }
    </style>
    <script>
        document.querySelectorAll('.status-toggle-form').forEach((form) => {
            const select = form.querySelector('.status-toggle-select');
            const currentStatus = select.value;

            const applyStatusClass = (value) => {
                select.classList.remove('status-pending', 'status-running', 'status-closed');

                if (value === '1') {
                    select.classList.add('status-pending');
                } else if (value === '2') {
                    select.classList.add('status-running');
                } else if (value === '4') {
                    select.classList.add('status-closed');
                }
            };

            applyStatusClass(currentStatus);

            select.addEventListener('change', function() {
                if (this.value === currentStatus) {
                    return;
                }

                const labels = {
                    1: 'Belum Dimulai',
                    2: 'Sedang Berjalan',
                    4: 'Tutup',
                };

                const currentLabel = labels[currentStatus] || 'status saat ini';
                const nextLabel = labels[this.value] || 'status baru';

                if (confirm(`Ubah status dari "${currentLabel}" ke "${nextLabel}"?`)) {
                    form.submit();
                } else {
                    this.value = currentStatus;
                }

                applyStatusClass(this.value);
            });
        });
    </script>
@endpush
