<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.header')

        <main>
            @yield('content')
        </main>
    </div>

<footer class="footer border-top py-5 bg-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <a href="{{ URL::to('/') }}" class="text-dark text-decoration-none">
                       <div class="float-left"> <img src="{{ asset('images/logo.png') }}" height="50px" alt=""></div>
                       <div class="float-left pl-3">
                            <h4 class="text-left font-weight-bold mt-3">Smkn 1 cibadak</h4>
                       </div>
                   </a>
                </div>
                <div class="col-md-8">
                   <div class="row">
                       <div class="col-md-4 ml-auto">
                            <ul class="list-unstyled">
                                <li><h6 class="font-weight-bold">Navigasi</h6></li>
                                <li><a href="" class=" btn-link text-secondary mt-3">Beranda</a></li>
                                <li><a href="" class=" btn-link text-secondary mt-3">Tentang</a></li>
                            </ul>
                       </div>
                       <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><h6 class="font-weight-bold">Menu</h6></li>
                                <li><a href="" class=" btn-link text-secondary mt-3">Privasi</a></li>
                                <li><a href="" class=" btn-link text-secondary mt-3">FAQ</a></li>
                            </ul>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
