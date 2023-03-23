<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Joy Myanmar Co., Ltd" />
    <meta name="keywords" content="Joy Myanmar Co., Ltd, Japan, Japanese Language School, Training" />
    <meta name="author" content="Joy Myanmar Co., Ltd" />
    <meta property="og:title" content="Joy Myanmar Co., Ltd" />
    <meta property="og:image" content="{{ asset('data/logo.jpg') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Joy Myanmar Co., Ltd" />
    <link href="{{ asset('data/logo.jpg') }}" rel="shortcut icon" type="image/png">

    <title>Joy Myanmar Co., Ltd - @yield('title')</title>

    <!-- Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"> -->
    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />
    <!-- CSS | Theme Color -->
    <link href="{{ asset('assets/css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
</head>


<body class="boxed-layout pt-40 pb-40 pt-sm-0" data-bg-img="{{ asset('assets/images/pattern/p38.png') }}">
    <div id="wrapper" class="clearfix">
        <div id="preloader">
            <div id="spinner">
                <img class="floating" src="{{ asset('assets/images/preloaders/13.png') }}" alt="">
                <h5 class="line-height-50 font-18 ml-15">Loading...</h5>
            </div>
        </div>
        @include('layouts.menu')
        <div class="main-content">
            @if (URL::current() == route('home') || URL::current() == route('welcome'))
                @include('layouts.slider')
            @endif
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>


    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>
