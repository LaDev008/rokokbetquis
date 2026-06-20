<div class="w-100 h-100 d-flex mt-4 flex-column align-items-center" style="min-height: 100vh" wire:poll.500ms='getLive'>
    <style>
        .kingkong-title {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: min(92vw, 1180px);
            margin: 0 auto 1rem;
            padding: .55rem 1.25rem;
            border: 2px solid rgba(255, 234, 0, .9);
            border-radius: 14px;
            background: linear-gradient(180deg, rgba(0, 0, 0, .96) 0%, rgba(36, 29, 0, .94) 100%);
            color: #ffea00;
            text-align: center;
            letter-spacing: .04em;
            text-transform: uppercase;
            font-weight: 900;
            font-size: clamp(1.05rem, 2.6vw, 2.4rem);
            line-height: 1.1;
            text-shadow: 0 2px 0 #000, 0 0 12px rgba(255, 234, 0, .25);
            box-shadow: 0 10px 25px rgba(0, 0, 0, .35), inset 0 1px 0 rgba(255, 255, 255, .08);
            backdrop-filter: blur(2px);
        }

        .last_result {
            margin-block: 20px;
            font-weight: 900;
            color: #ffea00;
            font-size: clamp(.72rem, 2.15vw, 1.15rem);
            background: rgba(0, 0, 0, .82);
            border: 1px solid rgba(255, 234, 0, .9);
            border-radius: 999px;
            padding: .25rem .8rem;
            text-shadow: 0 2px 0 #000, 0 0 8px rgba(255, 234, 0, .2);
            box-shadow: 0 6px 18px rgba(0, 0, 0, .35);
            white-space: nowrap;
        }
    </style>
        <h1 class="kingkong-title">LIVEDRAW PASARAN KINGKONGPOOLS</h1>
    <div class="position-relative container-lg container-fluid d-flex flex-column align-items-center">
        <div class="" style="position: relative">
            <img src="/storage/kingkong/background-livedraw.webp" alt="" style="max-width:600px;width:100%">
            <img src="/storage/page/" alt="">
        </div>
        <div style="position: absolute; top: 27.5%; left: 50%;transform:translateX(-50%); display:flex; gap:8px">
            <img src="/storage/kingkong/{{ $first_digit }}.webp" alt="" style="max-width: 95px;width:14vw">
            <img src="/storage/kingkong/{{ $second_digit }}.webp" alt="" style="max-width: 95px;width:14vw">
            <img src="/storage/kingkong/{{ $third_digit }}.webp" alt="" style="max-width: 95px;width:14vw">
            <img src="/storage/kingkong/{{ $fourth_digit }}.webp" alt="" style="max-width: 95px;width:14vw">
        </div>
        <div class="last_result">{{ $last_result }}</div>
    </div>

    <div class="container-lg px-4 container-fluid">
        <livewire:components.livedraw-links first="sydney" second="singapore" third="hongkong" fourth="macau"/>
    </div>
</div>
