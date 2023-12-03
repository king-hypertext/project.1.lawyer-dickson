@extends('admin.auth-layout.layout')
@section('content')
    <div class="container-fluid text-dark" style="margin: 50px auto auto auto">
        <div class="d-flex justify-content-center align-content-center align-items-center">
            <div class="container-lg login-form bg-white p-5 p-lg-5 p-md-3 p-sm-2 shadow-lg">
                <div class="text-center mb-4 text-purple">
                    <i class="display-block">Reset your password</i>
                </div>
                <div class="my-2 text-success">
                    You will receive 6 digit code via your email to reset your password
                </div>
                @if (session('error'))
                    <h6 class="h6 fw-sm alert alert-warning text-warning text-center fa-fade">
                        An has occured, try again after sometime
                    </h6>
                @endif
                <form action="/admin/forget-password" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required type="email" name="email" autofocus
                            class="form-control rounded-0 input-field @error('email')
                            border-danger @enderror"
                            id="email" value="{{ @old('email') }}" placeholder="Email">
                        <label for="email">Email</label>
                        @error('email')
                            <span class="form-text text-danger mt-0 pt-0 has-error">
                                The entered email does not exist!
                            </span>
                        @enderror
                    </div>
                    <div class="form-group my-4">
                        <button type="submit" class="btn btn-outline-primary btn-lg w-100 rounded-0">Send Code</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
