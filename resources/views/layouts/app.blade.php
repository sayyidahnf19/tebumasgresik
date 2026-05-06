<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title', 'Tebu Mas')</title>
    <meta name="description" content="@yield('description', 'Songkok berkualitas dari Gresik')">

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('css/theme.css') }}?v=1" rel="stylesheet" />
    <link href="{{ asset('css/slider.css') }}?v=1" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}?v=1" rel="stylesheet" />

    <style>
        .navbar.fixed-top {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 9999 !important;
        }
        
        main.main {
            padding-top: clamp(60px, 8vw, 100px) !important;
        }
        
        /* Mobile adjustments */
        @media (max-width: 767px) {
            main.main {
                padding-top: clamp(50px, 7vw, 80px) !important;
            }
        }
        
        @media (max-width: 576px) {
            main.main {
                padding-top: clamp(45px, 6vw, 70px) !important;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- ===============================================-->
    <!--    Navbar-->
    <!-- ===============================================-->
    @include('partials.navbar')

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @yield('content')
    </main>

    <!-- ===============================================-->
    <!--    Footer-->
    <!-- ===============================================-->
    @include('partials.footer')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://kit.fontawesome.com/9dcb039351.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap-navbar.js') }}?v=1"></script>
    <script src="{{ asset('js/theme.js') }}?v=1"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Volkhov:wght@700&display=swap" rel="stylesheet">

    @stack('scripts')
</body>

</html>
