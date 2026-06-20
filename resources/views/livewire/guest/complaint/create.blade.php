<div class="col-12 col-lg-8 mx-auto bg-gradient ">
    <h1 class="text-center text-white py-3 mt-lg-4">LAPOR KELUHAN</h1>
    <div class="d-flex gap-3 flex-column flex-lg-row">
        <form class="col d-flex flex-column p-4 gap-3" wire:submit.prevent='submit'>
            <div class="col-12">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" required autofocus wire:model.lazy="username">
            </div>
            <div class="col-12">
                <label for="title">Perihal: </label>
                <input type="text" class="form-control" id="title" required placeholder="Cth: Login"
                    wire:model.lazy="title">
            </div>
            <div class="col-12">
                <label for="whatsapp">Whatsapp</label>
                <input type="number" class="form-control" id="whatsapp" required placeholder="Cth: 08xxx697"
                    wire:model.lazy='whatsapp'>
            </div>
            <div class="col-12">
                <label for="content">Keluhan</label>
                <input type="text" class="form-control" id="content" required placeholder="Tidak Bisa Login di BO Nana4D"
                    wire:model.lazy="content">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-primary col-6 col-lg-3">KIRIM</button>
            </div>
            @if ($complainCode)
                <label class="p-4 fs-5 bg-light text-black rounded-3 fw-semibold" style="font-family: sans-serif">Kode
                    Keluhan Anda Adalah: <span class="text-primary">{{ $complainCode }}</span>, Silahkan Tunggu Beberapa
                    Saat Dan
                    Gunakan Form Pencarian Keluhan Jika Ingin Melihat Status Keluhan, Terima Kasih</label>
            @endif
        </form>
        <form class="col p-4 d-flex flex-column" wire:submit.prevent='search'>
            Cari Keluhan
            <div class="input-group">
                <input type="text" required class="form-control" id="search"
                    placeholder="Masukkan Kode Keluhan Anda" wire:model.defer="search">
                <button class="input-group-text" type="submit">Search</button>
            </div>
            @if ($search)
                <div class="mt-4 bg-light text-black col-12 rounded-3 p-3 d-flex flex-column fw-semibold text-wrap"
                    style="font-family: sans-serif; overflow:hidden">
                    @if ($result)
                        <div>Kode Keluhan: {{ $search }}</div>
                        <div>Pembuat Keluhan: {{ $result->username }}</div>
                        <div>Judul Keluhan: {{ $result->title }}</div>
                        <div>Isi Keluhan: {{ $result->content }}</div>
                        <div>Dibuat Pada Waktu:
                            {{ Carbon\Carbon::parse($result->created_at)->translatedFormat('d F Y, H:i:s') }}</div>
                        @if ($result->done)
                            <div>Status : <span class="text-success">Selesai</span></div>
                            <div>Jawaban Admin:
                                @if ($result->answer)
                                    {{ $result->answer }}
                                @else
                                    Keluhan Anda Sudah Di Proses, Silahkan Dicek Kembali Bosku, Terima Kasih
                                @endif
                            @else
                                <div><span class="text-danger">Belum Diproses</span></div>
                        @endif
                </div>
            @else
                Keluhan Tidak Ditemukan, Silahkan Cek Kembali Kode Anda.
            @endif
    </div>

    @endif

    </form>

</div>
</div>
