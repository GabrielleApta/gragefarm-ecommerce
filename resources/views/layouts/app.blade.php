<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/color-01.css') }}">

    @livewireStyles
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend.navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.inc.frontend.footer')
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('user/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('user/assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('user/assets/js/functions.js') }}"></script>
    @livewireScripts
</body>
</html>




