<div class="col-12">
    <style>
        .complaint-content {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        td {
            max-width: 200px;
            overflow: hidden;
        }
    </style>
    <div class="row g-0 position-relative">
        <h1 class="text-center">DAFTAR KELUHAN MEMBER</h1>
    </div>

    <div class="row g-0 mt-4">
        <table class="table-hover table table-striped table-dark table-bordered align-middle text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Keluhan</th>
                    <th>Waktu</th>
                    <th>Nama User</th>
                    <th>Judul</th>
                    <th>Isi Komplain</th>
                    @if (Auth::user()->role_id == 1)
                        <th>Jawaban CS</th>
                        <th>Status</th>
                    @endif
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($complaints as $item)
                    <tr class="col-12">
                        <td class="col">{{ $loop->iteration }}</td>
                        <td class="col">{{ $item->code }}</td>
                        <td class="col">
                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y, H:i:s') }}</td>
                        <td class="col">{{ $item->username }}</td>
                        <td class="col">{{ $item->title }}</td>
                        <td class="col"><span class="complaint-content">{{ $item->content }}</span></td>
                        @if (Auth::user()->role_id == 1)
                            <td class="col"><span class="complaint-content">{{ $item->answer }}</span></td>
                            @if ($item->done)
                                <td class="text-success col">Selesai</td>
                            @else
                                <td class="text-danger col">Belum Diproses</td>
                            @endif
                        @endif
                        <td class="col"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#preview{{ $item->id }}">
                                Preview Keluhan
                            </button></td>
                        <td class="col">
                            <button class="btn btn-success" type="button"
                                wire:click={{ 'done(' . $item->id . ')' }}>Tandai Sudah
                                Selesai</button>
                        </td>
                        <td class="col"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#answer{{ $item->id }}">
                                Jawab Keluhan
                            </button></td>
                    </tr>

                    {{-- Modal Preview --}}
                    <div class="modal fade" id="preview{{ $item->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="preview{{ $item->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="preview{{ $item->id }}">Preview Keluhan Member</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mt-4 bg-light text-black col-12 rounded-3 p-3 d-flex flex-column fw-semibold gap-3"
                                        style="font-family: sans-serif" wire:ignore.self>
                                        <div>Kode Keluhan: {{ $item->code }}</div>
                                        <div>Pembuat Keluhan: {{ $item->username }}</div>
                                        <div>Judul Keluhan: {{ $item->title }}</div>
                                        <div>Isi Keluhan: {{ $item->content }}</div>
                                        <div>Dibuat Pada Waktu:
                                            {{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y, H:i:s') }}
                                        </div>
                                        @if ($item->done)
                                            <div>Status : <span class="text-success">Selesai</span></div>
                                        @else
                                            <div>Status: <span class="text-danger">Belum Selesai</span></div>
                                        @endif
                                        <div>Jawaban Admin: {{ $item->answer }}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-success" data-bs-dismiss="modal"
                                            wire:click={{ 'done(' . $item->id . ')' }}>Tandai Sudah
                                            Selesai</button>
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#answer{{ $item->id }}">
                                            Jawab Keluhan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Jawaban --}}
                    <div class="modal fade" id="answer{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="answer{{ $item->id }}" aria-hidden="true" wire:ignore.self
                        wire:keydown.escape="resetAnswer">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="answer{{ $item->id }}">Jawab Keluhan
                                        {{ $item->code }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        wire:click="resetAnswer"></button>
                                </div>
                                <div class="modal-body">
                                    <form wire:submit.prevent="submit({{ $item->id }})" class="d-flex flex-column">
                                        <div class="input-group">
                                            <label for="answer" class="input-group-text">JAWABAN</label>
                                            <input type="text" class="form-control" id="answer" required
                                                wire:model.lazy="answer">
                                        </div>
                                        <div class="col-12 d-flex gap-3 justify-content-center mt-3">
                                            <button type="button" class="btn btn-secondary col col-lg-3"
                                                data-bs-dismiss="modal" wire:click="resetAnswer">Cancel</button>
                                            <button type="submit" class="btn btn-primary col col-lg-3"
                                                data-bs-dismiss="modal">Jawab</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if ($complaints->count() == 0)
                    <tr>
                        <td colspan="9">
                            <h1>TIDAK ADA KELUHAN SAAT INI</h1>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
