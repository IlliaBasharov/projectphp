
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Obzivalka') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Roboto+Condensed:400,300,700" rel="stylesheet"/>

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet"/>
    <link href="/assets/css/animate.css" rel="stylesheet"/>

    <link href="/assets/css/style.css" rel="stylesheet"/>
    <link href="/assets/color/default.css" rel="stylesheet"/>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"/>
    <link rel="shortcut icon" href="ico/favicon.ico"/>
</head>
