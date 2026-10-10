<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    <meta name="google-site-verification" content="YeQQIQXP-zhuAyItBbfXWTWujH19OzL2emU8bHOQIKk"/>
    <meta name="description" content="@yield('meta_description')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BKRGMNQ5Y5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BKRGMNQ5Y5');
</script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ static_asset('front-assets/assets/images/logo.webp') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/owl.carousel.min.css') }}">
    <!-- Fonts and Icons -->
    <link rel="stylesheet" type="text/css"
        href="{{ static_asset('front-assets/assets/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ static_asset('front-assets/assets/rev/fonts/font-awesome/css/font-awesome.css') }}">
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{ static_asset('front-assets/assets/rev/css/rs6.css') }}">
    <!-- Simplebar -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/simplebar.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/animations.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/magnific-popup.min.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/fonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/fonts/themify-icons/themify-icons.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ static_asset('front-assets/assets/css/responsive.css') }}">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P696TBMQ');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P696TBMQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Loading -->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="{{ static_asset('front-assets/assets/images/logo.webp') }}" alt="loading">
        </div>
    </div>



    @include('frontend.include.header')


    @yield('content')


    @include('frontend.include.footer')

    <!--- Java Script Start ----->
        <!-- Scripts -->
    <script src="{{ static_asset('front-assets/assets/js/jquery.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/progressbar.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/jquery.countTo.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/wow.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/rev/js/rbtools.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/rev/js/rs6.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/rev-custom.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/simplebar.min.js')}}"></script>
    <script src="{{ static_asset('front-assets/assets/js/custom.js')}}"></script>
    
    @stack('script')
</body>

</html>
