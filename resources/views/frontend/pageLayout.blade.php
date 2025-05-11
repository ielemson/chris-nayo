@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $setting->meta_description }}">
    <link rel="canonical" href="{{ route('welcome') }}">
    <meta property="og:url" content="{{ route('welcome') }}">
    <meta property="og:title" content="{{ $setting->meta_title }}">
    <meta property="og:description" content="{{ $setting->meta_description }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ohaechesi Foundation">
    <meta property="og:image" content="{{ asset("images/settings/$setting->website_logo_dark") }}">
    <meta name="bingbot" content="nocache">
    <link rel="shortcut icon" href="{{ asset("images/settings/$setting->website_favicon") }}" type="image/x-icon">
    <link rel="icon" href="{{ asset("images/settings/$setting->website_favicon") }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <link rel="icon" type="image/ico" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <!-- #title -->
    <title>{{ $setting->website_title }} | @yield('title', '')</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset("images/settings/$setting->website_favicon") }}">

    <!-- Google fonts (https://fonts.google.com/) -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> <!-- Body font -->
		<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@100..900&display=swap" rel="stylesheet"> <!-- Secondary/Alter font -->
    
        <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}">
    <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/css/fancybox.css') }}">
    <!-- Fancybox (lightbox) JS (https://fancyapps.com/) -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}">
    <!-- Swiper CSS (https://swiperjs.com/) -->

    <!-- Master CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

    <!-- Light style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-light.css') }}">
    @stack("css_styles")

</head>

<body id="body" class="tt-transition tt-noise tt-magic-cursor tt-smooth-scroll">

        @yield("content")


    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> <!-- jquery JS (https://jquery.com) -->
    <!-- Libs and Plugins JS -->
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script> <!-- GSAP JS (https://gsap.com/) -->
    <script src="{{ asset('assets/vendor/gsap/ScrollToPlugin.min.js') }}"></script> <!-- GSAP ScrollToPlugin JS (https://gsap.com/docs/v3/Plugins/ScrollToPlugin/) -->
    <script src="{{ asset('assets/vendor/gsap/ScrollTrigger.min.js') }}"></script> <!-- GSAP ScrollTrigger JS (https://gsap.com/docs/v3/Plugins/ScrollTrigger/) -->
    <script src="{{ asset('assets/vendor/lenis.min.js') }}"></script> <!-- Lenis (smooth scroll) JS (https://lenis.darkroom.engineering/) -->
    <script src="{{ asset('assets/vendor/isotope/imagesloaded.pkgd.min.js') }}"></script> <!-- imagesloaded JS (http://imagesloaded.desandro.com) -->
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
    <script src="{{ asset('assets/vendor/isotope/packery-mode.pkgd.min.js') }}"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
    <script src="{{ asset('assets/vendor/fancybox/js/fancybox.umd.js') }}"></script> <!-- Fancybox (lightbox) JS (https://fancyapps.com/) -->
    <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script> <!-- Swiper JS (https://swiperjs.com/) -->
    <!-- Master JS -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @stack("js_scripts")
</body>

</html>
