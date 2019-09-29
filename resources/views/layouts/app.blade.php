<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
<div id="app">
   @include('layouts.header')

    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</div>

</body>
</html>
