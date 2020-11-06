<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <title>ENIGMA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:url" content="{{url()->current()}}">
<meta property="og:description" content="To help you tide over your quarantine blues, we present to you four rounds of enrapturing crypt hunt, Enigma. Answer the most number of questions in the given amount of time and stand a chance to win prizes worth INR 20,000. Register now at www.techfest.org/enigma ">
<meta property="og:title" content="Enigma | Techfest">
<meta property="og:site_name" content="Techfest">
<meta property="og:image" content="https://techfest.org/segreta/enigma.png">
<meta property="og:see_also" content="http://m.techfest.org">
<meta name="description" content="Techfest, IIT Bombay Enigma, online crypthunt">
<meta name="keywords" content="Techfest, Enigma, IIT Bombay, CryptHunt">
<meta name="author" content="Techfest Web Manager">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navitems.css') }}">
	<!-- Global site tag (gtag.js) - Google Analytics -->
  {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-81222017-1');
  </script> --}}
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('js/welcome.js')}}"></script>
  </head>

  <body>
    <!-- Hamburger part -->
    <div class="hamburger-div">
      <div class="hamburger-view">
        <div class="header">
          <div class="header-row-c row-c">
            <button class="hamburger-toggle">
              <span class="hamburger-menu">
                <span class="line line--top"></span>
                <span class="line line--middle"></span>
                <span class="line line--bottom"></span>
              </span>
              <div class="cross">
                <span class="slant-line-1"></span>
                <span class="slant-line-2"></span>
              </div>
            </button>
          </div>
        </div>
        <div class="toggle-circle">
          <div class="row-c">
            <svg class="hamburger-toggle__circle" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
              <circle cx="16" cy="16" r="16" />
            </svg>
          </div>
        </div>
      </div>

      <div class="hamburger-show">

        <div class="desktop-encloser">
         <div class="container container-navbar">
                    <nav class="navbar navbar-expand-md bg-light navbar-light">
                      
                      <a class="navbar-brand" href="https://techfest.org/" target="_blank"><img src="{{asset('img/logoblack.png')}}"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto mr-significant">
                          <li class="nav-item">
                            <a class="nav-link nav-link-rules" href="#" onclick="event.preventDefault()">Rules</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nav-link-prizes" href="#" onclick="event.preventDefault()">Prizes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nav-link-faqs" href="#" onclick="event.preventDefault()">FAQs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nav-link-contact-us" href="#" onclick="event.preventDefault()">Contact Us</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                </div>
                 <div class="container prizes-container">
                  <div class="prizes">
                    <div class="row justify-content-center">
                      @foreach($images as $image)
                      <div class="img-div">
                        {{-- <img src="/storage/prizes/{{$image->location}}" class="prize-img"> --}}
                      <img src="{{ asset('prizes/'.$image->location) }}" class="prize-img">
                        <p class="label"> {{$image->label}}</p>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>

                <div class="container contact-us-container">
                  <div class="row">
                    @foreach($persons as $person)
                    <div class="contact-col">
                      <p class="contact-name">{{$person->name}}</p>
                      <p class="contact-designation">{{$person->designation}}</p>
                      <p class="contact-email">{{$person->email}}</p>
                      <p class="contact-contact">{{$person->contact}}</p>
                    </div>
                    @endforeach
                  </div>
                </div>

                <!-- Rules -->
                <div class="container rules-container">
                  <div id="carouselRulesIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselRulesIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselRulesIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <p class="rules-head">General Rules</p>
                        <ul>
                          <li>You will be directed to the next question when you type the correct answer to the current question.</li>
                          <li>Each question has the same weightage and if two people have answered the same number of questions then time will be used as the differentiating factor.</li>
                        </ul>
                        <p class="rules-head">Rules related to answering the questions</p>
                        <ul>
                          <li>One person can play on only one account. If found playing with multiple accounts, the person will be disqualified automatically.</li>
                          <li><b>CAPS and SPACES</b> are not allowed. E.g. If your answer is "Hello World", enter "helloworld" to proceed to the next level. The answers also do not have special characters such as !, " etc. but 0, 1, ...., 9 are exceptions.</li>
                          <li>Beware of spelling errors in your answers. Enigma can't auto correct your spellings! </li>
                          <li>Do not use admin as your username</li>
                        </ul>
                      </div>
                      <div class="carousel-item">
                        <p class="rules-head">Rules related to Discord Forum</p>
                        <ul>
                          <li>Rules for discussion on the forum are on the discord channel.</li>
                        </ul>
                        <p class="rules-head">Rules related to format</p>
                        <ul>
                          <li>There will be two leaderboards maintained. One for each Enigma and it will be called "Leaderboad" and one more for the overall competition called "Overall Leaderboard". Enigma is a 12 hours crypt hunt to be conducted 4 times fortnightly</li>
                          <li>
                            <p>The hunt is held from 12 noon to 12 midnight on all 4 event days.</p>
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

                <div class="container faq-container">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <ul>
                          <li>
                            <p class="question">
                              How can I participate?
                            </p>
                            <p class="answer">
                              Register on site link and verify your email address to participate. Also join the discord server for hint, answers and discussions.
                            </p>
                          </li>
                          <li>
                            <p class="question">
                              How many hints will we get in each question?
                            </p>
                            <p class="answer">
                              The number of hints for each question are not fixed.
                            </p>
                          </li>
                          <li>
                            <p class="question">
                              How many levels will be there?
                            </p>
                            <p class="answer">
                              There will be no limit on the number of levels, just a time cap.
                            </p>
                          </li>
                          <li>
                            <p class="question">
                              What is discord forum?
                            </p>
                            <p class="answer">
                              It is an online platform where we have created our own channel. This channel will give hints, answer and you can also discuss the questions with your fellow participants. DO NOT GIVE ANSWERS OR HINTS, otherwise you will be banned and disqualified. Download the Discord App or Go to <a href="https://discord.com/" target="_blank">discord.com</a> and join the channels for updates.
                            </p>
                          </li>
                        </ul>
                      </div>
                      <div class="carousel-item">
                        <ul>
                          <li>
                            <p class="question">How we will get the prizes?</p>
                            <p class="answer">Prizes will be delivered as soon as delivery is possible. Your address and other relevant details will be asked after we have confirmed your final rank.</p>
                          </li>
                          <li>
                            <p class="question">Can I join Enigma 2.0 if I haven't played Enigma 1.0?</p>
                            <p class="answer">Each enigma has individual prizes so you can you can definitely join in any Round.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

          </div>

        <div class="mobile-encloser" >
          <a class="navbar-brand" href="https://techfest.org/" target="_blank"><img src="{{asset('img/logoblack.png')}}"></a>
          <div class="mobile-navbar" style="margin-top:0px;padding-right:0; padding-left:0;width:100vw">
            <center>
              <div class="container-fluid" id="mobile-navbar" >
                <nav class="nav nav-pills nav-fill greyish">
                  <a class="nav-item nav-link nav-link-rules" href="#" onclick="event.preventDefault()">Rules</a>
                  <a class="nav-item nav-link" href="#" onclick="event.preventDefault()">Prizes</a>
                  <a class="nav-item nav-link" href="#" onclick="event.preventDefault()">FAQs</a>
                  <a class="nav-item nav-link" href="#" onclick="event.preventDefault()">Contact Us</a>
                </nav>
              </div>
            </center>
          </div>

          <div class="container prizes-container" >
            <div class="prizes" >
              <div class="row justify-content-center">
                @foreach($images as $image)
                <div class="img-div">
                  <img src="{{asset('prizes/'.$image->location)}}" class="prize-img">
                  <p class="label"> {{$image->label}}</p>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="container contact-us-container">
            <div class="row">
              @foreach($persons as $person)
              <div class="contact-col">
                <p class="contact-name">{{$person->name}}</p>
                <p class="contact-designation">{{$person->designation}}</p>
                <p class="contact-email">{{$person->email}}</p>
                <p class="contact-contact">{{$person->contact}}</p>
              </div>
              @endforeach
            </div>
          </div>

          <div class="container rules-container" >
            <p class="rules-head">General Rules</p>
            <ul>
              <li>You will be directed to the next question when you type the correct answer to the current question.</li>
              <li>Each question has the same weightage and if two people have answered the same number of questions then time will be used as the differentiating factor.</li>
            </ul>
            <p class="rules-head">Rules related to answering the questions</p>
            <ul>
              <li>One person can play on only one account. If found playing with multiple accounts, the person will be disqualified automatically.</li>
              <li><b>CAPS and SPACES</b> are not allowed. E.g. If your answer is "Hello World", enter "helloworld" to proceed to the next level. The answers also do not have special characters such as !, " etc. but 0, 1, ...., 9 are exceptions.</li>
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
                <p>The hunt is held from 12 noon to 12 midnight on all 4 event days.</p>
              </li>
            </ul>
            <div id="date-container">
              <h5>Dates of the event</h5>
              <p class="date"><b>Enigma 1.0:</b> 17th May 2020</p>
              <p class="date"><b>Enigma 2.0:</b> 31st May 2020</p>
              <p class="date"><b>Enigma 3.0:</b> 14th June 2020</p>
              <p class="date"><b>Enigma 4.0:</b> 28th June 2020</p>  
            </div>
          </div>

          <div class="container faq-container">
            <ul>
              <li>
                <p class="question">
                  How can I participate?
                </p>
                <p class="answer">
                  Register on site link and verify your email address to participate. Also join the discord server for hint, answers and discussions.
                </p>
              </li>
              <li>
                <p class="question">
                  How many hints will we get in each question?
                </p>
                <p class="answer">
                  The number of hints for each question are not fixed.
                </p>
              </li>
              <li>
                <p class="question">
                  How many levels will be there?
                </p>
                <p class="answer">
                  There will be no limit on the number of levels, just a time cap.
                </p>
              </li>
              <li>
                <p class="question">
                  What is discord forum?
                </p>
                <p class="answer">
                  It is an online platform where we have created our own channel. This channel will give hints, answer and you can also discuss the questions with your fellow participants. DO NOT GIVE ANSWERS OR HINTS, otherwise you will be banned and disqualified. Download the Discord App or Go to <a href="https://discord.com/" target="_blank">discord.com</a> and join the channels for updates.
                </p>
              </li>

              <li>
                <p class="question">How we will get the prizes?</p>
                <p class="answer">Prizes will be delivered as soon as delivery is possible. Your address and other relevant details will be asked after we have confirmed your final rank.</p>
              </li>
              <li>
                <p class="question">Can I join Enigma 2.0 if I haven't played Enigma 1.0?</p>
                <p class="answer">Each enigma has individual prizes so you can you can definitely join in any Round.</p>
              </li>
            </ul>
          </div>
        </div>

       

        <div class="container footer-container">
          <div class="hamburger-footer">
            <footer>
              <div class="social-media-icon"><a href="https://twitter.com/Techfest_IITB" class="fa fa-twitter" target="_blank"></a></div>
              <div class="social-media-icon"><a href="https://www.linkedin.com/company/techfest/" class="fa fa-linkedin" target="_blank"></a></div>
              <div class="social-media-icon"><a href="https://www.facebook.com/iitbombaytechfest" class="fa fa-facebook" target="_blank"></a></div>
              <div class="social-media-icon"><a href="https://www.instagram.com/techfest_iitbombay/" class="fa fa-instagram" target="_blank"></a></div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <div class="hamburger-hide">
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <a href="https://techfest.org/" target="_blank"> <img src="{{ asset('img/logo.png') }}" class="logo"></a>
          </div>
        </div>
      </div>

      <div class="container-fluid text-center main-text">
        <img src="{{asset('img/hat.png')}}" class="hat">
        <div class="head">
          <div class="background-img"><img src="{{asset('img/background.png')}}"></div>
          <div class="hover-controller" style="display: inline-block;">
            ENIGMA
          </div>
        </div>
        <div class="sub-head">
          The fortnightly cryptohunt for your quarantine blues
        </div>
        <img src="{{asset('img/cape-front.png')}}" class="cape-front">
        <img src="{{asset('img/cape-back.png')}}" class="cape-back">

      </div>

      <div class="container buttons">
        <div class="row justify-content-center">
          <div class="btn-margin p-0 mr-button button">
          <a href="{{route('login')}}"><button class="btn btn-primary btn-lg  main-button">LOGIN</button></a>
          </div>
          <div class="btn-margin p-0 ml-button button">
          <a href="{{route('register')}}"><button class="btn btn-primary btn-lg  main-button">REGISTER</button></a>
          </div>
        </div>
      </div>

      <div class="container-fluid footer">
        <footer id="welcome-footer">
          <div class="notification">
            Enigma 2.0 will be live on 31 May, 2020
          </div>
          <div class="social-media-icon"><a href="https://twitter.com/Techfest_IITB" class="fa fa-twitter" target="_blank"></a></div>
          <div class="social-media-icon"><a href="https://www.linkedin.com/company/techfest/" class="fa fa-linkedin" target="_blank"></a></div>
          <div class="social-media-icon"><a href="https://www.facebook.com/iitbombaytechfest" class="fa fa-facebook" target="_blank"></a></div>
          <div class="social-media-icon"><a href="https://www.instagram.com/techfest_iitbombay/" class="fa fa-instagram" target="_blank"></a></div>
        </footer>
      </div>
    </div>
  </body>
</html>
