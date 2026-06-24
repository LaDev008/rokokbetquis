@extends('layouts.mainlayout')
@section('title', 'HOME')
@section("amphtml")
<link rel="amphtml" href="https://kapallawd.com/amp/pamansam/">
@endsection
@section('content')
    <div
        class="d-flex justify-content-center align-items-center flex-column col-12 col-lg-8 text-center mx-auto font-digital">
        <div class="col-12 g-0 relative running-text-container mt-2 text-black">
            <span><img src="/storage/page/icon/megaphone.webp" alt="" width="36px" height="36px"></span>
            <marquee behavior="scroll" direction="left" class="w-100">
                {{ $page->main_slogan }}
            </marquee>
        </div>

        <div class="main-content-container col-12 mx-4 g-0 py-lg-3 p-3 px-lg-5 d-flex align-items-center flex-column gap-4">

            <div id="mainCarousel" class="carousel slide w-100 home-carousel" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="First slide"></li>
                    <li data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="/storage/page/image/banner-1.webp" class="d-block w-100 home-carousel-image"
                            alt="Link anti nawala nono4d">
                    </div>

                    <div class="carousel-item">
                        <img src="/storage/page/image/banner-2.webp" class="d-block w-100 home-carousel-image"
                            alt="Link anti nawala nana4d">
                    </div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="col-12 cta-container">
                @guest
                    <a class="button-gradient text-decoration-none text-white" href="{{ route('login') }}"><span
                            class="d-lg-none"><img src="/storage/page/icon/login.webp" alt=""></span> LOGIN</a>
                    <a class="button-gradient text-decoration-none text-white" href="{{ route('register') }}"><span
                            class="d-lg-none"><img src="/storage/page/icon/daftar.webp" alt=""></span> DAFTAR</a>
                @endguest
                @auth
                    @if (Auth::user()->role_id < 5)
                        <a class="button-profile text-decoration-none text-white" href="{{ route('dashboard') }}">ADMIN
                            PANEL</a>
                    @else
                        <div class="button-profile">{{ Auth::user()->name }}</div>
                    @endif
                    <a class="button-profile text-decoration-none text-white" href="{{ route('logout') }}">LOGOUT</a>
                @endauth
                <a class="button-gradient text-decoration-none text-white" href="https://jetlinkr.co/rtpslotmg"><span
                        class="d-lg-none"><img src="/storage/page/icon/promo.webp" alt=""></span> POLA SLOT</a>
                <a class="button-gradient text-decoration-none text-white" href="/lomba-freechip"><span
                        class="d-lg-none"><img src="/storage/page/icon/controller.webp" alt=""></span> EVENT FREECHIP</a>
            </div>

            <div class="d-lg-none navbar-mobile">
                <a class="button-gradient text-decoration-none text-white" href="{{ route('home') }}">
                    HOME
                </a>
                <a class="button-gradient text-decoration-none text-white" href="{{ route('prediction') }}">
                    PREDIKSI
                </a>
                <a class="button-gradient text-decoration-none text-white" href="{{ route('livedraw.sydney') }}">
                    LIVEDRAW
                </a>
                <a class="button-gradient text-decoration-none text-white" href="{{ route('site') }}">
                    DAFTAR SITUS
                </a>
                <a class="button-gradient text-decoration-none text-white" href="{{ route('paito.sydney') }}">
                    PAITO WARNA
                </a>
                <a class="button-gradient text-decoration-none text-white" href="{{ route('event') }}">
                    LOMBA TOGEL
                </a>
            </div>

            <div class="col-12">
                <img src="/storage/page/image/pasaran-togel.webp" alt="" class="w-100" style="max-width: 600px;">
            </div>

            <div class="col-12 d-flex flex-wrap justify-content-around">
                <livewire:predict-card-home>
            </div>
        </div>
    </div>

    <style>
        #mainCarousel.home-carousel {
            width: 100%;
            max-width: 100%;
            overflow: hidden;
        }

        #mainCarousel .carousel-inner,
        #mainCarousel .carousel-item {
            width: 100%;
        }

        #mainCarousel .carousel-item {
            aspect-ratio: 1114 / 445;
            background: #000;
            position: relative;
        }

        #mainCarousel .home-carousel-image {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center center;
            display: block;
        }
    </style>
@endsection
