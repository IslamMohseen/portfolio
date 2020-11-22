<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 20:21:05 GMT -->
<head>
    <meta charset="utf-8">
    <title>Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/circle.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ URL::asset('css/skins/yellow.css') }}" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ URL::asset('css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ URL::asset('css/skins/green.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ URL::asset('css/skins/yellow.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{ URL::asset('css/skins/blueviolet.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{ URL::asset('css/skins/goldenrod.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{ URL::asset('css/skins/magenta.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{ URL::asset('css/skins/orange.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{ URL::asset('css/skins/purple.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ URL::asset('css/skins/red.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{ URL::asset('css/skins/yellowgreen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styleswitcher.css') }}" />

    <!-- Modernizr JS File -->
    <script src="{{ URL::asset('js/modernizr.custom.js') }}"></script>
</head>

<body class="@yield('body_class')">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="{{ URL::asset('img/styleswitcher/purple.png') }}" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="{{ URL::asset('img/styleswitcher/red.png') }}" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="{{ URL::asset('img/styleswitcher/blueviolet.png') }}" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="{{ URL::asset('img/styleswitcher/blue.png') }}" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="{{ URL::asset('img/styleswitcher/goldenrod.png') }}" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="{{ URL::asset('img/styleswitcher/magenta.png') }}" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="{{ URL::asset('img/styleswitcher/yellowgreen.png') }}" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="{{ URL::asset('img/styleswitcher/orange.png') }}" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="{{ URL::asset('img/styleswitcher/green.png') }}" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="{{ URL::asset('img/styleswitcher/yellow.png') }}" alt="yellow"/></a>
            </li>
        </ul>

        <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="{{ url('about') }}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="{{ url('portfolio') }}">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="{{ url('contact') }}">
                <h2>Contact</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="{{ url('about') }}"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="{{ url('portfolio') }}"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="{{ url('contact') }}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
