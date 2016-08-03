<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="_error" content="{{ $errors->any() ? 1 : 0 }}">
    <base href="{{URL::to('/')}}">
    <!-- SEO Information -->
    <title>gradus - @yield('title')</title>
    <meta name="description" content="gradus lets you manage your grades with ease.">
    <meta name="keywords" content="gradus, mark, grades, marks, subject, subjects, tests, success, severin, kaderli">
    <meta name="author" content="Severin Kaderli">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('bower_components/material-design-lite/material.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/gradus.min.css')}}">
    @yield('extraCSS')
    <style>
        .mdl-card {
            width: 100%;
            max-width: 100%;
            height: 100%;
            margin: 0 auto 10px auto;
        }

        .submit-button {
            margin-top: 20px;
        }
    </style>
    <!-- JS Files -->
    <script async src="{{URL::asset('bower_components/material-design-lite/material.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/rest_link.js')}}"></script>
    @yield('extraJS')
</head>
<body>
    <div class="mdl-layout mdl-layout--fixed-tabs mdl-layout--no-desktop-drawer-button mdl-js-layout mdl-layout--fixed-header">

        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">gradus - @yield('title')</span>

                <div class="mdl-layout-spacer"></div>

                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    @if(!Auth::check())
                        <a href="{{url('login')}}" class="is-active mdl-navigation__link">Login</a>
                        <a href="{{url('register')}}" class="is-active mdl-navigation__link">Register</a>
                    @else
                        <a href="{{url('archive')}}" class="is-active mdl-navigation__link">Archive</a>
                        <a href="{{url('logout')}}" class="is-active mdl-navigation__link">Logout</a>
                    @endif
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">gradus - @yield('title')</span>
            <nav class="mdl-navigation">
                @if(!Auth::check())
                    <a href="{{url('login')}}" class="is-active mdl-navigation__link">Login</a>
                    <a href="{{url('register')}}" class="is-active mdl-navigation__link">Register</a>
                @else
                    <a href="{{url('archive')}}" class="is-active mdl-navigation__link">Archive</a>
                    <a href="{{url('logout')}}" class="is-active mdl-navigation__link">Logout</a>
                @endif
            </nav>
        </div>
        <main class="mdl-layout__content">
            @yield('content')
        </main>


        <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer__left-section">
                <div class="mdl-logo">&copy;2016 Severin Kaderli</div>
                <ul class="mdl-mini-footer__link-list">
                    <li><a href="https://github.com/severinkaderli">GitHub</a></li>
                </ul>
            </div>
        </footer>
    </div>
    </body>
</html>
