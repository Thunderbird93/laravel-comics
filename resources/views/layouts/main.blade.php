<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Laravel DC-Comics | @yield('title')</title>
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.cta')

    @include('partials.footer')

</body>
</html>