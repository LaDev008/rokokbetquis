<div class="col-12">
    <div class="col-12 text-center">
        <h1>{{ $event->title }}</h1>
        <div class="my-3 d-flex justify-content-between align-items-center">
            <div class="col text-start ps-3">
                <button class="px-5 py-1 bg-primary text-white fw-bold rounded-3">
                    Jumlah Komentar: {{ $comments->count() }}
                </button>
            </div>
            <div class="col-3 me-5">

                <!--<div class="input-group ">-->
                <!--    <input type="search" class="form-control" placeholder="Cari Nomor" wire:model="search" :wire:key="search">-->
                <!--    <button class="btn btn-success" type="button" wire:click="searchButton">SEARCH</button>-->
                <!--</div>-->

                <div class="input-group">
                    <input wire:model="search" type="search" placeholder="Cari Nomor" class="form-control fw-bold"
                        style="color: purple !important;font-size:1.5rem;">
                </div>
            </div>
        </div>
        <table class="table table-hover table-striped table-dark table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>BUKTI SHARE</th>
                    <th>Nama User</th>
                    <th>Nama BO</th>
                    <th class="w-25">Komentar</th>
                    <th>Waktu Komentar</th>
                    <th>Status</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        @if ($comment->image)
                            <td><a href="{{ $comment->image }}" target="_blank"><img src="{{ $comment->image }}"
                                        width="50px" height="50px"></a></td>
                        @else
                            <td><label></label></td>
                        @endif
                        <td>{{ $comment->user->username }}</td>
                        <td>{{ $comment->site->name }}</td>
                        <td>{{ $comment->answer }}</td>
                        <td>{{ date('d-m-Y H:i:s', strtotime($comment->created_at)) }}</td>
                        <td>
                            @if ($comment->winnerList)
                                {{ $comment->winnerList->name }}
                            @endif
                        </td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#winner" wire:click="setComment({{ $comment->id }})">
                                TENTUKAN PEMENANG
                            </button></td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#failed" wire:click="setComment({{ $comment->id }})">
                                GUGURKAN PESERTA
                            </button></td>
                        <td><button type="button" class="btn btn-danger"
                                wire:click="cancel({{ $comment->id }}, {{ $comment->user_id }})">Cancel</button></td>


                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="winner" tabindex="-1" role="dialog" aria-labelledby="winner" aria-hidden="true"
            wire:ignore.self>
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="winner">TENTUKAN PERINGKAT
                            JUARA
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($item)
                            <livewire:admin.components.choose-winner :comment="$item" />
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="failed" tabindex="-1" role="dialog" aria-labelledby="failed" aria-hidden="true"
            wire:ignore.self>
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="failed">GUGURKAN MEMBER</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($item)
                            <livewire:admin.components.choose-failed :comment="$item" />
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
