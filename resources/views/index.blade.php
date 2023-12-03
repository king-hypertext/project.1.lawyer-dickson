<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Quajo King">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#026aaa" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#026aaa" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fancybox/fancybox.css') }}">
    <link rel="stylesheet" href="{{ url('assets/alert/sweetalert2.css') }}">
    <script src="{{ url('assets/alert/sweetalert2.all.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ url('favicon.jpg') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('favicon.jpg') }}">
    <title>{{ $name }}</title>
    @yield('css')
</head>

<body class="overflow-y-hidden">
    @include('components.sidenav')
    @include('components.navbar')
    <div class="w-100 bg-white">
        @yield('content')
    </div>
    @include('components.footer')
    <script src="{{ url('assets/js/jQuery.js') }}"></script>
    {{-- <script src="{{ url('assets/js/app.bundle.js') }}"></script> --}}
    <script src="{{ url('assets/fancybox/fancybox.umd.js') }}"></script>
    <script src="{{ url('assets/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/aos/dist/aos.js') }}"></script>
    {{-- <script src="{{ url('assets/swiper/swiper-bundle.min.js') }}"></script> --}}
    <script src="{{ url('assets/toastr/toastr.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    {{-- <script src="{{ url('assets/js/off-canvas.js') }}"></script> --}}
    @yield('script')
    <script>
        preloader = document.querySelector('.preloader');
        window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.remove('overflow-y-hidden');
            if (preloader) {
                preloader.classList.add('false')
            }
        })
        new AOS.init({
            easing: "ease-in",
            offset: 10,
            anchorPlacement: 'bottom-center',
        })
    </script>
</body>

</html>
