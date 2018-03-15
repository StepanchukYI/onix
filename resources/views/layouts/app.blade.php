<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<!--<link  href="{{asset('libs/css/owl.carousel.min.css')}}" rel="stylesheet">-->





    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('layouts.header')
@include('layouts.footer')
@include('layouts.navbar')

<div id="app" class="container-fluid">


    @yield('header')
    @yield('navbar')
    @yield('content')

    @yield('footer')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
