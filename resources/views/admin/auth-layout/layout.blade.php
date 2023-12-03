<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'RESET PASSWORD' }}</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/auth.css') }}">
    <link rel="shortcut icon" href="{{ url('assets/images/dr.osei-logo.jpg') }}" type="image/x-icon">
</head>
<style>
    body{
        height: 100vh;
        padding: 0.25rem;
    }
</style>
<body>
    <div class="d-flex" style="place-content: center;place-items: center;">
        @yield('content')
    </div>
    @yield('script')
</body>

</html>
