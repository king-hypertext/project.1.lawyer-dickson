<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ url('assets/alert/sweetalert2.css') }}">
    <script src="{{ url('assets/alert/sweetalert2.all.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ url('assets/images/dr.osei-logo.jpg') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('assets/images/dr.osei-logo.jpg') }}">
    <title>{{ $title }}</title>
    @yield('css')
</head>

<body class="bg-white">
    <main class="main-content mt-0 ps ff-ubuntu">
        <section class="min-vh-100 mb-3">
            <div class="page-header align-items-start"
                style="min-height: 70vh !important; background-image: url('{{ url('assets/images/image-008.jpg') }}');">
                <span class="mask bg-gradient-dark opacity-6"></span>
            </div>
            <div class="container container-fluid animate__animated animate__repeat-1 animate__zoomIn  mt-n10">
                <div class="row  mt-n10">
                    <div class="d-flex justify-content-center align-items-center mx-auto">
                        <div class="card form-card border-0 shadow">
                            <div class="row mt-3 p-1 p-md-3 mx-2">
                                <div class="text-start">
                                    <span class="badge bg-info p-3" style="font-size: 135% !important">Join /
                                        Contribute</span>
                                </div>
                                <div class="text-lead py-2 text-justify" data-aos="fade-out">
                                    Come, be part of this transformative journey, and together, let's forge a radiant
                                    future for our community. Your
                                    passion, unwavering dedication, and distinct talents will breathe life into our
                                    shared vision of positive change
                                    and progress. Hand in hand, we'll uplift lives, unify as a team, and blaze the trail
                                    towards a stronger, more
                                    prosperous Atwima Nwabiagya North
                                </div>
                                @if ($errors->any())
                                    <div style="z-index: 1"
                                        class="animate__animated animate__zoomIn alert alert-danger p-1 rounded-0 text-center">
                                        <ul class="list-unstyled">
                                            @foreach ($errors->all() as $error)
                                                <li class="text-danger">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="/join" method="POST" role="form">
                                    @csrf
                                    <div class="row pt-5 mb-5">
                                        <h6 class="h6 text-center mb-2 text-info fw-semi-bold">
                                            Please Fill Out This Form
                                        </h6>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3" data-aos="zoom-in">
                                                <input required type="email" name="email"
                                                    class="form-control rounded-0 input-field" id="email"
                                                    placeholder="email@example.com" value="{{ @old('email') }}">
                                                <label for="email">Email address</label>
                                                @error('email')
                                                    <span class="form-text text-danger mt-0 pt-0 has-error">
                                                        Input valid email address
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3" data-aos="zoom-in">
                                                <input required type="text" name="fullname"
                                                    class="form-control rounded-0 input-field" id="fullname"
                                                    placeholder="Fullname" value="{{ @old('fullname') }}">
                                                <label for="fullname">Fullname</label>
                                                @error('fullname')
                                                    <span class="form-text text-danger mt-0 pt-0 has-error">
                                                        required
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3" data-aos="zoom-in">
                                                <input required type="number" name="phone_number"
                                                    class="form-control rounded-0 input-field" id="phoneNumber"
                                                    placeholder="Phone Number" value="{{ @old('phone_number') }}">
                                                <label for="phoneNumber">Phone Number</label>
                                                @error('phone_number')
                                                    <span class="form-text text-danger mt-0 pt-0 has-error">
                                                        reqiured
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3" data-aos="zoom-in">
                                                <input required type="text" name="location"
                                                    class="form-control rounded-0 input-field" id="location"
                                                    placeholder="Location" value="{{ @old('location') }}">
                                                <label for="location">Location</label>
                                                @error('location')
                                                    <span class="form-text text-danger mt-0 pt-0 has-error">
                                                        required
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3" data-aos="zoom-in">
                                                <input required type="text" name="interest"
                                                    class="form-control rounded-0 input-field" id="interest"
                                                    placeholder="Interest" value="{{ @old('interest') }}">
                                                <label for="interest">Interest</label>
                                                @error('interest')
                                                    <span class="form-text text-danger mt-0 pt-0 has-error">
                                                        required
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating" data-aos="zoom-in">
                                                <textarea class="form-control rounded-0 input-field" name="comments" placeholder="Write a message or a comment here"
                                                    id="comments" style="height: 130px" value="{{ @old('comments') }}"></textarea>
                                                <label for="comments">Comments/Message</label>
                                            </div>
                                            <div class="form-group my-4" data-aos="zoom-in">
                                                <button type="submit"
                                                    class="btn btn-outline-info btn-lg w-100 rounded-0">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @if (session('response'))
                                <script>
                                    const showSuccessAlert = Swal.mixin({
                                        position: 'top-end',
                                        toast: true,
                                        timer: 5500,
                                        showConfirmButton: false,
                                        timerProgressBar: false,
                                    });
                                    showSuccessAlert.fire({
                                        icon: 'success',
                                        text: '{{ session('response') }}',
                                        padding: '10px',
                                        width: 'auto'
                                    });
                                </script>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ url('assets/js/jQuery.js') }}"></script>
    <script src="{{ url('assets/js/app.bundle.js') }}"></script>
    <script src="{{ url('assets/aos/dist/aos.js') }}"></script>
    <script src="{{ url('assets/toastr/toastr.min.js') }}"></script>


    {{-- <script src="{{ url('assets/fancybox/fancybox.umd.js') }}"></script>
    <script src="{{ url('assets/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/js/misc.js') }}"></script> --}}
    <script type="text/javascript">
        AOS.init({
            easing: "ease-in"
        })
        // $('#join').on('submit', function(e) {
        //     var fullname = $('#fullname').val(),
        //         location = $('#location').val(),
        //         phoneNumber = $('#phoneNumber').val(),
        //         email = $('#email').val(),
        //         interest = $('#interest').val(),
        //         comments = $('#comments').val();
        //     e.preventDefault()
        //     console.log(`${fullname} ${location} ${phoneNumber} ${email} ${interest} ${comments}`)
        // })
    </script>



</body>

</html>
