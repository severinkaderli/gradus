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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/simplex.css/dist/css/simplex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/gradus.min.css')}}">
    @yield('extraCSS')
            <!-- JS Files -->
    @yield('extraJS')
</head>
<body>
<div id="wrapper" class="grid">
    <!-- Appbar START -->
    <div id="apps" class="cell cell--12">
        <div id="apps--content" class="grid fullWidth">
            <nav id="app--links">
                <ul>
                    <li class="active"><a href="">gradus</a></li>
                    <li class="inactive"><a href="http://memento.severinkaderli.ch">memento</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Appbar END -->

    <!-- Header START -->
    <nav class="navbar">
        <div class="navbar__content container">
            <!-- Logo here -->
            <div class="navbar__logo navbar__item">
                <a href="{{url('/')}}">&#x2713;gradus</a>
            </div>
            <span class="navbar__spacer"></span>
            <ul class="navbar__nav navbar__item">
                @if(!Auth::check())
                    <li><a href="{{url('login')}}">Login</a></li>
                    <li><a href="{{url('register')}}">Register</a></li>
                @else
                    <li><a href="{{url('archive')}}">Archive</a></li>
                    <li><a href="{{url('logout')}}">Logout</a></li>
                @endif
            </ul>
            <form class="navbar__form navbar__item">
                <div class="input--group">
                    <input type="search" placeholder="search..."/>
                    <input type="submit" value="Send">
                </div>

            </form>
        </div>
    </nav>
    <!-- Header END -->

    <!-- Content START -->
    <main id="contentWrapper" class="cell cell--12">
        <div id="content" class="grid container">
            @include('errors._list')
            @yield('content')
        </div>
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