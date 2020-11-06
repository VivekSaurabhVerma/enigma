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
	<meta name="description" content="Techfest, IIT Bombay Enigma, Leaderboard">
	<meta name="keywords" content="Techfest, Enigma, IIT Bombay, CryptHunt">
	<meta name="author" content="Techfest Web Manager">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
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
    <script src="{{ asset('js/app.js') }}" defer></script>
    
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
    
    <script src="{{asset('js/question.js')}}"></script>    

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div id="header" class="container">
            <a class="navbar-brand" href="https://techfest.org/">
                <img src="{{asset('img/logo.png')}}" class="logo" alt="Techfest logo">
            </a>
        </div>
    </nav>
    <div class="container" id="leaderboard-container">
        <div id="leaderboard-image-container">
            <img id="leaderboard-icon" src="{{asset('img/leaderboard.png')}}" alt="Techfest Enigma leaderboard logo">
        </div>
        <div class="tbl-header tbl-top">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Level</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>{{ $currentUser->rank }}</th>
                  <th>{{$currentUser->name}}</th>
                  <th>{{$currentUser->game1_score}}</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
              <tbody>
                @foreach ($users as $user)
       	@if($loop->iteration < 12)
		 <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$user->name}} </td>
                  <td>{{$user->level}}</td>
                </tr>
@endif
                @endforeach                              
            </tbody>
            </table>
          </div>
    </div>
    <div class="container leaderboard-button-container">
    <a class="flow-button" href="{{ route('overall')}}" id="overall-leaderboard">
        <span>Overall Leaderboard</span>
      </a>
    </div>
</body>
</html>
