<div class="w-100">
    <form wire:submit.prevent="submit"
        class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center w-75 mx-auto">
        <h1>BUAT EVENT LOMBA BARU</h1>

        @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}" style="max-height: 400px">
        @endif

        <div class="input-group">
            <label for="photo" class="input-group-text">GAMBAR EVENT</label>
            <input type="file" class="form-control" wire:model="photo" id="photo" accept="image/png, image/jpeg">
        </div>
        @error('photo')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <div class="input-group-text">JUDUL LOMBA</div>
            <input type="text" class="form-control" wire:model.lazy="title" required>
        </div>
        <div class="input-group">
            <div class="input-group-text">TANGGAL LOMBA</div>
            <input type="date" wire:model="date" id="date" class="form-control">
        </div>
        <div class="input-group">
            <div class="input-group-text">LINK SHARE LOMBA</div>
            <input type="text" class="form-control" wire:model.lazy="share_link" required>
        </div>
        <div class="w-100 text-black" wire:>
            <label for="site_id">NAMA SITUS</label>
            <select wire:model="site_id" id="site_id" class="form-select">
                @foreach ($sites as $site)
                    <option value="{{ $site->id }}">{{ $site->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-100 text-black">
            <label for="status_id">STATUS LOMBA</label>
            <select wire:model="status_id" id="status_id" class="form-select">
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating w-100">
            <textarea wire:model.lazy="terms" cols="20" rows="4" class="form-control" id="terms"></textarea>
            <label for="terms" autosize>SYARAT DAN KETENTUAN</label>
        </div>

        <label class="btn btn-primary">
            <input type="checkbox" class="me-2" wire:model="need_upload" id="need_upload" autocomplete="off"> HARUS
            UPLOAD BUKTI SHARE
        </label>

        <div class="col-12 d-flex justify-content-center gap-3">
            <button class="btn btn-success">CREATE</button>
            <a href="{{ route('events.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>
        </div>
    </form>
</div>
