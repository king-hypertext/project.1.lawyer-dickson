@extends('admin.auth-layout.layout')
@empty(session('email'))
    {{-- <script>
        // alert('message')
        window.location.href = '../admin/forget-password'
    </script> --}}
@endempty

@section('content')
    <div class="container-fluid text-dark" style="margin: 50px auto auto auto">
        <div class="d-flex justify-content-center align-content-center align-items-center">
            <div class="container-lg login-form bg-white p-5 p-lg-5 p-md-3 p-sm-2 shadow-lg">
                <div class="text-center mb-4 text-purple">
                    <i class="d-block">Reset your password</i>
                </div>
                <div class="my-2 text-primary">
                    6 digit code has been sent to your email to reset your password
                </div>
                <form action="/admin/reset-password" method="post">
                    @csrf
                    <input type="hidden" name="email" id="email" value="admin@2024.com"/>
                    <div class="form-floating mb-3">
                        <input required type="number" minlength="6" maxlength="6" name="reset_code" autofocus
                            class="form-control rounded-0 input-field @error('reset_code') border-danger @enderror"
                            id="reset_code" placeholder="Enter reset code">
                        <label for="reset_code">Enter reset code</label>
                        @if ($errors->has('reset_code'))
                            <span class="form-text text-danger mt-0 pt-0 has-error">
                                Invalid code entered
                            </span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" required name="password"
                        class="form-control rounded-0 input-field @error('password') border-danger @enderror"
                        id="password" placeholder="New Password">
                    <label for="password">New Password</label>
                    @error('password')
                        <span class="form-text text-danger mt-0 pt-0 has-error">
                            The password confirmation field does not match
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" required name="confirmPassword"
                        class="form-control rounded-0 input-field @error('password') border-danger @enderror"
                        id="confirmPassword" placeholder="Confirm New Password">
                    <label for="confirmPassword">Confirm New Password</label>
                </div>
                <div class="form-group my-4">
                    <button type="submit" class="btn btn-outline-primary btn-lg w-100 rounded-0">Reset
                        Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    window.sessionStorage.setItem('email', "{{ session('email') }}");
    let email = window.sessionStorage.getItem('email')
    // document.getElementById('email').value = email
    document.querySelectorAll('.input-field').forEach(field => {
        field.addEventListener('focus', function() {
            field.classList.remove('border-danger')
        })
    })
</script>
@endsection
