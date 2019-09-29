<header>
    <!-- start top -->
    <div id="topnav" class="navbar default">
        <div class="navbar-inner">
            <div class="container-fluid">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo.png" alt=""/></a>
                </div>
                <div class="navigation">
                    <nav>
                        <ul class="nav pull-right">
                            <li class="{{ (request()->is('/')) ? 'current' : '' }}"><a href="{{ url('/') }}">Главная</a></li>
                            <li class="{{ (request()->is('city')) ? 'current' : '' }}"><a href="{{ url('city') }}">Города</a></li>
                            <li class="{{ (request()->is('university')) ? 'current' : '' }}"><a href="{{ url('university') }}">Универы</a></li>
                            <li class="{{ (request()->is('teacher')) ? 'current' : '' }}"><a href="{{ url('teacher') }}">Преподы</a></li>
                            <li class="{{ (request()->is('rating')) ? 'current' : '' }}"><a href="{{ url('rating') }}">Рейтинг </a></li>
                            <li class="{{ (request()->is('about')) ? 'current' : '' }}"><a href="{{ url('about') }}">О нас </a></li>
                            @guest
                                <li class="{{ (request()->is('login')) ? 'current' : '' }}"><a href="{{ route('login') }}">{{ __('Войти') }}</a></li>
                                @if (Route::has('register'))
                                    <li class="{{ (request()->is('register')) ? 'current' : '' }}"><a href="{{ route('register') }}">{{ __('Регистрация') }}</a></li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->login }}
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
