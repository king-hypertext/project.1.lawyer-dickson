<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Quajo King">
    <title>{{ $title ?? 'ADMIN' }}</title>
    <link rel="stylesheet" href="{{ url('assets/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/alert/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/news.css') }}">
    <link rel="shortcut icon" href="{{ url('favicon.jpg') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('favicon.jpg') }}">
    <script src="{{ url('assets/admin/alert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/cdn.ckeditor.js') }}"></script>
</head>

<body class="bg-white">
    <div class="container-scroller">
        {{-- navbar --}}
        <nav class="shadow bg-white sidebar sidebar-offcanvas" id="sidebar">
            <div
                class="sidebar-brand-wrapper shadow d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="">
                    <img src="{{ url('assets/admin/images/logo.svg') }}" alt="logo" />
                </a>
                <a class="sidebar-brand brand-logo-mini" href="">
                    <img src="{{ url('assets/admin/images/logo-mini.svg') }}" alt="logo" />
                </a>
            </div>
            <style>
                .sidebar .nav {
                    margin-bottom: 0px !important;
                    margin-top: 25px !important;
                }

                .swal2-icon {
                    margin-bottom: 0 !important;
                }
            </style>
            <ul class="nav position-absolute">
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('volunteers') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-multiple"></i>
                        </span>
                        <span class="menu-title">Volunteers</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('events') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings text-primary"></i>
                        </span>
                        <span class="menu-title">Events Booking</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('messages') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-message-text"></i>
                        </span>
                        <span class="menu-title">Messages</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('admin.news') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-google-circles-extended"></i>
                        </span>
                        <span class="menu-title">Views News</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('site.settings') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings text-primary"></i>
                        </span>
                        <span class="menu-title">Site Info</span>
                    </a>
                </li>
            </ul>
        </nav>
        {{-- body --}}
        <div class="container-fluid page-body-wrapper">
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href=""><img
                            src="{{ url('assets/admin/images/logo-mini.svg') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-50">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET">
                                <input type="text" name="customer" class="form-control text-white"
                                    placeholder="Search list">
                                <button type="submit" class="btn btn-outline-light">Search</button>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item nav-settings d-none d-lg-block" id="fullscreen-button"
                            title="Toggle Fullscreen">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        {{-- <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list d-none"
                                aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ url('assets/admin/images/faces/face4.jpg') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ url('assets/admin/images/faces/face2.jpg') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ url('assets/admin/images/faces/face3.jpg') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p>
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown"
                                href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list d-none"
                                aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Event today</p>
                                        <p class="text-muted ellipsis mb-0">
                                            Just a reminder that you have an event today
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div> --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    @if (!empty(Auth::user()->image))
                                        <img src="{{ url('assets/admin/images/admin/' . Auth::user()->image) }}"
                                            class="img-xs rounded-circle" alt="user image" />
                                    @else
                                        <img src="{{ url('assets/admin/images/faces/face15.jpg') }}"
                                            class="img-xs rounded-circle" alt="user image" />
                                    @endif
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                                        {{ Auth::user()->name ?? 'user' }}</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('settings') }}" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" class="dropdown-item preview-item btn">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-logout text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">Log out</p>
                                        </div>
                                    </button>
                                </form>
                                {{-- <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p> --}}
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper bg-white text-dark">
                    @yield('style')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ url('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    {{-- <script src="{{ url('assets/js/app.bundle.js') }}"></script> --}}
    <script src="{{ url('assets/admin/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('assets/admin/js/misc.js') }}"></script>
    {{-- <script src="{{ url('assets/admin/js/dashboard.js') }}"></script> --}}
    {{-- <script src="{{ url('assets/admin/vendors/js/modal.js') }}"></script> --}}

    @yield('script')
</body>

</html>
