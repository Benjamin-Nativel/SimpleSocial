<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>simplesocial</title>
</head>

<body>
    <header>
        @include('layouts.header')
    </header>


    @yield('main')

    <footer>
        @include('layouts.footer')
    </footer>


</body>
</html>