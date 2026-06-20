<div
    class="text-light rounded-2 d-flex flex-column position-relative card-wrapper bg-black py-4 text-center animated-neon-border">
    <h2 class="mb-0 mt-4"
        style="z-index:99;font-family: 'ds-digital', arial;color: yellow;font-weight: 900;font-size:3rem;line-height:2.5rem">
        PREDIKSI
        {{ $item->name }}
    </h2>
    <label class="fs-4 fw-bold font-digital mb-4" style="z-index:99; color:white;">
        {{ $item->updated_at->addDays(1)->isoFormat('dddd, D MMMM Y') }}
    </label>
    <a href="{{ '/tools/prediksi/' . $item->slug }}" style="z-index:99" class="mx-auto">
        <button class="btn button-gradient fs-3 px-5">KLIK DISINI</button>
    </a>
    <img src="{{ asset($item->image) }}" class="card-image">
</div>
