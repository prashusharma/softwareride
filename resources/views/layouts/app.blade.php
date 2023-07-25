<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Google Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <!-- Google Fonts -->
    <!-- Style -->
    <link rel='stylesheet' href="{{ asset('assets/css/bootstrap.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/owl.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/swiper.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/jquery.fancybox.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/icomoon.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/flexslider.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/font-awesome.min.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('assets/css/scss/elements/theme-css.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id="creote-color-switcher-css" href="{{ asset('assets/css/scss/elements/color-switcher/color.css') }}" type='text/css' media='all' />
    <!-- Style-->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="home theme-creote page-home-default-one">
    <div id="app">

        <main class="">
            @yield('content')
        </main>
    </div>

    <!---========================== javascript ==========================-->
    <script type='text/javascript' src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/color-scheme.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/owl.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/countdown.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/simpleParallax.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/appear.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/sharer.js') }}"></script>
    <script type='text/javascript' src="{{ asset('assets/js/validation.js') }}"></script>
    <!-- map script -->
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU') }}"></script>
    <script src="{{ asset('assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('assets/js/map-helper.js') }}"></script>
    <!-- main-js -->
    <script type='text/javascript' src="{{ asset('assets/js/creote-extension.js') }}"></script>
</body>

</html>