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

    @yield('extraCSS')
    <!-- JS Files -->
    @yield('extraJS')
</head>
<body>
    <!-- Header START -->
    <header id="header" class="mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">

    </header>
    <!-- Header END -->

    <!-- Content START -->
    <main>
            @yield('content')
    </main>
    <!-- Content END -->

<!-- Body JS -->
@yield('bodyJS')
</body>
</html>