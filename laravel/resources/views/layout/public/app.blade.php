<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CV. Renggani Karya Semesta</title>
    <meta name="description"
        content="Kami adalah Renggani Karya Semesta, penyedia solusi teknologi dan IT yang inovatif. Temukan lebih banyak tentang layanan kami di sini.">
    <meta name="keywords" content="Renggani Karya Semesta, Teknologi, IT, Solusi, Inovasi">
    <meta name="author" content="Renggani Karya Semesta">

    <!-- Meta untuk Facebook (FB) -->
    <meta property="og:title" content="Renggani Karya Semesta">
    <meta property="og:description"
        content="Kami adalah Renggani Karya Semesta, penyedia solusi teknologi dan IT yang inovatif. Temukan lebih banyak tentang layanan kami di sini.">
    <meta property="og:image" content="{{ asset('template') }}/assets/img/logo/logo-black.svg">
    <meta property="og:url" content="https://rengganikaryasemesta.com/">
    <meta property="og:type" content="website">

    <!-- Meta untuk WhatsApp (WA) -->
    <meta property="wa:title" content="Renggani Karya Semesta">
    <meta property="wa:description"
        content="Kami adalah Renggani Karya Semesta, penyedia solusi teknologi dan IT yang inovatif. Temukan lebih banyak tentang layanan kami di sini.">
    <meta property="wa:image" content="{{ asset('template') }}/assets/img/logo/logo-black.svg">

    <!-- Meta untuk Open Graph (OG) -->
    <meta property="og:title" content="Renggani Karya Semesta">
    <meta property="og:description"
        content="Kami adalah Renggani Karya Semesta, penyedia solusi teknologi dan IT yang inovatif. Temukan lebih banyak tentang layanan kami di sini.">
    <meta property="og:image" content="{{ asset('template') }}/assets/img/logo/logo-black.svg">
    <meta property="og:url" content="https://rengganikaryasemesta.com/">
    <meta property="og:type" content="website">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template') }}/assets/img/logo/logo-black.svg">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/custom-animation.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/style.css">
    @yield('styles')
</head>

<body>
    @include('layout.public.header')
    <main>
        @yield('content')
    </main>
    @include('layout.public.footer')
    @yield('script')
</body>

</html>
