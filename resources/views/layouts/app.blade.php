<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="homepage is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo container">
            <div>
                <h1><a href="/" id="logo" >DEV LOCATOR</a></h1>
                <p>A free service to localize yourself with your skills</p>
            </div>
        </div>
    </header>

    <!-- Nav -->
    <nav id="nav" class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item{{ currentRoute(route('login')) }}">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item{{ currentRoute(route('register')) }}">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <h2>Set your skills, set your localization, find your new mission !</h2>
            <p>A free service to localize yourself with your skills</p>
            <a href="#main" class="button scrolly">Alright let's go</a>
        </div>
    </section>

    <!-- Main -->
    <section id="main">
        <div class="container">
            <div class="row gtr-200">
                <div class="col-12">

                    <!-- Dynamic Content -->
                    @yield('content')
                </div>

                <div class="col-12">
                    <!-- Highlight -->
                    <section class="box highlight">
                        <ul class="special">
                            <li><a href="#" class="icon fa-search"><span class="label">Magnifier</span></a></li>
                            <li><a href="#" class="icon fa-tablet"><span class="label">Tablet</span></a></li>
                            <li><a href="#" class="icon fa-flask"><span class="label">Flask</span></a></li>
                            <li><a href="#" class="icon fa-cog"><span class="label">Cog?</span></a></li>
                        </ul>
                        <header>
                            <h2>A random assortment of icons in circles</h2>
                            <p>And some text that attempts to explain their significance</p>
                        </header>
                        <p>
                            Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
                            ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
                        </p>
                    </section>

                </div>
                <div class="col-12">

                    <!-- Features -->
                    <section class="box features">
                        <h2 class="major"><span>A Major Heading</span></h2>
                        <div>
                            <div class="row">
                                <div class="col-3 col-6-medium col-12-small">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                                        <h3><a href="#">A Subheading</a></h3>
                                        <p>
                                            Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
                                            lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                        </p>
                                    </section>

                                </div>
                                <div class="col-3 col-6-medium col-12-small">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                                        <h3><a href="#">Another Subheading</a></h3>
                                        <p>
                                            Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
                                            lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                        </p>
                                    </section>

                                </div>
                                <div class="col-3 col-6-medium col-12-small">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                                        <h3><a href="#">And Another</a></h3>
                                        <p>
                                            Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
                                            lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                        </p>
                                    </section>

                                </div>
                                <div class="col-3 col-6-medium col-12-small">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                                        <h3><a href="#">And One More</a></h3>
                                        <p>
                                            Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
                                            lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                        </p>
                                    </section>

                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><a href="#" class="button large">Do Something</a></li>
                                        <li><a href="#" class="button alt large">Think About It</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-12">

                    <!-- Blog -->
                    <section class="box blog">
                        <h2 class="major"><span>Another Major Heading</span></h2>
                        <div>
                            <div class="row">
                                <div class="col-9 col-12-medium">
                                    <div class="content">

                                        <!-- Featured Post -->
                                        <article class="box post">
                                            <header>
                                                <h3><a href="#">Here's a really big heading</a></h3>
                                                <p>With a smaller subtitle that attempts to elaborate</p>
                                                <ul class="meta">
                                                    <li class="icon fa-clock-o">15 minutes ago</li>
                                                    <li class="icon fa-comments"><a href="#">8</a></li>
                                                </ul>
                                            </header>
                                            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in lectus. Praesent
                                                semper mod quis eget mi. Etiam sed ante risus aliquam erat et volutpat. Praesent a
                                                dapibus velit. Curabitur sed nisi nunc, accumsan vestibulum lectus. Lorem ipsum
                                                dolor sit non aliquet sed, tempor et dolor.  Praesent a dapibus velit. Curabitur
                                                accumsan.
                                            </p>
                                            <a href="#" class="button">Continue Reading</a>
                                        </article>

                                    </div>
                                </div>
                                <div class="col-3 col-12-medium">
                                    <div class="sidebar">

                                        <!-- Archives -->
                                        <ul class="divided">
                                            <li>
                                                <article class="box post-summary">
                                                    <h3><a href="#">A Subheading</a></h3>
                                                    <ul class="meta">
                                                        <li class="icon fa-clock-o">6 hours ago</li>
                                                        <li class="icon fa-comments"><a href="#">34</a></li>
                                                    </ul>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="box post-summary">
                                                    <h3><a href="#">Another Subheading</a></h3>
                                                    <ul class="meta">
                                                        <li class="icon fa-clock-o">9 hours ago</li>
                                                        <li class="icon fa-comments"><a href="#">27</a></li>
                                                    </ul>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="box post-summary">
                                                    <h3><a href="#">And Another</a></h3>
                                                    <ul class="meta">
                                                        <li class="icon fa-clock-o">Yesterday</li>
                                                        <li class="icon fa-comments"><a href="#">184</a></li>
                                                    </ul>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="box post-summary">
                                                    <h3><a href="#">And Another</a></h3>
                                                    <ul class="meta">
                                                        <li class="icon fa-clock-o">2 days ago</li>
                                                        <li class="icon fa-comments"><a href="#">286</a></li>
                                                    </ul>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="box post-summary">
                                                    <h3><a href="#">And One More</a></h3>
                                                    <ul class="meta">
                                                        <li class="icon fa-clock-o">3 days ago</li>
                                                        <li class="icon fa-comments"><a href="#">8,086</a></li>
                                                    </ul>
                                                </article>
                                            </li>
                                        </ul>
                                        <a href="#" class="button alt">Archives</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row gtr-200">
                <div class="col-12">

                    <!-- About -->
                    <section>
                        <h2 class="major"><span>What's this about?</span></h2>
                        <p>
                            This is <strong>TXT</strong>, yet another free responsive site template designed by
                            <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a>. It's released under the
                            <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for
                            whatever you're working on (personal or commercial), just be sure to give us credit for the design.
                            That's basically it :)
                        </p>
                    </section>

                </div>
                <div class="col-12">

                    <!-- Contact -->
                    <section>
                        <h2 class="major"><span>Get in touch</span></h2>
                        <ul class="contact">
                            <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                            <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                            <li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
                            <li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
                            <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                        </ul>
                    </section>

                </div>
            </div>

            <!-- Copyright -->
            <div id="copyright">
                <ul class="menu">
                    <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>

        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.dropotron.min.js"></script>
<script src="/js/jquery.scrolly.min.js"></script>
<script src="/js/browser.min.js"></script>
<script src="/js/breakpoints.min.js"></script>
<script src="/js/util.js"></script>
<script src="/js/main.js"></script>

</body>
</html>