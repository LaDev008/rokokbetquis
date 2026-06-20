<div class="w-75">
    <form class="w-100 p-4 shadow shadow-lg rounded rounded-3 flex-column d-flex" wire:submit.prevent='submit'>
        <div class="d-flex w-100 align-items-center">
            <div class="w-50 px-2 d-flex flex-column">
                <label>OLD: </label>
                <img src="{{ $old_logo }}" class="img-fluid w-100" style="background: #00000080">
            </div>
            @if ($logo)
                <div class="w-50 px-2 d-flex flex-column">
                    <label>NEW: </label>
                    <img src="{{ $logo->temporaryUrl() }}" class="w-100 img-fluid">
                </div>
            @endif
        </div>

        <h1 class="text-center">Logo</h1>
        <label for="image" class="form-label mt-3">Logo</label>
        <div class="input-group">
            <input type="file" id="image" class="form-control" wire:model="logo">
        </div>
        <div class="col-6 d-flex justify-content-center mx-auto gap-3 mt-3">
            <button class="btn btn-success" type="submit">SUBMIT</button>
        </div>
    </form>
</div>
