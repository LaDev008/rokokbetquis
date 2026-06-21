<div class="tools-fixed">
    <style>
        .extra-menu {
            position: absolute;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            bottom: 0%;
            right: 140%;
        }

        .extra-menu>a {
            background: #1f1f1f;
            font-size: clamp(.8rem, 1.2vw, 1.25rem);
            text-align: center;
            padding: 1rem;
            text-decoration: none;
            color: white;
        }
    </style>
    <div wire:loading.remove>

        @if ($show_menu)
            <img src="/storage/page/icon/close.webp" alt="Alat Togel" width="100px" height="100px" wire:click="toggleMenu">
        @else
            <img src="/storage/page/icon/tools.webp" alt="Alat Togel" width="100px" height="100px" wire:click="toggleMenu">
        @endif
    </div>
    <label class="neon-text bg-dark text-center">Alat Togel</label>

    @if ($show_menu)
        <div class="extra-menu">
            <a class="neon-text neon-border rounded-5" href="{{ route('bbfs') }}">
                BBFS GENERATOR
            </a>
            <a class="neon-text neon-border rounded-5" href="{{ route('calculator') }}">
                SGP TOTO CALCULATOR
            </a>
            <a class="neon-text neon-border rounded-5 text-decoration-none" href="{{ route('dreambook') }}">BUKU
                MIMPI</a>
        </div>
    @endif
</div>
{{-- wire:click='toggleMenu' --}}
