<div class="col-12 col-lg-6 p-2">
    <style>
        .pagination {
            border: 3px solid purple;
            border-radius: .375rem;
            --bs-pagination-bg: #1f1f1f !important;
            --bs-pagination-color: white;
            --bs-pagination-border-color: purple;
            --bs-pagination-active-bg: purple;
            --bs-pagination-active-border-color: purple;
            --bs-pagination-disabled-bg: #eee;
            --bs-pagination-disabled-border-color: #fff;
            --bs-pagination-disabled-color: #00000099;
            --bs-pagination-hover-bg: purple;
            --bs-pagination-hover-color: #fff;
        }
    </style>
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    {{-- PREVIEW MODAL --}}
    <div class="modal fade" id="preview{{ $event->id }}" tabindex="-1" role="dialog"
        aria-labelledby="preview{{ $event->id }}" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-black">
                    <h4 class="modal-title" id="preview{{ $event->id }}">{{ $event->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex text-white bg-dark gap-3 flex-lg-row flex-column">
                    <div class="col">
                        <img src="{{ $event->image }}" alt="{{ $event->name }} NANA GROUP"
                            class="col-12 mx-auto d-block img-thumbnail bg-dark border-0">
                    </div>
                    <div class="col d-flex flex-column ">

                        <h4 class="modal-title" id="preview{{ $event->id }}">{{ $event->title }}</h4>

                        <div class="fs-5">{{ date('d F Y', strtotime($event->date)) }}</div>
                        <div class="fs-5">Status: <span
                                class="text-{{ $event->status->color }} fw-bold">{{ $event->status->name }}</span>
                        </div>

                        <div class="col-12 d-flex mt-3 flex-column flex-lg-row">

                            <a class="col-12 col-lg px-2 mb-2 mb-lg-0"
                                href="@if ($event->share_link) {{ $event->share_link }} @else # @endif">
                                <button class="btn btn-primary w-100">
                                    <img src="/storage/page/icon/facebook.svg" alt="" width="25px"
                                        height="25px" class="me-1"><small>SHARE</small></button>
                            </a>
                            <div class="col-12 col-lg px-2 mb-2 mb-lg-0">
                                <button class="btn btn-warning w-100" data-bs-target="#terms{{ $event->id }}"
                                    data-bs-toggle="modal"><img src="/storage/page/icon/info.svg" alt=""
                                        width="25px" height="25px" class="me-1"><small>Syarat Dan
                                        Ketentuan</small></button>
                            </div>
                        </div>
                        @guest
                            <div class="d-flex gap-3 mx-auto flex-column flex-lg-row col-12 mt-2">
                                <a href="{{ route('login') }}" class="nav-link col-lg">
                                    <button class="btn text-white neon-border px-5 w-100">MASUK</button>
                                </a>
                                <a href="{{ route('register') }}" class="nav-link col-lg">
                                    <button class="btn text-white neon-border px-5 w-100">DAFTAR</button>
                                </a>
                            </div>
                        @endguest
                        @auth
                            <div class="col-12 px-2 mt-2" wire:click="checking({{ $event->id }})">
                                <button class="btn btn-success w-100" data-bs-toggle="modal"
                                    data-bs-target="#form{{ $event->id }}"><img src="/storage/page/icon/lotto.svg"
                                        alt="" width="25px" height="25px" class="me-1"><small>Ikut
                                        Lomba</small></button>
                            </div>
                        @endauth

                        <div class="text-start mt-1 fw-bold">DAFTAR JAWABAN PESERTA LOMBA</div>
                        <div class="col-12 mt-2 overflow-auto comment-container neon-border position-relative"
                            style="height: 280px">
                            <div class="input-group">
                                <input wire:model="search" type="search" placeholder="Cari Jawaban"
                                    class="form-control">
                            </div>
                            @if ($comments->count() == 0)
                                <div class="fs-3 fw-semibold mt-4" style="font-family: 'chakra petch', arial;">
                                    Komentar Tidak Ada
                                </div>
                            @else
                                @foreach ($comments as $item)
                                    <livewire:comment-display :comment="$item" :wire:key="time().$item->id" />
                                @endforeach
                                {{ $comments->links() }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL SYARAT DAN KETENTUAN --}}
    <div class="modal fade" id="terms{{ $event->id }}" tabindex="-1" role="dialog"
        aria-labelledby="terms{{ $event->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-black">
                    <h4 class="modal-title" id="terms{{ $event->id }}">{{ $event->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column text-white bg-dark">
                    <div class="text-center my-5 text-wrap col-10 col-lg-8 mx-auto"
                        style="font-family: sans-serif;font-size: 1.125rem">
                        {!! $event->terms !!}
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#preview{{ $event->id }}">Kembali</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL FORM IKUT LOMBA --}}
    <div class="modal fade" id="form{{ $event->id }}" tabindex="-1" role="dialog" wire:ignore.self
        aria-labelledby="form{{ $event->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header text-black">
                    <h4 class="modal-title" id="form{{ $event->id }}">{{ $event->title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column text-white bg-dark">
                    @if ($event->status_id == 1)
                        <h2 class="text-white">EVENT BELUM DIMULAI, SILAHKAN TUNGGU BEBERAPA SAAT LAGI</h2>
                        <a class="col-12 col-lg-4 px-2 mb-2 mb-lg-0 mx-auto"
                            href="@if ($event->share_link) {{ $event->share_link }} @else # @endif">
                            <button class="btn btn-primary w-100">
                                <img src="/storage/page/icon/facebook.svg" alt="" width="25px"
                                    height="25px" class="me-1"><small>CEK FACEBOOK</small></button>
                        </a>
                    @elseif ($event->status_id == 2)
                        @auth
                            @if ($participated)
                                <h2 class="text-white">TERIMA KASIH TELAH MENGIKUTI LOMBA, SILAHKAN TUNGGU SAMPAI PEMENANG
                                    LOMBA DITENTUKAN.
                                </h2>
                            @else
                                <h2 class="text-white">FORM PARTISIPASI LOMBA</h2>
                                <form wire:submit.prevent='submit' class="col-12 mx-auto col-lg-9 text-start"
                                    enctype="multipart/form-data">
                                    @if ($photo)
                                        <div class="w-100 d-flex justify-content-center">

                                            <img src="{{ $photo->temporaryUrl() }}" alt="" width="200px"
                                                height="200px" class="mx-auto">
                                            <br>
                                        </div>
                                    @endif

                                    <label class="fw-bold">NAMA SITUS</label>
                                    <select wire:model="site_id" id="site_id" class="form-select">
                                        @foreach ($sites as $site)
                                            <option value="{{ $site->id }}">{{ $site->name }}</option>
                                        @endforeach
                                    </select>

                                    <div class="mt-2 text-start">
                                        <label for="answer" class="fw-bold">JAWABAN</label>
                                        <input type="text" class="form-control" id="answer"
                                            placeholder="Masukkan Jawaban Sesuai Dengan Format Yang Berlaku"
                                            wire:model.lazy="answer">
                                    </div>

                                    @if ($event->need_upload)
                                        <div class="mt-2 text-start">
                                            <label for="photo" class="fw-bold">BUKTI SHARE</label>
                                            <input type="file" class="form-control" id="photo" wire:model="photo"
                                                accept=".jpg,.jpeg,.png" required>
                                        </div>
                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    @endif
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary col-9 col-lg-4">KIRIM</button>
                                    </div>
                                </form>
                            @endif
                        @endauth
                        @guest
                            <h2 class="text-white">
                                Silahkan Login Dahulu Jika Ingin Berpartisipasi, Terima Kasih.
                            </h2>
                            <div class="d-flex gap-3 mx-auto flex-column flex-lg-row">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <button class="btn text-white neon-border px-5">MASUK</button>
                                </a>
                                <a href="{{ route('register') }}" class="nav-link">
                                    <button class="btn text-white neon-border px-5">DAFTAR</button>
                                </a>
                            </div>
                        @endguest
                    @elseif ($event->status_id == 3)
                        <h2 class="text-white">HARAP TUNGGU SAMPAI HASIL LOMBA KELUAR, TERIMA KASIH</h2>
                        <a class="col-12 col-lg-4 px-2 mb-2 mb-lg-0 mx-auto"
                            href="@if ($event->share_link) {{ $event->share_link }} @else # @endif">
                            <button class="btn btn-primary w-100">
                                <img src="/storage/page/icon/facebook.svg" alt="" width="25px"
                                    height="25px" class="me-1"><small>CEK FACEBOOK</small></button>
                        </a>
                    @elseif ($event->status_id == 4)
                        <h2 class="text-white">LOMBA SUDAH DITUTUP</h2>
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                            data-bs-target="#winnerList{{ $event->id }}">
                            Daftar Pemenang
                        </button>
                    @endif


                </div>
                <div class="modal-footer">
                    <button type="button" type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#preview{{ $event->id }}">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    {{-- FORM LIST PEMENANG --}}

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="winnerList{{ $event->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="winnerList" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="winnerList">Daftar Pemenang Lomba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-numbered text-black">
                        @if ($event->eventComments)
                            <!--@foreach ($event->eventComments->where('winner_list_id', '!=', null)->where('winner_list_id', '<', 5) as $item)
-->
                            <!--    @if ($loop->first)
-->
                            <!--        <li class="mt-3">USER YANG MENANG:</li>-->
                            <!--
@endif-->
                            <!--    <li class="list-group-item">-->
                            <!--        {{ $item->winnerList->name . ' - ' . substr($item->user->name, 0, 3) . 'XXX - ' . $item->answer }}-->
                            <!--    </li>-->
                            <!--
@endforeach-->

                                @foreach ($event->eventComments->where('winner_list_id', '!=', null)->where('winner_list_id', '<', 5)->sortBy('winner_list_id') as $item)
                                @if ($loop->first)
                                    <li class="mt-3">USER YANG MENANG:</li>
                                @endif
                                <li class="list-group-item">
                                    {{ $item->winnerList->name . '-' . substr($item->user->username, 0, 3) . 'XXX - ' . $this->maskAnswer($item->answer) }}
                                </li>
                            @endforeach
                            @foreach ($event->eventComments->where('winner_list_id', 5) as $failures)
                                @if ($loop->first)
                                    <li class="mt-3">USER YANG GUGUR:</li>
                                @endif

                                <li class="list-group-item">
                                    {{ $failures->winnerList->name . ' - ' . substr($failures->user->username, 0, 3) . 'XXX - ' . $failures->failed_reason }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('winnerList{{ $event->id }}'), options)
    </script>

    <style>
        .event-title {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>


    <div class="col-12 p-lg-5 neon-border">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex flex-column">
                <img src="{{ $event->image }}" class="col-12 col-lg-6 mx-auto" width="260px" height="260px"
                    alt="{{ $event->title }}" title="{{ $event->title }}">
                <h4 class="text-white mt-3 event-title fs-3">{{ $event->title }}</h4>
                <label class="fs-5">{{ date('d F Y', strtotime($event->date)) }}</label>
                <label class="fs-5">Status: <span
                        class="text-{{ $event->status->color }} fw-bold">{{ $event->status->name }}</span></label>

                <button type="button" class="col-12 btn btn-info fw-bold fs-5 align-middle mt-3"
                    data-bs-toggle="modal" data-bs-target="#preview{{ $event->id }}"
                    title="{{ $event->title }}">
                    <img src="/storage/page/icon/preview.svg" alt="" width="25px" height="25px"
                        class="me-1 mb-1">Lihat
                </button>
            </div>
        </div>
    </div>
</div>
