@section('css')
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
@endsection
<div class="preloader">
    <div class="preloader-body preloader-element" style="width: 3rem; height: 3rem; zIndex: 999999" role="status">
        <span class='preloader-text'></span>
    </div>
    <span class="d-block fa-fade">Loading...</span>
</div>
