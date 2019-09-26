<header>
    <!-- start top -->
    <div id="topnav" class="navbar default">
        <div class="navbar-inner">
            <div class="container">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo.png" alt=""/></a>
                </div>
                <div class="navigation">
                    <nav>
                        <ul class="nav pull-right">
                            <li class="current"><a href="{{ url('/') }}">Главная</a></li>
                            <li><a href="{{ route('city') }}">Города</a></li>
                            <li><a href="{{ route('university') }}">Универы</a></li>
                            <li><a href="{{ route('teacher') }}">Преподы</a></li>
                            <li><a href="{{ route('rating') }}">Рейтинг </a></li>
                            <li><a href="{{ route('about') }}">О нас </a></li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
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
