<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="{{url()->current()}}">
	<meta property="og:description" content="To help you tide over your quarantine blues, we present to you four rounds of enrapturing crypt hunt, Enigma. Answer the most number of questions in the given amount of time and stand a chance to win prizes worth INR 20,000. Register now at www.techfest.org/enigma ">
	<meta property="og:title" content="Enigma | Techfest">
	<meta property="og:site_name" content="Techfest">
	<meta property="og:image" content="https://techfest.org/segreta/enigma.png">
	<meta property="og:see_also" content="http://m.techfest.org">
	<meta name="description" content="Techfest, IIT Bombay Enigma">
	<meta name="keywords" content="Techfest, Enigma, IIT Bombay, CryptHunt">
	<meta name="author" content="Techfest Web Manager">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ENIGMA') }}</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script> --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/question.js')}}"></script>
    
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Londrina+Outline:100,300,400,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/question.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/nextlevel.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/icons.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
            <div id="header" class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}" class="logo">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if (auth()->user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/levels') }}">Admin Dashboard</a>
                            </li>    
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('leaderboard') }}" target="_blank">Leaderboard</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rules') }}" target="_blank">Rules</a>
                            </li>
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
        
        <main class="container py-2">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>
    <div class="container-fluid footer" id="footer">
        <footer>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 media-icons footer-icons">
                    <div class="social-media-icon"><a href="https://twitter.com/Techfest_IITB" class="fa fa-twitter" target="_blank"></a></div>
                    <div class="social-media-icon"><a href="https://www.linkedin.com/company/techfest/" class="fa fa-linkedin" target="_blank"></a></div>
                    <div class="social-media-icon"><a href="https://www.facebook.com/iitbombaytechfest" class="fa fa-facebook" target="_blank"></a></div>
                    <div class="social-media-icon"><a href="https://www.instagram.com/techfest_iitbombay/" class="fa fa-instagram" target="_blank"></a></div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 timer-div-encloser">
                    <div class="timer-div" style="display: none;" >
                        <p class="timer"><span class="fa fa-clock-o" id="clock-icon"></span><span class="live-time">8:25:10</span></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="{{asset('js/levelup.js')}}"></script>
</html>
