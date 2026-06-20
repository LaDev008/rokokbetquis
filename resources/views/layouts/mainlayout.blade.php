<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'TIP4DQUIS') }} - @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="Y-dU4wXsMk7ZtErtvQ05xKeH6aLyH8q7tY9GOACPu6M" />
    <link rel="shortcut icon" href="/storage/page/favicon.webp" type="image/x-icon">


    @if ($navigation)
        @if ($navigation->seoPages()->first())
            <meta name="keyword" content="{{ $navigation->seoPages->first()->meta_keywords }}">
            <meta name="description" content="{{ $navigation->seoPages->first()->meta_description }}">
            <link rel="canonical" href="{{ $navigation->seoPages->first()->meta_canonical }}" />
            <meta property="og:title" content="{{ $navigation->seoPages->first()->title }}" />
            <meta property="og:description" content="{{ $navigation->seoPages->first()->meta_description }}" />
            <meta property="og:url" content="{{ $navigation->seoPages->first()->meta_canonical }}" />
            <meta property="og:site_name" content="{{ $page->main_slogan }}" />
            <meta name="author" content="{{ $navigation->seoPages->first()->author }}" />
        @endif
    @endif

    <meta property="og:locale" content="id_ID" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    @include('css.style')
    @yield('stylesheet')
    @yield("amphtml")
    @livewireStyles
</head>

<body class="g-0 container-fluid bg-black">
    <div class="col-12 content-container">
        <header class="row g-0 fixed-top">
            <div
                class="d-flex justify-content-center align-items-center flex-column-reverse flex-lg-column col-12 col-lg-8 text-center mx-auto font-digital navbar-container">
                <img src="/storage/page/image/banner-gif.jpg" alt="Prediksi Paman Sam" width="100%" height="170px"
                    class="d-none d-lg-block">
                <nav class="navbar navbar-dark w-100 navbar-expand-lg fs-4">
                    <div class="container-fluid position-relative d-flex justify-content-center g-0 py-1 py-lg-0">
                        <a href="{{ route('home') }}" class="d-lg-none w-100">
                            <img src="/storage/page/image/banner-gif.jpg" alt="Logo Nana4D" width="100%"
                                height="125px">
                        </a>
                        <div class="offcanvas offcanvas-end text-bg-dark text-start" tabindex="-1" id="mainNavbar"
                            aria-labelledby="mainNavbarLabel">
                            <div class="offcanvas-header">
                                <a href="{{ route('home') }}">
                                    <img src="{{ $page->logo }}" alt="" height="40px">
                                </a>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul
                                    class="navbar-nav justify-content-between flex-grow-1 col-12 overflow-x-scroll overflow-hidden">
                                    <li class=" col text-nowrap nav-item d-flex align-items-center">

                                        <a class="nav-link @if (request()->routeIs('home')) active @endif"
                                            aria-current="page" href="{{ route('home') }}"><span><img
                                                    src="/storage/page/icon/home.webp" alt="Home"
                                                    title="BERANDA"></span> HOME</a>
                                    </li>
                                    <li class=" col text-nowrap nav-item d-flex align-items-center">

                                        <a class="nav-link @if (request()->routeIs('prediction')) active @endif"
                                            aria-current="page" href="{{ route('prediction') }}"><span><img
                                                    src="/storage/page/icon/black-lotto-ball.webp" alt="prediksi"
                                                    title="PREDIKSI"></span> PREDIKSI</a>
                                    </li>

                                    <li class=" col text-nowrap nav-item d-flex align-items-center livedraw-container">
                                        <a class="nav-link @if (request()->routeIs('livedraw')) active @endif"
                                            aria-current="page" href="{{ route('livedraw.sydney') }}"><span><img
                                                    src="/storage/page/icon/livedraw.webp" alt="livedraw"
                                                    title="Livedraw Tercepat"></span> LIVEDRAW</a>


                                    </li>

                                    <li class=" col text-nowrap nav-item d-flex align-items-center">
                                        <a class="nav-link @if (request()->routeIs('site')) active @endif"
                                            aria-current="page" href="{{ route('site') }}"><span><img
                                                    src="/storage/page/icon/blue-sphere.webp" alt="info situs rokokslot"
                                                    title="info situs rokokslot"></span> INFO SITUS ROKOKBET</a>
                                    </li>


                                    <li class=" col text-nowrap nav-item d-flex align-items-center paito-container">

                                        <a class="nav-link @if (request()->routeIs('paito')) active @endif"
                                            href="{{ route('paito.sydney') }}"><span><img
                                                    src="/storage/page/icon/paito.webp" alt="paito"
                                                    title="Paito Terlengkap"></span> Paito
                                            Warna</a>


                                    </li>

                                    <li class=" col text-nowrap nav-item d-flex align-items-center">

                                        <a class="nav-link @if (request()->routeIs('event')) active @endif"
                                            aria-current="page" href="{{ route('event') }}"><span><img
                                                    src="/storage/page/icon/medal.webp"
                                                    alt="Lomba Togel Nana4D & Nono4D"></span> Lomba
                                            Togel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="livedraw-drawer">
            @foreach ($top_market as $item)
                <a class="livedraw-item" href="{{ route('livedraw.' . $item->slug) }}">
                    <img src="{{ $item->emblem }}" alt="livedraw" title="Livedraw Tercepat">
                    <label>
                        LIVEDRAW {{ $item->name }}
                    </label>
                </a>
            @endforeach

            <a class="livedraw-item" href="{{ route('livedraw.macau') }}">
                <img src="/storage/market/emblem/macau.webp" alt="livedraw" title="Livedraw Tercepat">
                <label>
                    LIVEDRAW MACAU
                </label>
            </a>

            <a class="livedraw-item" href="{{ route('livedraw.kingkong') }}">
                <img src="/storage/market/emblem/kingkong.webp" alt="livedraw" title="Livedraw Tercepat">
                <label>
                    LIVEDRAW KINGKONG POOLS
                </label>
            </a>
        </div>

        <div class="paito-drawer">
            @foreach ($top_market as $item)
                <a class="paito-item" href="{{ route('paito.' . $item->slug) }}">
                    <img src="{{ $item->emblem }}" alt="paito" title="Paito Terlengkap">
                    <label>
                        PAITO {{ $item->name }}
                    </label>
                </a>
            @endforeach
        </div>
        <main>
            @yield('content')
        </main>
    </div>

    <div class="separator">&nbsp;</div>
    @if ($navigation)
        @if ($navigation->seoPages->first())
            <div class="bg-dark col-12 p-4">
                <article class="col-12 col-lg-8 mx-auto text-justify">
                    {!! $navigation->seoPages->first()->article !!}
                </article>
            </div>
        @endif
    @endif

    <footer class="bg-dark col-12 p-4">
        @yield('footer')

        <div class="d-none">
            <a href="http://47.95.151.193/">http://47.95.151.193/</a>
            <a href="https://167.172.76.97">https://167.172.76.97/</a>
            <a href="https://gpshof.org">Agen Togel</a>
        </div>
    </footer>



    <livewire:component.tools />
    <!-- Bootstrap JavaScript Libraries -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <script>
        $(
            function() {
                $('.livedraw-container').hover(function() {
                    $('.livedraw-drawer').css('display', 'flex');
                }, function() {
                    $('.livedraw-drawer').css('display', 'none');
                })

                $('.livedraw-drawer').hover(function() {
                    $('.livedraw-drawer').css('display', 'flex');
                }, function() {
                    $('.livedraw-drawer').css('display', 'none');
                });

                $('.paito-container').hover(function() {
                    $('.paito-drawer').css('display', 'flex');
                }, function() {
                    $('.paito-drawer').css('display', 'none');
                })

                $('.paito-drawer').hover(function() {
                    $('.paito-drawer').css('display', 'flex');
                }, function() {
                    $('.paito-drawer').css('display', 'none');
                });
            })
    </script>

    <!--LIVEWIRE PAGE EXPIRATION FIX -->
    <script>
        document.addEventListener('livewire:load', () => {
            Livewire.onPageExpired((response, message) => {})
        })
    </script>
    <!--LIVEWIRE PAGE EXPIRATION FIX -->

    <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,4898974,4,0,0,0,00010000']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
    hs.src = ('//s10.histats.com/js15_as.js');
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();</script>
    <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4898974&101" alt="" border="0"></a></noscript>
    <!-- Histats.com  END  -->

    @livewireScripts
</body>

</html>
