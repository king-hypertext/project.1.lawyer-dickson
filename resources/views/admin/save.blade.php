@extends('admin.auth-layout.layout')
@section('content')
    <div class="wrapper row">
        <div class="col-md-6">
            <div class="card bg-transparent border-0 p-0" style="margin-block: 15%">
                <h4 class="h6 my-4 text-center">sign up as Admin</h4>
                @if ($errors->any())
                    <div style="z-index: 1"
                        class="animate__animated animate__zoomIn alert alert-danger p-1 rounded-0 d-flex justify-content-center">
                        <ul class="list-unstyled text-start">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('failed'))
                    <h6 class="animate__animated animate__zoomIn h6 alert alert-danger text-danger text-center">
                        {{ session('failed') }}
                    </h6>
                @endif
                <form role="form" action="/admin/auth/signup" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required type="text" name="name" class="form-control rounded-0 input-field" id="email"
                            placeholder="Fullname" value="{{ @old('name') }}">
                        <label for="email">Fullname</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="email" name="email" class="form-control rounded-0 input-field" id="email"
                            placeholder="Email" value="{{ @old('email') }}">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="password" name="password" class="form-control rounded-0 input-field" id="password"
                            placeholder="Password">
                        <label for="email">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="number" name="code" class="form-control rounded-0 input-field" id="email"
                            placeholder="Secret Code">
                        <label for="email">Secret Code</label>
                    </div>
                    <div class="form-group my-4">
                        <button type="submit" class="btn btn-outline-primary btn-lg w-100 rounded-0">Save</button>
                    </div>
                    <div class="form-text my-3 text-end">
                        <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">
                            I'm an Admin
                        </a>
                    </div>
                </form>
            </div>
            <div class="copyright text-center">
                Copyright &copy; <span class="year"></span>. All Rights Reserved.
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block p-0">
            <div class="card bg-light p-0">
                <img src="{{ url('assets/images/dr.bg-001.jpg') }}" alt="image" class="p-0 border-0 img-thumbnail">
            </div>
        </div>

    </div>
    <script>
        document.querySelector('.year').innerText = new Date().getFullYear();
    </script>
@endsection
