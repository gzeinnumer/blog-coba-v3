<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <title>{{ $title }}</title>
</head>
<body>
   @include('partials.nav')
    <div class="container mt-3">
        @yield('name')
    </div>
</body>
</html>
<script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>