<!doctype html>
<html lang="en">

<head>
    <title>Livedraw Sydney, Singapore, Hongkong Tercepat | </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    @livewireStyles
</head>

<body class="g-0 container-fluid bg-black">
    <div class="col-12 content-container">

        <header class="row g-0">
            <div
                class="d-flex justify-content-center align-items-center flex-column-reverse flex-lg-column col-12 col-lg-8 text-center mx-auto mt-lg-3 gap-lg-4">
                <a href="{{ route('home') }}">
                    <img src="{{ $page->logo }}" alt="Logo Nana4D" class="main-logo d-none d-lg-block">
                </a>
                <label class="main-title">{{ $page->main_slogan }}</label>
                <nav class="navbar navbar-dark  sticky-top w-100 navbar-expand-lg fs-4 bg-gradient border_semi_round">
                    <div class="container-fluid position-relative d-flex justify-content-center">
                        <a href="{{ route('home') }}" class="d-lg-none">
                            <img src="{{ $page->logo }}" alt="Logo Nana4D" height="60px">
                        </a>
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#mainNavbar" aria-controls="mainNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
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
                                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                                    <li class="nav-item align-middle d-lg-none d-flex gap-3">
                                        @guest
                                            <a href="{{ route('login') }}" class="nav-link">
                                                <button class="btn text-white register-button">MASUK</button>
                                            </a>
                                            <a href="{{ route('register') }}" class="nav-link">
                                                <button class="btn text-white register-button">DAFTAR</button>
                                            </a>
                                        @endguest
                                        @auth
                                            <div class="dropdown">
                                                <button class="btn register-button dropdown-toggle" type="button"
                                                    id="user_info" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    {{ Auth::user()->name }}
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="user_info">
                                                    <a class="dropdown-item"
                                                        href="#">{{ Auth::user()->username }}</a>
                                                    <a class="dropdown-item">{{ Auth::user()->phone_number }}</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('logout') }}" class="dropdown-item">LOGOUT</a>
                                                </div>
                                            </div>
                                        @endauth
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('home') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="marketData"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Livedraw</a>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="marketData">
                                            <a class="dropdown-item text-white"
                                                href="{{ route('livedraw.sydney') }}">Livedraw Sydney</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('livedraw.singapore') }}">Livedraw Singapore</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('livedraw.hongkong') }}">Livedraw Hongkong</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('livedraw.macau') }}">Livedraw Macau</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="marketData"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Paito Warna</a>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="marketData">
                                            <a class="dropdown-item text-white"
                                                href="{{ route('paito.sydney') }}">Paito Sydney</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('paito.singapore') }}">Paito Singapore</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('paito.hongkong') }}">Paito Hongkong</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="marketData"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Data</a>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="marketData">
                                            <a class="dropdown-item text-white"
                                                href="{{ route('data.sydney') }}">Data
                                                Sydney</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('data.singapore') }}">Data
                                                Singapore</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('data.hongkong') }}">Data
                                                Hongkong</a>
                                            <a class="dropdown-item text-white" href="{{ route('data.macau') }}">Data
                                                Macau</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="marketData"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Referensi Togel</a>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="marketData">
                                            <a class="dropdown-item text-white"
                                                href="{{ route('prediction') }}">Prediksi Togel</a>
                                            <a class="dropdown-item text-white" href="{{ route('dreambook') }}">Buku
                                                Mimpi</a>
                                            <a class="dropdown-item text-white" href="{{ route('bbfs') }}">Bbfs
                                                Generator</a>
                                            <a class="dropdown-item text-white"
                                                href="{{ route('calculator') }}">Kalkulator Toto SGP</a>
                                        </div>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ route('prediction') }}">Prediksi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('dreambook') }}">Buku
                                        Mimpi</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('event') }}">Lomba
                                            Togel</a>
                                    </li>

                                    <li class="nav-item ms-auto align-middle d-none d-lg-block">
                                        @guest
                                            <div class="d-flex gap-1">
                                                <a href="{{ route('register') }}" class="nav-link">
                                                    <button class="btn text-white register-button">DAFTAR</button>
                                                </a>
                                                <a href="{{ route('login') }}" class="nav-link">
                                                    <button class="btn text-white register-button">MASUK</button>
                                                </a>
                                            </div>
                                        @endguest
                                        @auth
                                            <div class="dropdown">
                                                <button class="btn register-button dropdown-toggle" type="button"
                                                    id="user_info" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    {{ Auth::user()->name }}
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="user_info">
                                                    <a class="dropdown-item"
                                                        href="#">{{ Auth::user()->username }}</a>
                                                    <a class="dropdown-item">{{ Auth::user()->phone_number }}</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ route('logout') }}" class="dropdown-item">LOGOUT</a>
                                                </div>
                                            </div>
                                        @endauth
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main class="d-flex flex-column gap-2 gap-lg-4 mt-5 h-100">
            @yield('content')
        </main>
    </div>

    <div class="separator">&nbsp;</div>
    <div class="bg-dark col-12 p-4">
        <article class="col-12 col-lg-8 mx-auto text-justify">
            @if ($navigation)
                @if ($navigation->seoPages->first())
                    {!! $navigation->seoPages->first()->article !!}
                @endif
            @endif
            @yield('footer')
        </article>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

    @livewireScripts
</body>

</html>
