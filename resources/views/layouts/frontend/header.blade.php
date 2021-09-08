<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>DAB Development Research &amp; Training &#8211; Expertise | Partnership | Results</title>
    <meta name="description" content="DAB Development Research Training  Expertise | Partnership | Results">
    <meta name="subject" content="DAB Development Research Training  Expertise | Partnership | Results">
    <meta name="author" content="Codings">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/apple-touch-icon-114x114.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/app.js') }}" defer></script>

    <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/vendor/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/slider.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/icons-fa.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/gallery.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/cookie-notice.min.css')}}">

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css')}}">

    <!-- ==============================================
        Theme Color
        =============================================== -->
    <meta name="theme-color" content="#21333e">

    <!-- ==============================================
        Theme Settings
        =============================================== -->
    <style>
        :root {
            --hero-bg-color: #080d10;

            --section-1-bg-color: #ffffff;
            --section-2-bg-color: #111117;
            --section-3-bg-color: #111117;
            --section-4-bg-color: #ffffff;
            --section-5-bg-color: #eef4ed;
            --section-6-bg-color: #111117;
            --section-7-bg-color: #ffffff;

            --footer-bg-color: #080d10;
            --footer-bg-image: url('{{ asset('frontend/images/bg-7.jpg') }}');

        }
    </style>

</head>


<body class="home">

    <!-- Preloader -->
    <div id="preloader" data-timeout="1000" class="odd preloader counter">
        <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
            <div data-percent="100" class="radial">
                <span></span>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id="header">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand top">
            <div class="container header">

                <!-- Navbar Items [left] -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat - 9:00
                            - 18:00</a> --}}
                    </li>
                </ul>

                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar Items [right] -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+1 (305) 1234-5678</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i><span class="__cf_email__"
                                data-cfemail="4d252821203d2128632e2220">[email&#160;protected]</span></a>
                    </li>
                </ul>

                <!-- Navbar Icons -->
                <ul class="navbar-nav icons">
                    <li class="nav-item social">
                        <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub">
            <div class="container header">

                <!-- Navbar Brand-->
                <a class="navbar-brand" href="index.html">
                    <span class="brand">
                        {{-- <span class="featured">
                            <span class="first">NEX</span>
                        </span>
                        <span class="last">GEN</span> --}}

                        <img src="{{ asset('images/basic/logo-1024x764.png')}}" alt="DAB DRT Logo">

                </a>

                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar Items -->
                <ul class="navbar-nav items">
                    @foreach ($menus as $menu)
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">{{$menu->title}} </a>
                    </li>
                    @endforeach
                </ul>


                <!-- Navbar Toggle -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Action -->

            </div>
        </nav>

    </header>
