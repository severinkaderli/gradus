<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <base href="{{URL::to('/')}}">
    <!-- SEO Information -->
    <title>gradus - @yield('title')</title>
    <meta name="description" content="gradus let you manage your grades with ease.">
    <meta name="keywords" content="gradus, mark, grades, marks, subject, subjects, tests, success, severin, kaderli">
    <meta name="author" content="Severin Kaderli">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/simplex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
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
        <header id="header" class="cell cell--12">
            <div id="header--content" class="grid fullWidth">
                <div id="header--logo" class="cell cell--3">
                    &#x2713;gradus
                </div>
                <nav id="header--navigation" class="cell cell--9 right">
                    <ul>
                        @if(!Auth::check())
                            <li><a href="{{url('login')}}">Login</a></li>
                            <li><a href="{{url('register')}}">Register</a></li>
                        @else
                            <li><a href="{{url('archive')}}">Archive</a></li>
                            <li><a href="{{url('logout')}}">Logout</a></li>
                        @endif


                    </ul>
                </nav>
            </div>

        </header>
        <!-- Header END -->

        <!-- Content START -->
        <main id="contentWrapper" class="cell cell--12">
            <div id="content" class="grid fullWidth">
                @yield('content')
            </div>
        </main>
        <!-- Content END -->
        <!-- Footer START -->
        <footer id="footer" class="cell cell--12">
            <div id="footer__content" class="grid fullWidth">
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
        </footer>
        <div id="footer__copyright" class="cell cell--12">
            <div id="footer_copyright__content" class="grid fullWidth">
                <div class="cell cell--12">
                    &copy; 2015 - Severin Kaderli
                </div>
            </div>
        </div>
        <!-- Footer END -->
    </div>
    <!-- Body JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    @yield('bodyJS')
</body>
</html>