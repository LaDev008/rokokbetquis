<div>
    <form wire:submit.prevent='submit' class="col-12">
        <label for="reason">ALASAN GUGUR</label>
        <input type="text" class="form-control" wire:model="reason" required id="reason">
        <button class="btn btn-success col-3 mt-3">SUBMIT</button>
    </form>

</div>
