<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vesperr one page site template with bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
  <link href="assets/css/animate.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Roboto+Condensed:400,300,700" rel="stylesheet" />

  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/color/default.css" rel="stylesheet" />

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.ico" />



</head>

<body>
  <header>
    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
      <div class="navbar-inner">
        <div class="container">
          <div class="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="" /></a>
          </div>
          <div class="navigation">
            <nav>
              <ul class="nav pull-right">
                <li class="current"><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('city') }}">Города</a></li>
                <li><a href="{{ url('university') }}">Универы</a></li>
                <li><a href="{{ url('teacher') }}">Преподы</a></li>
                  <li><a href="{{ url('rating') }}">Рейтинг </a></li>
                  <li> <a href="{{ url('about') }}">О нас </a></li>
                @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                  </li>
                  @if (Route::has('register'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                    </li>

                  @endif
                @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
  <!-- section intro -->
  <section id="intro">
    <div class="slogan">
      <div class="icon">
        <i class="icon-beaker icon-10x"></i>
      </div>
      <h1> Приветствуем Вас на <span>Obzzivalka</span> creative studio</h1>
      <h2>Хотите узнать что-то о преподе или прокоментировать его работу? Тогда вы попали куда нужно</h2>
    </div>
  </section>
  <!-- end intro -->
  <!-- Section about -->
  <section id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="heading">
            <h3><span>About us</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              У нас вы найдете информацию о любом преподе в любом универе.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end section about -->
  <!-- section services -->
  <section id="services" class="section parallax dark">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="heading">
            <h3><span>Университеты</span></h3>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="span3">


          </div>
        </div>
      </div>
  </section>
  <!-- end section services -->
  <!-- section works -->
  <section id="works" class="section gray-bg">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="heading">
            <h3><span>Преподаватели</span></h3>
          </div>
          </div>
        </div>
      </div>

  </section>
  <!-- section works -->
  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="heading">
            <h3><span>Обратная связь</span></h3>
          </div>
          <div class="sub-heading">
            <p>

            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="span6">
          <h4><i class="icon-envelope"></i><strong>Contact form</strong></h4>
          <p>

          </p>
          <!-- start contact form -->
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <ul class="contact-list">
              <li class="form-group">
                <label>Name <span>*</span></label>
                <input type="text" name="name" class="form_input" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
                <li class="form-group">
                  <label>Email <span>*</span></label>
                  <input type="email" class="form_input" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </li>
                <li class="form-group">
                  <label>Subject <span>*</span></label>
                  <input type="text" class="form_input" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </li>

                <li class="form-group">
                  <label>Your message <span>*</span></label>
                  <textarea class="form_textarea" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </li>
                <li class="last">
                  <button class="btn btn-large btn-theme" type="submit" id="send">Send a message</button>
                </li>
            </ul>
          </form>

          <!-- end contact form -->
        </div>
      </div>
    </div>
  <!-- end section contact -->

  </section>

  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div class="logo">
                <a class="brand" href="index.html"><img src="assets/img/logo.png" alt="" /></a>
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
  </footer>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <!-- Javascript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/parallax/jquery.parallax-1.1.3.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
