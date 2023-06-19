<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>

<body>
    @include('layouts.nav')

        @yield('content')
        @if (session()->has('message'))
        <div class="alert">
            {{ session('message') }}
        </div>
    @endif
    @include('layouts.footer')
</body>

</html>