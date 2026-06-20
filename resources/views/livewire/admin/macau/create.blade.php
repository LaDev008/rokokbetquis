<div class="col-8">
    <form class="bg-light col-12 shadow-lg with-3d-shadow p-4 d-flex flex-column gap-3" wire:submit.prevent='submit'>
        <h1 class="text-center">CREATE NEW MACAU DATA</h1>
        <div class="input-group">
            <label for="result1" class="w-25 input-group-text">RESULT 00.00 WIB</label>
            <input id="result1" type="text" wire:model.lazy="result1" class="form-control" autofocus>
        </div>
        @error('result1')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <label for="result2" class="w-25 input-group-text">RESULT 13.00 WIB</label>
            <input id="result2" type="text" wire:model.lazy="result2" class="form-control">
        </div>
        @error('result2')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <label for="result3" class="w-25 input-group-text">RESULT 16.00 WIB</label>
            <input id="result3" type="text" wire:model.lazy="result3" class="form-control">
        </div>
        @error('result3')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <label for="result4" class="w-25 input-group-text">RESULT 19.00 WIB</label>
            <input id="result4" type="text" wire:model.lazy="result4" class="form-control">
        </div>
        @error('result4')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <label for="result5" class="w-25 input-group-text">RESULT 22.00 WIB</label>
            <input id="result5" type="text" wire:model.lazy="result5" class="form-control">
        </div>
        @error('result5')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <label for="date" class="w-25 input-group-text">TANGGAL RESULT</label>
            <input id="date" type="date" wire:model.lazy="date" class="form-control" wire:change='changeDay' required>
        </div>
        @error('date')
            <span class="error text-danger">{{ $message }}</span>
        @enderror

        <div class="input-group">
            <label for="day" class="w-25 input-group-text">HARI RESULT</label>
            <input id="day" type="day" wire:model.lazy="day" class="form-control" readonly>
        </div>

        <div class="col-12 d-flex gap-3 justify-content-center">
            <button class="btn btn-primary" type="submit">SUBMIT</button>
            <a href="{{ route('macaus.index') }}">
                <button class="btn btn-danger" type="button">CANCEL</button>
            </a>
        </div>
    </form>
</div>
