<div class="col-12">
    <form wire:submit.prevent="submit"
        class="with-3d-shadow p-5 shadow-lg rounded-3 col-8 d-flex justify-content-center flex-column gap-3 align-items-center w-75 mx-auto">
        <h1>EDIT EVENT LOMBA</h1>

        <div class="col-12 d-flex">
            <div class="col-6 p-5 @if (!$new_photo) mx-auto @endif">
                <label>OLD:</label>
                <img src="{{ $old_photo }}" class="w-100" style="max-height: 400px">
            </div>

            @if ($new_photo)
                <div class="col-6 p-5">
                    <label>NEW :</label>
                    <img src="{{ $new_photo->temporaryUrl() }}" class="w-100" style="max-height: 400px">
                </div>
            @endif
        </div>

        <div class="input-group">
            <label for="new_photo" class="input-group-text">GAMBAR EVENT</label>
            <input type="file" class="form-control" wire:model="new_photo" id="new_photo">
        </div>
        @error('new_photo')
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
        <div class="w-100 text-black">
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
            <textarea wire:model.lazy="terms" class="form-control" id="terms" style="min-height: 200px;"></textarea>
            <label for="terms" autosize>SYARAT DAN KETENTUAN</label>
        </div>

        <label class="btn btn-primary me-auto">
            <input type="checkbox" class="me-2" wire:model="need_upload" id="need_upload" autocomplete="off"
                @if ($need_upload) checked @endif> HARUS
            UPLOAD BUKTI SHARE
        </label>

        <div class="col-12 d-flex justify-content-center gap-3">
            <button class="btn btn-success">SUBMIT</button>
            <a href="{{ route('events.index') }}"><button class="btn btn-danger" type="button">CANCEL</button></a>

            @if (Auth::user()->role_id == 1)
                <button class="btn btn-info text-white font-bold" wire:click="flush" type="button">
                    HAPUS BUKTI SHARE
                </button>
            @endif
        </div>
    </form>
</div>
