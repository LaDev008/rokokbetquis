<div class="col-12 d-flex gap-3 flex-wrap flex-column">
    <div class="d-flex gap-3">
        <div class="col">
            <div class="button-gradient text-center">
                <a href="{{ route("livedraw.$first") }}" class="text-white text-decoration-none">
                    LIVEDRAW <br> <span class="text-uppercase">{{ $first }}</span>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="button-gradient text-center">
                <a href="{{ route("livedraw.$second") }}" class="text-white text-decoration-none">
                    LIVEDRAW <br> <span class="text-uppercase">{{ $second }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex gap-3">
        <div class="col">
            <div class="button-gradient text-center">
                <a href="{{ route("livedraw.$third") }}" class="text-white text-decoration-none">
                    LIVEDRAW <br> <span class="text-uppercase">{{ $third }}</span>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="button-gradient text-center">
                <a href="{{ route("livedraw.$fourth") }}" class="text-white text-decoration-none">
                    LIVEDRAW <br> <span class="text-uppercase">{{ $fourth }}</span>
                </a>
            </div>
        </div>
    </div>
</divv>
