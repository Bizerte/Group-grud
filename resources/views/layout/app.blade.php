<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        @include('../navbar/navbar')
        @yield('content')



    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/script_group.js')}}"></script>
    <script src="{{ asset('js/sweetalert.min.js')}}"></script>
    </body>
</html>
