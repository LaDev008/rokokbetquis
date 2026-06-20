<div class="col-12">
    <div class="col-12 position-relative mt-2">

        <h1 class="text-center">USER LIST</h1>
        @if (Auth::user()->role_id <= 3)
            <a href="{{ route('users.create') }}">
                <button class="btn btn-primary px-5"
                    style="position: absolute;right:20px; top: 50%;transform: translateY(-50%)">
                    Create New
                </button>
            </a>
        @endif
    </div>
    <div class="input-group mb-3 px-3">
        <input wire:model="search" type="search" placeholder="Cari Username Player" class="form-control fw-bold"
            style="color: purple !important;font-size:1.5rem;">
    </div>
    <table class="table-hover table table-striped table-dark table-bordered align-middle text-center">
        <thead>
            <tr>
                <td>No.</td>
                <td>Nama</td>
                <td>Username</td>
                <td>Nomor HP</td>
                <td>Role</td>
                @if (Auth::user()->role_id < 4)
                    <td colspan="2">Actions</td>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->role->name }}</td>
                    @if (Auth::user()->role_id < 4)
                        <td><a href="{{ route('users.edit', $user->id) }}" class="w-100"><button
                                    class="btn btn-warning">EDIT</button></a></td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">@csrf
                                @method('delete')
                                <button class="btn btn-danger"
                                    onclick="return confirm('Yakin Ingin Hapus User ?')">HAPUS</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
