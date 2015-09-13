<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <base href="{{URL::to('/')}}">
    <!-- SEO Information -->
    <title>memento - @yield('title')</title>
    <meta name="description" content="gradus let you manage your grades with ease.">
    <meta name="keywords" content="gradus, mark, grades, marks, subject, subjects, tests, success, severin, kaderli">
    <meta name="author" content="Severin Kaderli">
    <!-- Fonts -->

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/framework.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    @yield('extraCSS')
    <!-- JS Files -->
    @yield('extraJS')
</head>
<body>
    <div id="wrapper" class="grid">
        <div id="apps" class="cell cell--12">
            <div id="apps--content" class="grid">
                <nav id="app--links">
                    <ul>
                        <li>gradus</li>
                        <li>memento</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Header START -->
        <header id="header" class="cell cell--12">
            <div id="header--content" class="grid">
                <div id="header--logo" class="cell cell--3">
                    &#x2713;
                </div>
                <nav id="header--navigation" class="cell cell--9">
                    <ul>
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <!-- Header END -->

        <!-- Content START -->
        <main id="contentWrapper" class="cell cell--12">
            <div id="content" class="grid">
                @yield('content')
            </div>
        </main>
        <!-- Content END -->
        <!-- Footer START -->
        <footer id="footer" class="cell cell--12">
            <div id="footer--content" class="grid">
                severin kaderli
            </div>
        </footer>
        <!-- Footer END -->
    </div>

    <!-- Body JS -->
    @yield('bodyJS')
</body>
</html>