<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">

<head>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="xencar.mx">
    <meta name="twitter:title" content="@yield('title') ">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:creator" content="Xencar ">
    <meta name="twitter:image" content="{{ url('assets/images/facebook/facebook.jpg') }}">

    <meta property="og:site_name" content="Xencar " />
    <meta property="og:url" content="xencar.mx" />
    <meta property="og:title" content="@yield('title') " />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ url('assets/images/facebook/facebook.jpg') }}" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="538" />

    <!-- METAS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="@yield('description')" />
    <meta name="content" content="" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="autor" content="IsraBuilder" />
  <!--  <meta name="google-site-verification" content="U7mgXPyzlpQ_nfrLaJBkTAr9of6xBk1xeBhmVLgPh4c" /> -->

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/body/reset.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/body/root.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/body/main.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/navigation/navigation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/body/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/slick/slick_manu.css') }}" />

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('assets/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('assets/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('assets/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('assets/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('assets/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="144x144"  href="{{ url('assets/images/favicon/android-icon-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('assets/images/favicon/manifest.json') }}">
    <meta name="msapplication-config" content="{{ url('assets/images/favicon/browserconfig.xml') }}" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('assets/images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <Link rel="shortcut icon" href="{{ url('assets/images/favicon/favicon.ico') }}" />
    <!-- MANIFEST -->
    <link rel="manifest" href="{{ url('assets/css/manifest.json') }}">

     @livewireStyles

       <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
  
</head>

<body   @if (!Request::is('/')) class="c-light tc-grey " @endif>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @livewireScripts
</body>
</html>