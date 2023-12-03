<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Quajo King">

    <link rel="stylesheet" href="{{ url('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/swiper/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fancybox/fancybox.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/aos/dist/aos.css') }}">
    <link rel="shortcut icon" href="{{ url('assets/images/dr.osei-logo.jpg') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('assets/images/dr.osei-logo.jpg') }}">
    <title>{{ $title }}</title>
    @yield('css')
</head>
<style type="text/css">
    .preloader {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serifc;
        width: 100%;
        height: 100%;
        z-index: 9999999;
        left: 0;
        top: 0;
        position: fixed !important;
        background: #0072bb;
        display: flex;
        flex-direction: column;
        place-content: center !important;
        place-items: center !important;
        place-self: center !important;
        text-align: center;
    }

    .d-block {
        display: block !important;
    }

    .preloader.false {
        display: none !important;
    }

    .preloader .preloader-text {
        z-index: auto;
        position: absolute;
        top: 12px;
        right: 8px;
        font-weight: bold;
    }

    .preloader>span {
        color: #fff !important;

    }

    .preloader-body {
        background-color: #fff;
        color: #0072bb;
        display: inline-block;
        width: 3rem;
        height: 3rem;
        vertical-align: -0.125em;
        border-radius: 50%;
        -webkit-animation: 1s linear infinite preloader;
        animation: 1s linear infinite preloader;

    }

    @keyframes preloader {
        0% {
            transform: scale(0);
        }

        50% {
            opacity: 1;
            transform: none;
        }
    }

    @-webkit-keyframes preloader {
        0% {
            transform: scale(0);
        }

        50% {
            opacity: 1;
            transform: none;
        }
    }
</style>

<body class="bg-light overflow-y-hidden">
    @include('components.sidenav')
    {{-- <div class="w-100">
        @yield('banner')
    </div> --}}
    @include('components.navbar')
    @yield('slider')
    <div class="container-xxl bg-light">
        @yield('content')
    </div>
    @include('components.footer')
    <script src="{{ url('assets/js/jQuery.js') }}"></script>
    <script src="{{ url('assets/js/app.bundle.js') }}"></script>
    <script src="{{ url('assets/fancybox/fancybox.umd.js') }}"></script>
    <script src="{{ url('assets/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/toastr/toastr.min.js') }}"></script>
    <script src="{{ url('assets/js/misc.js') }}"></script>
    <script src="{{ url('assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/aos/dist/aos.js') }}"></script>
    @yield('script')
    <script>
        preloader = document.querySelector('.preloader');
        window.addEventListener('load', () => {
            document.body.classList.remove('overflow-y-hidden');
            if (preloader) {
                preloader.classList.add('false')
            }
        })
       new AOS.init({
            easing: "ease-in",
            offset: 140,
            anchorPlacement: 'bottom-center',
        })
    </script>
</body>

</html>
