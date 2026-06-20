<div class="p-4 d-flex flex-column gap-4">
    <h1 class="text-center">Livedraw Singapore {{ $data_singapore->is_toto ? 'Toto' : '4D' }}
        {{ Carbon\Carbon::parse($data_singapore->date)->isoFormat('dddd, d MMMM YYYY') }}</h1>

    <form wire:submit.prevent="update">
        <table class="table table-light table-bordered text-center">
            <thead>
                <tr>
                    <th colspan="4">Livedraw Singapore {{ $data_singapore->is_toto ? 'Toto' : '4D' }}
                        {{ Carbon\Carbon::parse($data_singapore->date)->isoFormat('dddd, d MMMM YYYY') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">First Prize</td>
                    <td colspan="2"><input type="text" class="form-control text-center" placeholder="-" wire:model='first_prize'></td>
                </tr>
                <tr>
                    <td colspan="2">Second Prize</td>
                    <td colspan="2"><input type="text" class="form-control text-center" placeholder="-" wire:model='second_prize'></td>
                </tr>
                <tr>
                    <td colspan="2">Third Prize</td>
                    <td colspan="2"><input type="text" class="form-control text-center" placeholder="-" wire:model='third_prize'></td>
                </tr>
                <tr>
                    <td colspan="2">STARTER</td>
                    <td colspan="2">CONSOLATION</td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_1'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_2'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_1'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_2'></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_3'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_4'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_3'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_4'></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_5'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_6'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_5'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_6'></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_7'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_8'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_7'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_8'></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_9'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='starter_10'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_9'></td>
                    <td><input type="text" class="form-control text-center" placeholder="-" wire:model='consolation_10'></td>
                </tr>
            </tbody>

        </table>
        <div class="d-flex gap-4 justify-content-center">
            <button class="btn btn-primary">SAVE</button>
            <a href="{{ route('admin.livedraw.index') }}"><button class="btn btn-danger"
                    type="button">Back</button></a>
        </div>
    </form>
</div>
