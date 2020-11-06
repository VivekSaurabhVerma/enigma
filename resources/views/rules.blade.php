<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ENIGMA') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/question.js') }}"></script>
    <script src="{{asset('js/rules.js')}}"></script>
    
    <!-- Styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/rules.css')}}">
  <link rel="stylesheet" href="{{asset('css/icons.css')}}">
  
</head>

<body>
  <div class="container-fluid">
    <div class="techfest-logo">
      <a href="https://techfest.org/"><img src="{{asset('img/logo.png')}}" class="logo"></a>
    </div>
  </div>
  <div class="head">RULES</div>
  <div class="container rules-container carousel-rules">
                    <div id="carouselRulesIndicators" class="carousel slide" data-ride="carousel">
                      <div class="carousel-indicators-div">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselRulesIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselRulesIndicators" data-slide-to="1"></li>
                        </ol>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="rules-head">General Rules</p>
                            <ul>
                                <li>You will be directed to the next question when you type the correct answer to the current question.</li>
                                <li>Each question has the same weightage and if two people have answered the same number of questions then time will be used as the differentiating factor.</li>
                            </ul>
                            <p class="rules-head">Rules related to answering the questions</p>
                            <ul>
                                <li>One person can play on only one account.  If found playing with multiple accounts, the person will be disqualified automatically.</li>
                                <li><b>CAPS and SPACES</b> are not allowed. E.g. If your answer is "Hello World", enter "helloworld" to proceed to the next level. The answers also do not have special characters such as !, " etc. but exceptions are 0,1,2,....,9.</li>
                                <li>Beware of spelling errors in your answers. Enigma can't auto correct your spellings! </li>
                                <li>Do not use admin as your username</li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                          <p class="rules-head">Rules related to Discord Forum</p>
                          <ul><li>Rules for discussion on the forum are on the discord channel.</li></ul>
                          <p class="rules-head">Rules related to format</p>
                          <ul>
                            <li>There will be two leaderboards maintained. One for each Enigma and it will be called "Leaderboad" and one more for the overall competition called "Overall Leaderboard". Enigma is a 12 hours crypt hunt to be conducted 4 times fortnightly</li>
                            <li>
                                <p>The hunt is held from 12 noon to 12 midnight on 4 event days.</p>
                                <p>Dates of the event</p>
                                <p class="date"><b>Enigma 1.0:</b> 17th May 2020</p>
                                <p class="date"><b>Enigma 2.0:</b> 31st May 2020</p>
                                <p class="date"><b>Enigma 3.0:</b> 14th June 2020</p>
                                <p class="date"><b>Enigma 4.0:</b> 28th June 2020</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselRulesIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselRulesIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>

                 <div class="container rules-container continuous-view" >
            <p class="rules-head">General Rules</p>
            <ul>
              <li>You will be directed to the next question when you type the correct answer to the current question.</li>
              <li>Each question has the same weightage and if two people have answered the same number of questions then time will be used as the differentiating factor.</li>
            </ul>
            <p class="rules-head">Rules related to answering the questions</p>
            <ul>
              <li>One person can play on only one account. If found playing with multiple accounts, the person will be disqualified automatically.</li>
              <li><b>CAPS and SPACES</b> are not allowed. E.g. If your answer is "Hello World", enter "helloworld" to proceed to the next level. The answers also do not have special characters such as !, " etc. but exceptions are 0,1,2,....,9.</li>
              <li>Beware of spelling errors in your answers. Enigma can't auto correct your spellings! </li>
              <li>Do not use admin as your username</li>
            </ul>

            <p class="rules-head">Rules related to Discord Forum</p>
            <ul>
              <li>Rules for discussion on the forum are on the discord channel.</li>
            </ul>
            <p class="rules-head">Rules related to format</p>
            <ul>
              <li>There will be two leaderboards maintained. One for each Enigma and it will be called "Leaderboad" and one more for the overall competition called "Overall Leaderboard". Enigma is a 12 hours crypt hunt to be conducted 4 times with an interval of 14 days</li>
              <li>
                <p>The hunt is held from 12 noon to 12 midnight on 4 event days.</p>                
              </li>
            </ul>
            <div class="date-container">
              <p>Dates of the event</p>
            <p class="date"><b>Enigma 1.0:</b> 17th May 2020</p>
            <p class="date"><b>Enigma 2.0:</b> 31st May 2020</p>
            <p class="date"><b>Enigma 3.0:</b> 14th June 2020</p>
            <p class="date"><b>Enigma 4.0:</b> 28th June 2020</p>
            </div>
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
                        <div class="timer-div" style="display: none;">
                            <p class="timer"><span class="fa fa-clock-o" id="clock-icon"></span><span class="live-time">8:25:10</span></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
</body>
</html>
