<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') ?? 'JobLister' }}</title>

    <!-- Scripts -->

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo/joblister.png') }}" />


    <!-- Favicons -->
    <link href="{{ asset('template2') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('template2') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('template1') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('template1') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template1') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('template1') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('template1') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('template1') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('template1') }}/css/style.css" rel="stylesheet">
    @stack('css')

</head>

<body>
    <div id="app">
        @yield('layout-holder')
    </div>
    @include('sweetalert::alert')
    @stack('js')
    <script src="{{ asset('template1') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('template1') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template1') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('template1') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('template1') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('template1') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('template1') }}/js/main.js"></script>
</body>

</html>
