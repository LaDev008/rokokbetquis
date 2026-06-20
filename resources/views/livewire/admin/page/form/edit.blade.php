<div class="w-50">
    @if (session()->has('message'))
        <livewire:components.flash status="{{ session('status') }}" message="{{ session('message') }}" />
    @endif

    <form wire:submit.prevent='submit'
        class="p-4 w-100 shadow shadow-lg rounded rounded-3 text-center gap-3 d-flex flex-column"
        enctype="multipart/form-data">
        <h1>EDIT DETAIL HALAMAN</h1>
        <div class="input-group mt-3">
            <label for="name" class="input-group-text w-25">NAMA SITUS</label>
            <input type="text" class="form-control @error('name') is_invalid @enderror" id="name"
                value="{{ $name }}" wire:model.lazy="name">
        </div>
        @error('name')
            <livewire:components.flash-error :message="$message" />
        @enderror

        <div class="input-group">
            <label for="link" class="input-group-text w-25">LINK SITUS</label>
            <input type="text" class="form-control @error('link') is_invalid @enderror" id="link"
                value="{{ $link }}" wire:model.lazy="link">
        </div>
        @error('link')
            <livewire:components.flash-error :message="$message" />
        @enderror

        <div class="input-group">
            <label for="main_slogan" class="input-group-text w-25">SLOGAN UTAMA</label>
            <input type="text" class="form-control @error('main_slogan') is_invalid @enderror" id="main_slogan"
                value="{{ $main_slogan }}" wire:model.lazy="main_slogan">
        </div>
        @error('main_slogan')
            <livewire:components.flash-error :message="$message" />
        @enderror

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="main_article" style="height:200px">{{ $page->main_article }}</textarea>
            <label for="main_article">ARTIKEL UTAMA</label>
        </div>

        <div class="d-flex col-12 justify-content-center gap-3">
            <button class="btn btn-success" type="submit">SUBMIT</button>
            <a href="{{ route('admin.page.image') }}">
                <button class="btn btn-warning" type="button">Ganti Logo / Background</button>
            </a>
        </div>


    </form>
</div>
