<div class="col-12">
    <style>
        form img {
            max-width: 300px;
        }
    </style>
    <form wire:submit.prevent='submit' class="d-flex flex-column align-items-center gap-3 p-5 col-8 mx-auto bg-dark"
        enctype="multipart/form-data">
        <h1 class="text-white">TAMBAH PASARAN BARU</h1>

        <div class="col-12 d-flex gap-2">
            <div class="col" style="max-width: 50%;">
                <label>BACKGROUND</label>
                @if ($background)
                    <img src="{{ $background->temporaryUrl() }}" class="w-100">
                @endif
            </div>
            <div class="col">
                <label>EMBLEM</label>
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" class="w-100">
                @endif
            </div>
        </div>

        <div class="input-group">
            <label for="emblem" class="input-group-text">Background Pasaran</label>
            <input type="file" wire:model="background" class="form-control">
        </div>

        <div class="input-group">
            <label for="emblem" class="input-group-text">Logo Pasaran</label>
            <input type="file" wire:model="photo" class="form-control">
        </div>

        <div class="input-group">
            <label for="name" class="input-group-text w-25">NAMA PASARAN</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>

        <div class="input-group">
            <label for="open" class="input-group-text w-25">JAM BUKA</label>
            <input type="text" class="form-control" wire:model="open">
        </div>
        <div class="input-group">
            <label for="close" class="w-25 input-group-text">JAM TUTUP</label>
            <input type="text" class="form-control" id="close" wire:model="close">
        </div>
        <div class="input-group">
            <label for="name" class="input-group-text w-25">LINK LIVEDRAW</label>
            <input type="text" class="form-control" id="name" wire:model="livedraw">
        </div>
        <div class="input-group">
            <label for="article" class="w-25 input-group-text">ARTIKEL</label>
            <textarea wire:model.lazy="article" id="article" style="height:500px" class="form-control" autosize>{{ $article }}</textarea>
        </div>
        <div class="d-flex w-100 mt-3 gap-2 justify-content-center">
            <button class="btn btn-primary w-25" type="submit">SUBMIT</button>
            <a href="{{ route('predicts.index') }}" class="w-25"><button class="btn btn-danger w-100"
                    type="button">KEMBALI</button></a>
        </div>
    </form>
</div>
