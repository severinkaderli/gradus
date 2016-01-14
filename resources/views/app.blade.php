<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <base href="{{URL::to('/')}}">
    <!-- SEO Information -->
    <title>gradus - @yield('title')</title>
    <meta name="description" content="gradus let you manage your grades with ease.">
    <meta name="keywords" content="gradus, mark, grades, marks, subject, subjects, tests, success, severin, kaderli">
    <meta name="author" content="Severin Kaderli">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic' rel='stylesheet'
          type='text/css'>
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/gradus.min.css')}}">-->
    <style>
    .container {
        max-width: 1020px;
    }
    </style>

    @yield('extraCSS')
    <!-- JS Files -->
    <script src="{{URL::asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    @yield('extraJS')
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">&#x2713;gradus</a>
            <ul class="nav navbar-nav">

                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('archive')}}">Archive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('logout')}}">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <!-- Header END -->

    <!-- Content START -->
    <main class="container">
            @include('errors._list')
            @yield('content')
    </main>
    <!-- Content END -->
    <!-- Footer START -->
    <footer id="footer" class="cell cell--12">
        <div id="footer__content" class="grid">
            <div class="container">
                <div class="cell cell--6">
                    <h3>About</h3>

                    <p>This is a site for managing your marks blablablub</p>
                </div>
                <div class="cell cell--6">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="https://github.com/severinkaderli/gradus">GitHub</a></li>
                        <li><a href="https://github.com/severinkaderli/simplex.css">simplex.css</a></li>
                        <li><a href="http://severinkaderli.ch">severinkaderli.ch</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="footer__copyright" class="grid">
            <div class="container">
                <div class="cell cell--12">
                    &copy; 2015 - Severin Kaderli
                </div>
            </div>

        </div>

    </footer>

    <!-- Footer END -->
</div>
<!-- Body JS -->
<script src="{{URL::asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/gradus.min.js')}}"></script>
@yield('bodyJS')
</body>
</html>