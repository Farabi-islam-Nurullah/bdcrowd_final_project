<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <!--====== Title ======-->
 <title>@yield('title')</title>



        <!--====== favicon Icon ======-->
        <link rel="icon" href="{{asset('frontend/images/fabicon.svg')}}">

        <!--====== font-awesome css ======-->
        <link rel="stylesheet" href="{{asset('frontend/font-awesome-icon/css/font-awesome.min.css')}}">


        <!--====== Normalize css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">


        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

        <!--====== style css ======-->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body>


    <div id="app" class="bodyWrapper">
        @include('layouts.header')

        <main class="">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    @yield('script')

    <!--====== javascript & jquery ======-->

    <!--====== html5shiv js ======-->
    <script src="{{asset('frontend/js/html5shiv.min.js')}}"></>

    <!--====== selectivizr js ======-->
    <script src="{{asset('frontend/js/selectivizr-min.js')}}"></script>

    <!--====== Respond js ======-->
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>

 

    <!--====== JQuery js ======-->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

    <!--====== Poper js ======-->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
