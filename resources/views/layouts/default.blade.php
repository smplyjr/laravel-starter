<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Designed to Heal')</title>

    <!--  Essential META Tags -->
    <meta property="og:title" content="@yield('title', 'Designed to Heal')">
    <meta property="og:description" content="@yield('description', 'Introducing the power of fingertip (needle-free) acupuncture to the Philippines following the high standard of EFT Universe.')">
    <meta property="og:image" content="">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">

    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="@yield('title', 'Designed to Heal')">
    <meta name="twitter:image:alt" content="The power of fingertip (needle-free) acupuncture.">

    <!-- Basic META Tags -->
    <meta name="keyword" content="Designed to Heal, EFT, Emotional Freedom Technique, Acupuncture, Needle Free">
    <meta name="description" content="Introducing the power of fingertip (needle-free) acupuncture to the Philippines following the high standard of EFT Universe.">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <!-- <main class="main-wrapper">
        <div class="container">

        </div>
        
        @yield('content')
    </main> -->

    <main class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            <a class="{{ Request::is(' /')            ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="{{ Request::is(' services')     ? 'active' : '' }}" href="{{ url('/services') }}">Services</a>
            <a class="{{ Request::is(' about')        ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
            <a class="{{ Request::is(' testimonials') ? 'active' : '' }}" href="{{ url('/testimonials') }}">Testimonials</a>
            <a class="{{ Request::is(' contact')      ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>

            @auth
            <a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <!-- @if (strpos(Request::url(), 'herokuapp') !== true)
                        <a href="{{ url('login') }}">Login</a>

                        @if (!Route::has('register'))
                            <a href="{{ url('register') }}">Register</a>
                        @endif
                    @endif -->
            @endauth
        </div>
        @endif

        @yield('content')
    </main>

    <script async src="{{ mix('js/manifest.js') }}"></script>
    <script async src="{{ mix('js/vendor.js') }}"></script>
    <script async src="{{ mix('js/app.js') }}"></script>

</body>

</html> 