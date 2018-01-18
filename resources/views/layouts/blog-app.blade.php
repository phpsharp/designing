<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Imprevo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    {{--<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" />--}}
    <link rel="stylesheet" href="/css/material.min.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ Config::get('RELATIVE_URL') }}/assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" type="text/css" href="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>
    <script src="/assets/vendor/pnotify/pnotify.custom.js"></script>
	
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link href="/assets/audio-player/css/audioPlayer.css" rel="stylesheet"/>
    <script src="/assets/audio-player/js/audioPlayer.js"></script>

 
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="padding:0; height:100%;margin: 0;overflow-x: hidden">
<!--<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" style="width:100%;min-height:100%">-->
<div id='Parent-Div-Background'style="position:relative;width:100%;min-height:100%;">
    <header class="mdl-layout__header mdl-layout__header--transparent" style="background: #006e73;height:100px">
        <div class="mdl-layout__header-row" style="margin-top:15px">
            <!-- Title -->
                <span class="mdl-layout-title">
                    <a href="/"><img src="/images/logo.png"></a>
                </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="/tryit" style="color:#fff;font-size: 18px">Try it</a>
                <a class="mdl-navigation__link" href="/courses" style="color:#fff;font-size: 18px">Course</a>
                <a id="submenu" class="mdl-navigation__link" href="#" style="color:#fff;font-size: 18px">Lessons</a>
                <a class="mdl-navigation__link" href="/freebies" style="color:#fff;font-size: 18px">Freebies</a>
                @if (Auth::guest())
                <button onclick="goLogin()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:#fff;font-size: 18px;background: #f29f00;margin-left:150px">
                    LOGIN
                </button>
                @else
                    <button onclick="goProfile(event)" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="color:#fff;font-size: 18px;background: #f29f00;margin-left:150px">
                        MY ACCOUNT
                    </button>
                @endif
            </nav>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu"  for="submenu">
                @foreach(\App\Level::all() as $level)
                    <a class="mdl-menu__item" href="/lessons/{{$level->id}}">{{$level->title}}</a>
                @endforeach
            </ul>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </header>
    <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link is-active" href="tryit.html">Try it</a>
            <a class="mdl-navigation__link" href="courses.html">Course</a>
            <a class="mdl-navigation__link" href="lessons.html">Lessons</a>
            <a class="mdl-navigation__link" href="freebies.html">Freebies</a>
        </nav>
    </div>

    @yield('content')
    <div id="div-footer" style="z-index:2;background:#ffffff; border:1px solid #eee;position: absolute;left: 0;bottom: 0px;height:120px;width: 100%;padding-top:20px;">
            <ul class="mdl-mini-footer__link-list" style="justify-content:center;margin:0 auto;color: #6c937b">
                <li><a href="#">ÁSZF</a></li>
                <li><a href="#">Adatvédelem</a></li>
                <li><a href="#">Céginfó</a></li>
                <li><a href="#">Sütik</a></li>
                <li><a href="#">Online Angol Tanfolyam</a></li>
                <li><a href="#">Mi az Imprevo?</a></li>
                <li><a href="#">Kik vagyunk?</a></li>
                <li><a href="#">Árak</a></li>
                <li><a href="#">Kapcsolat</a></li>
            </ul>
            <div style="text-align: center;width: 100%; margin-top:10px; color: #6c937b;font-size:18px">
                <a href=""><i class="fa fa-facebook" style="color: #6c937b;margin-right:30px"></i></a>
                <a href=""><i class="fa fa-twitter" style="color: #6c937b;margin-right:30px"></i></a>
                <a href=""><i class="fa fa-google-plus" style="color: #6c937b;margin-right:30px"></i></a>
                <a href=""><i class="fa fa-youtube-play" style="color: #6c937b;"></i></a>
            </div>
            <div style="width: 100%;text-align: center;margin-top:10px">
                <span style="color: #6c937b">Copyright 2016. Imprevo. Minden jog fenntartva.</span>
            </div>
    </div>
</div>
<!--    <footer class="mdl-mini-footer" style="border:1px solid #eee;background: #fff">
        <ul class="mdl-mini-footer__link-list" style="margin:0 auto;color: #6c937b">
            <li><a href="#">ÁSZF</a></li>
            <li><a href="#">Adatvédelem</a></li>
            <li><a href="#">Céginfó</a></li>
            <li><a href="#">Sütik</a></li>
            <li><a href="#">Online Angol Tanfolyam</a></li>
            <li><a href="#">Mi az Imprevo?</a></li>
            <li><a href="#">Kik vagyunk?</a></li>
            <li><a href="#">Árak</a></li>
            <li><a href="#">Kapcsolat</a></li>
        </ul>
        <div style="width: 100%;text-align: center;margin-top:10px;color: #6c937b;font-size:18px">
            <a href=""><i class="fa fa-facebook" style="margin-right:30px"></i></a>
            <a href=""><i class="fa fa-twitter" style="margin-right:30px"></i></a>
            <a href=""><i class="fa fa-google-plus" style="margin-right:30px"></i></a>
            <a href=""><i class="fa fa-youtube-play"></i></a>
        </div>
        <div style="width: 100%;text-align: center;margin-top:10px">
            <span style="color: #6c937b">Copyright 2016. Imprevo. Minden jog fenntartva.</span>
        </div>
        background:#ffab62;
width:100%;
height:100px;
position:absolute;
bottom:0;
left:0;
    </footer>-->

<!--</div>-->

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="/assets/vendor/jquery/jquery.js"></script>
<script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<script>
    function goLogin() {
        location.href = '/login'
    }
    function goProfile(e) {
        e.preventDefault();
        document.getElementById('logout-form').submit();
    }
</script>
</body>
</html>
