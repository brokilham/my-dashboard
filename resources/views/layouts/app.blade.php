<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        {{--Styles--}}
        <!--begin style general theme-->
        <link href="{{asset('assets/layouts/css/bootstrap.css')}}"  rel="stylesheet" type="text/css" >
        <link href="{{asset('assets/layouts/css/custom.css')}}"  rel="stylesheet" type="text/css" >
        <link href="{{asset('assets/layouts/css/animate.css')}}"  rel="stylesheet" type="text/css" >
        <!--end of style general theme-->

        @yield('styles')
    </head>
    <body class="@yield('body_class')">

        {{--Page--}}
        @yield('page')

        {{--Scripts--}}
        @yield('scripts')
    </body>
</html>
