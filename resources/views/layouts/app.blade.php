<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Obzivalka') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Roboto+Condensed:400,300,700"
          rel="stylesheet"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href="/assets/css/animate.css" rel="stylesheet" />

    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/color/default.css" rel="stylesheet"/>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"/>
    <link rel="shortcut icon" href="ico/favicon.ico"/>
</head>
<body>
<div id="app">
    <header>
        <!-- start top -->
        <div id="topnav" class="navbar navbar-fixed-top default">
            <div class="navbar-inner">
                <div class="container">
                    <div class="logo">
                        <a href="index.html"><img src="/assets/img/logo.png" alt=""/></a>
                    </div>
                    <div class="navigation">
                        <nav>
                            <ul class="nav pull-right">
                                <li class="current"><a href="{{ url('/') }}">Главная</a></li>
                                <li><a href="{{ url('city') }}">Города</a></li>
                                <li><a href="{{ url('university') }}">Универы</a></li>
                                <li><a href="{{ url('teacher') }}">Преподы</a></li>
                                <li><a href="{{ url('rating') }}">Рейтинг </a></li>
                                <li><a href="{{ url('about') }}">О нас </a></li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                        </li>

                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                            </ul>
                        </nav>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- end top -->
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>
    <footer>
        <div class="verybottom">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="aligncenter">
                            <div class="logo">
                                <a class="brand" href="{{ url('/') }}"><img src="/assets/img/logo.png" alt="" /></a>
                            </div>
                            <p>
                                &copy; Vesperr labs Inc - All right reserved
                            </p>
                            <div class="credits">
                                Created by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

        <!-- Javascript Library Files -->
        <script src="/assets/js/jquery.min.js"></script>
        {{--    <script src="assets/js/jquery.easing.js"></script>--}}
        <script src="/assets/js/bootstrap.js"></script>
        <script src="/assets/js/parallax/jquery.parallax-1.1.3.js"></script>
        <script src="/assets/js/nagging-menu.js"></script>
        <script src="/assets/js/jquery.nav.js"></script>
        <script src="/assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
        <script src="/assets/js/portfolio/jquery.quicksand.js"></script>
        <script src="/assets/js/portfolio/setting.js"></script>
        <script src="/assets/js/hover/jquery-hover-effect.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>
        <script src="/assets/js/animate.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="/contactform/contactform.js"></script>

        <!-- Template Custom Javascript File -->
        <script src="/assets/js/custom.js"></script>
    </footer>
</body>
</html>
