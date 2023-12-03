@extends('index')
@section('content')
    @include('components.slider')

    <div class="container-fluid">
        @include('components.preloader')
        <div class="container mb-4 shadow">
            <div class="row">
                <div class="col-md-8 col-sm-8 order-2 order-md-1 pt-0 pt-md-5">
                    <div style="background-color: inherit !important"
                        class="card my-2 my-0 my-md-4 justify-content-center border-0">
                        <h5 class="card-title text-center text-info fw-bold text-uppercase h2 pt-0 pt-md-2">
                            Biography
                        </h5>
                        <div class="card-body">
                            <p>
                                Dr. Dickson Osei-Asibey, Esq., a passionate and accomplished individual,
                                is a renowned entrepreneur, Development Consultant, Lawyer, and Senior
                                Lecturer at Kwame Nkrumah University of Science and Technology. <span
                                    class="text-info link d-none d-md-block d-lg-none"
                                    onclick="window.location.href='{{ route('portfolio') }}#biography'">Read more...</span>
                            </p>
                            <p class="d-md-none d-lg-block d-block"> With a profound commitment to community
                                development and exemplary
                                leadership, he has initiated projects like OCADS Educational Centre and
                                Royal Foam, providing employment opportunities for constituents.
                            </p>
                            <p class="d-md-none d-lg-block d-block"> As President of the Ghana Institute of
                                Construction and a Council Board
                                Member of Dr. Hilla Limann Technical University, he embodies dedication
                                to education and growth. Driven by his Christian faith, he aspires to
                                utilize his extensive academic background and professional expertise to
                                lead his constituency towards progress and inclusive growth in his
                                political campaign.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 order-1 order-md-2">
                    <div class="card my-2 border-0">
                        <img title="Dr. Lawyer Dickson Osei Asibey" data-fancybox
                            data-caption="Dr. Lawyer Dickson Osei Asibey"
                            src="{{ url('assets/images/dr.dickson-001.jpg') }}" alt="" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <h5 class="card-title text-end fw-bold text-uppercase h4 p-3 text-white bg-info">
                our volunteers
            </h5>
        </div>
        <div class="container mb-2 shadow">
            <div class="vol slider-container py-3 overflow-x-hidden">
                <div class="slick-item py-2 mx-0 mx-md-3">
                    <div data-card-vol class="card py-5 bg-primary-dark text-white text-center rounded-0">
                        <div class="row position-relative">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ url('assets/images/logo.jpeg') }}" width="80" height="80"
                                    class="d-inline img-fluid rounded-circle" alt="...">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="card-body align-items-center">
                                    <h5 class="card-title no-break">Patroitic Volunteers</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item py-2 mx-0 mx-md-3">
                    <div data-card-vol class="card py-5 bg-primary-dark text-white text-center rounded-0">
                        <div class="row position-relative">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ url('assets/images/logo.jpeg') }}" width="80" height="80"
                                    class="d-inline img-fluid rounded-circle" alt="...">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="card-body align-items-center">
                                    <h5 class="card-title">v - 16</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item py-2 mx-0 mx-md-3">
                    <div data-card-vol class="card py-5 bg-primary-dark text-white text-center rounded-0">
                        <div class="row position-relative">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ url('assets/images/logo.jpeg') }}" width="80" height="80"
                                    class="d-inline img-fluid rounded-circle" alt="logo">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="card-body align-items-center">
                                    <h5 class="card-title">Maidens</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-item py-2 mx-0 mx-md-3">
                    <div data-card-vol class="card py-5 bg-primary-dark text-white text-center rounded-0">
                        <div class="row position-relative">
                            <div class="col-sm-4 col-md-4">
                                <img src="{{ url('assets/images/logo.jpeg') }}" width="80" height="80"
                                    class="d-inline img-fluid rounded-circle" alt="...">
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="card-body align-items-center">
                                    <h5 class="card-title no-break">Youthful Delegates</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4 shadow">
            <div class="container p-0 my-0">
                <video width="100%" height="auto" muted loop src="{{ url('assets/images/slider/unity video.mp4') }}"
                    type="video/mp4">
                </video>
            </div>
        </div>
        @include('components.gallery')
        @include('components.news-event')
        <div class="container my-3 shadow p-0">
            <video width="100%" height="auto" muted loop>
                <source src="{{ url('assets/images/slider/education video.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="container px-0">
            <h5 class="h4 text-end text-white shadow text-info fw-bold text-uppercase bg-info p-3 mt-3"
                style="font-size: 135% !important">
                get in touch
            </h5>
        </div>
        <div class="container">
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
            <form role="form" action="/message" method="POST">
                @csrf
                <div class="row p-md-3 shadow">
                    <h6 class="h6 text-center mb-2 text-info fw-semi-bold">
                        To Get in touch with the Movement, Please Fill Out The Form
                    </h6>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input required type="text" name="fullname" class="form-control rounded-0 input-field"
                                id="Fullname" placeholder="Fullname" value="{{ @old('fullname') }}" />
                            <label for="Fullname">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required type="text" name="phone_number" class="form-control rounded-0 input-field"
                                id="phoneNumber" placeholder="Phone Number" value="{{ @old('phone_number') }}" />
                            <label for="phoneNumber">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required type="email" name="email" class="form-control rounded-0 input-field"
                                id="email" placeholder="Email" value="{{ @old('email') }}" />
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea required class="form-control rounded-0 input-field" name="message"
                                placeholder="Write your messages or comments here" id="message" style="height: 130px"></textarea>
                            <label for="message">message</label>
                        </div>

                        <div class="form-group my-4">
                            <button type="submit" class="btn btn-outline-info btn-lg w-100 rounded-0">Send
                                Message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('components.scroll-top')
    </div>
@section('script')
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
@endsection
@endsection
