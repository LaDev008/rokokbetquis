<div>
    <form wire:submit.prevent='submit' class="col-12">
        <label for="winner_list">LIST JUARA</label>
        <select wire:model="winner_list_id" id="winner_list" class="form-control">
            @foreach ($winner_lists as $data)
                <option value={{ $data->id }}>{{ $data->name }}</option>
            @endforeach
        </select>

        <button class="btn btn-success col-3 mt-3">SUBMIT</button>
    </form>

</div>
