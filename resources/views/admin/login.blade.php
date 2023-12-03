@extends('admin.auth-layout.layout')
@section('content')
    <div class="wrapper row">
        <div class="col-md-6">
            <div class="card bg-transparent border-0 p-0" style="margin-block: 25%">
                <h4 class="h6 my-4 text-center">login to your account</h4>
                @if (session('failed'))
                    <h6 class="h6 alert alert-danger text-danger text-center">
                        {{ session('failed') }}
                    </h6>
                @endif
                @if (session('changed'))
                    <h6 class="h6 fw-sm alert alert-warning text-warning text-center fa-fade">
                        Your Password was reset, login with your new password
                    </h6>
                @endif
                <form role="form" action="/admin/login" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required="" type="email" name="email" class="form-control rounded-0 input-field"
                            id="email" placeholder="Email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required="" type="password" name="password" class="form-control rounded-0 input-field"
                            id="password" placeholder="Password">
                        <label for="email">Password</label>
                    </div>
                    <div class="form-group my-4">
                        <button type="submit" class="btn btn-outline-primary btn-lg w-100 rounded-0">Login</button>
                    </div>
                    <div class="form-text my-3 text-end">
                        <a href="{{ route('forget.password') }}" target="_blank" rel="noopener noreferrer">Forgot
                            password</a>
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
