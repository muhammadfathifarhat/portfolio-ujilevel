<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/izitoast/dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>Untitled UI - @yield('title')</title>
</head>

<body>
    @yield('body')

    <script src="{{ asset('vendor/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/izitoast/dist/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>

    
    @if (Session::has('inputSuccess'))
        <script>
            iziToast.success({
                title: 'Success',
                message: ' {{ Session::get('inputSuccess') }}',
                position: 'bottomLeft',
                iconColor: '#198754',
                titleColor: '#198754',
                drag: false,
                pauseOnHover: false,
                iconColor: '#198754',
                titleColor: '#198754',
            });
        </script>
    @endif
</body>

</html>
