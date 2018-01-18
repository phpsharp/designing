<!DOCTYPE html>
<html lang="en" style="background:none;position:relative; min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Imprevo</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="/css/material.min.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ Config::get('RELATIVE_URL') }}/assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="/assets/vendor/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="/assets/vendor/owl.carousel/assets/owl.theme.default.css" />
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/theme-fix.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <script src="/assets/vendor/modernizr/modernizr.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>
    <script src="/assets/vendor/pnotify/pnotify.custom.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="/assets/vendor/owl.carousel/owl.carousel.js"></script>

	<script src="/assets/javascripts/theme.js"></script>

	<!-- Theme Custom -->
	<script src="/assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="/assets/javascripts/theme.init.js"></script>

	<!--getmdl-select-->
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.indigo-pink.min.css">

	<link rel="stylesheet" href="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.css">
	<script defer src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<style>
html, body {
	font-family: 'Roboto', sans-serif;
}

.navbar-default {
	width:100%;
	background:rgba(255,255,255,0);
	margin:0;
	border:none;

}

.navbar-default .navbar-nav{
	padding-right:15px;
}

.navbar-default .navbar-nav > li{

	padding-right:25px;
}

.navbar-default .navbar-nav .dropdown{

}

.navbar-default .navbar-nav > li > a{
	color:#ffffff;
	font-size: 14px;
	text-transform: uppercase;
}

.navbar-default .navbar-nav > li > a:hover{
    color:#399aed;
	font-size: 14px;
}

.navbar-default .navbar-nav > li > a:focus{
    color:#399aed;
	font-size: 14px;
}

.navbar-default .navbar-nav > .open > a{
	background:rgba(255,255,255,0);
	color:#ffffff;
	font-size: 14px;
}

.navbar-default .navbar-nav > .open > a:hover{
	background:rgba(255,255,255,0);
    color:#399aed;
	font-size: 14px;
}

.navbar-default .navbar-nav > .open > a:focus{
	background:rgba(255,255,255,0);
    color:#399aed;
	font-size: 14px;
}

.navbar-default .navbar-nav .dropdown .dropdown-menu{
	border-radius: 0px !important;
	margin-top:10px;
	padding:15px 20px 15px 20px;
	background:#399aed
}

.navbar-default .navbar-nav .dropdown .dropdown-menu > li{
	padding:0;
	border-bottom:1px solid #338ad5;
}

.navbar-default .navbar-nav .dropdown .dropdown-menu > li > a{
	padding:10px 0px 10px 0px ;
	color:#ffffff;
}

.navbar-default .navbar-nav .dropdown .dropdown-menu > li > a:hover{
	background:#399aed;
	color:#117a97;
}

#dropdown3 {
	background:#399aed;
	color:#ffffff;
}

#dropdown3:before {
	position: absolute;
	top: -9px;
	left:50px;
	display: inline-block;
	border-right: 9px solid transparent;
	border-bottom: 9px solid #399aed;
	border-left: 9px solid transparent;
	content: '';
}

#dropdown2:before {
	position: absolute;
	top: -9px;
	left:120px;
	display: inline-block;
	border-right: 9px solid transparent;
	border-bottom: 9px solid #399aed;
	border-left: 9px solid transparent;
	content: '';
}

#dropdown1:before {
	position: absolute;
	top: -9px;
	left:60px;
	display: inline-block;
	border-right: 9px solid transparent;
	border-bottom: 9px solid #399aed;
	border-left: 9px solid transparent;
	content: '';
}

.navbar-default .navbar-toggle {
		border:none;
		text-align:right;
}



#header-div
{
	width:100%;
	/*justify-content:center;*/
	padding:10px 0 10px 15px;
	margin:0;
	/*height:100px;*/


}

#my-account-button{
	margin:6px;
	color:#fff;
	font-size: 14px;
	background: #f29f00;
	width:150px;
	height:40px;
}

#my-account-button:hover{
	margin:6px;
	color:#fff;
	font-size: 14px;
	background: #d98f00;
}

#my-account-button-logged{
	margin:6px;
	color:#fff;
	font-size: 14px;
	background: #399aed;
	width:150px;
	height:40px;
}

#my-account-button-logged:hover{
	margin:6px;
	color:#fff;
	font-size: 14px;
	background: #2081d5;
}

.footer-link{
	padding:10px;
	color: #55adb1;
}

#footer-1div{
	text-align:right;
}

#footer-2div{
	text-align:center;
}

#footer-3div{
	text-align:left;
}
@media (max-width: 1620px) {
	#footer-links-div{
		width:80%;
	}
}
@media (max-width: 1450px) {
	#nav-bar{
		width: 70% !important;
	}
}
@media (max-width: 1380px){
	#footer-links-div{
		width:90%;
	}
	#nav-bar{
		width: 80% !important;
	}
}
@media (max-width: 1205px){
	#nav-bar{
		width: 90% !important;
	}

	.navbar-default .navbar-nav {
		padding-right:0px;
	}

	.navbar-default .navbar-nav > li {
		padding-right:0px !important;
	}

}
@media (max-width:1055px){
	#footer-links-div{
		width:100%;
	}
}
@media (max-width: 940px){
		#nav-bar{
			width: 100% !important;
		}
}
@media (max-width: 840px)
{
	.navbar-header {
        float: none;
    }
    .navbar-left {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }

    .navbar-collapse.collapse {
        display: none!important;
    }

    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
		margin-right:0px !important;
    }

	#dropdown1, #dropdown2, #dropdown3{
		padding:0px 10px 0px 10px;

	}

    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
    .navbar-default .navbar-collapse {
        background:#ffffff;
		float:right;
		width:60%;
		z-index:99999;
    }
	.navbar-default .navbar-nav > li > a{
		color:#6c937b;
	}
	.navbar-default .navbar-nav > li {
		border-bottom: 1px solid #eeeeee;
	}
	.navbar-brand{
		padding:15px 0px 0px 0px;
	}
	.navbar-brand img{
		height:14px;
		width: auto;
	}
	.navbar-default .navbar-toggle{
		padding:5;
	}
	.navbar-default .navbar-toggle i{
		font-size:18px;
	}
	#footer-1div{
		text-align:center;
	}

	#footer-2div{
		text-align:center;
	}

	#footer-3div{
		text-align:center;
	}

	#dropdown2:before {
		display: none;
	}

	#dropdown1:before {
		display: none;
	}

	#my-account-button{
		width:100px;
		height:40px;
		font-size:10px;
	}

	.footer-link{
		font-size:12px;
	}

	#foot-copyright-span{
		font-size:12px;
	}
	#parent-div{
		padding-bottom:200px !important;
	}
}

@media (max-width: 768px) {
	#parent-div{
		padding-bottom:50px !important;
	}
}



</style>

<body class="back-full-image" style="padding:0px; margin: 0px;overflow-x: hidden; position:relative; width:100%;">
	<div id="parent-div" class="mdl-grid mdl-cell mdl-cell--12-col" style="padding-bottom:100px;">
	<div id="header-div" class="mdl-grid mdl-cell mdl-cell--12-col mdl-grid--no-spacing" style="justify-content:center">
		<div id="nav-bar" class="mdl-cell mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="padding:0;margin:0;">
			<nav class="navbar navbar-default">
				<div class="container-fluid" style="padding:0">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<i aria-hidden="true" class="fa fa-navicon" style="color:#ffffff"></i>
						</button>
						<a class="navbar-brand" href="/"><img src='/images/logo.png'></img></a>
					</div>
					<div class="collapse navbar-collapse  navbar-right" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="https://imprevo.hu/what-is-imprevo">{!! trans('headerfooter.header-span1') !!}</a></li>
							<li>
								<a href="https://imprevo.hu/shop">{!! trans('headerfooter.header-span2') !!}</a>
							</li>
							<li><a href="https://imprevo.hu/blog">{!! trans('headerfooter.header-span5') !!}</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown2" href="https://imprevo.hu/ingyenes-tartalmak">{!! trans('headerfooter.header-span6') !!}<!--<span class="caret"></span>--></a>
								<ul id="dropdown2" class="dropdown-menu">
									<li><a class="a-submenu" href="https://imprevo.hu/20-részes-ingyenes-angol-tanfolyam">{!! trans('headerfooter.header-span7') !!}</a></li>
									<li><a class="a-submenu" href="https://imprevo.hu/tanulj-meg-angolul-6-hónap-alatt-az-imprevo-val">{!! trans('headerfooter.header-span8') !!}</a></li>
									<li><a class="a-submenu" href="https://imprevo.hu/angol-igeidők-ebook">{!! trans('headerfooter.header-span9') !!}</a></li>
									<li><a class="a-submenu" href="https://imprevo.hu/angol-levelek-írása">{!! trans('headerfooter.header-span10') !!}</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown" style="">
							@if (Auth::guest())
								<button id="my-account-button" onclick="goProfile(event)" class="my-nav-button dropdown-toggle mdl-button mdl-js-button mdl-button--raised mdl-button--colored" data-toggle="dropdown" style="border-radius:2px;outline:none;border:none;">
									{!! trans('headerfooter.header-button1') !!}
								</button>
							@else
								<button class="dropdown-toggle" id="my-account-button-logged" onclick="location.href = '/home'" class="my-nav-button dropdown-toggle" data-toggle="dropdown" style="border-radius:2px;outline:none;border:none;">
									{!! trans('headerfooter.header-button2') !!}
								</button>
								<ul id="dropdown3" class="dropdown-menu">
									<li><a class="a-submenu" href="/profile">{!! trans('headerfooter.header-dropdown1') !!}</a></li>
									<li><a class="a-submenu" href="#" onclick="Logout(event)">{!! trans('headerfooter.header-dropdown2') !!}</a></li>
								</ul>
							@endif

							</li>
						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>

    <main class="mdl-layout__content" style="padding-bottom:100px; width:100%;overflow:hidden;min-height:570px">
	    @yield('content')
    </main>
	</div>
    <div class="mdl-grid mdl-cell mdl-cell--12-col" style="margin:0; padding:0;background: transparent;position: absolute; left:0; bottom: 0;width: 100%;">
        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--4-col-phone mdl-grid--no-spacing" style="justify-content:center; margin:0 auto; padding:0;">
			<div id="footer-links-div" class="mdl-cell mdl-cell mdl-cell--7-col mdl-cell--hide-tablet mdl-cell--hide-phone" style="text-align:center; margin:0;paddig:0;">
				<a class="footer-link" href="https://imprevo.hu/aszf" style="padding:10px">ÁSZF</a>
				<a class="footer-link" href="https://imprevo.hu/adatvedelem" style="padding:10px">Adatvédelem</a>
				<a class="footer-link" href="https://imprevo.hu/céginformáció" style="padding:10px">Céginfó</a>
				<a class="footer-link" href="https://imprevo.hu/cookie-k-kezelése" style="padding:10px">Sütik</a>
				<a class="footer-link" href="https://imprevo.hu/sales/course/10" style="padding:10px">Online Angol Tanfolyam</a>
				<a class="footer-link" href="https://imprevo.hu/what-is-imprevo" style="padding:10px">Mi az Imprevo?</a>
				<a class="footer-link" href="https://imprevo.hu/kik-vagyunk" style="padding:10px">Kik vagyunk?</a>
				<a class="footer-link" href="https://imprevo.hu/contact-page" style="padding:10px">Kapcsolat</a>
			</div>
			<div id="footer-links-div-phone" class="mdl-grid mdl-cell mdl-cell--hide-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="justify-content:center; text-align:center; margin:0;paddig:0;">
				<div class="mdl-cell mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="">
					<a class="footer-link" href="https://imprevo.hu/aszf" style="padding:10px">ÁSZF</a>
					<a class="footer-link" href="https://imprevo.hu/adatvedelem" style="padding:10px">Adatvédelem</a>
					<a class="footer-link" href="https://imprevo.hu/céginformáció" style="padding:10px">Céginfó</a>
					<a class="footer-link" href="https://imprevo.hu/cookie-k-kezelése" style="padding:10px">Sütik</a>
				</div>
				<div class="mdl-cell mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="">
					<a class="footer-link" href="https://imprevo.hu/sales/course/10" style="">Online Angol Tanfolyam</a>
					<a class="footer-link" href="https://imprevo.hu/what-is-imprevo" style="">Mi az Imprevo?</a>
				</div>
				<div class="mdl-cell mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="">
					<a class="footer-link" href="https://imprevo.hu/kik-vagyunk" style="padding:10px">Kik vagyunk?</a>
					<a class="footer-link" href="https://imprevo.hu/contact-page" style="padding:10px">Kapcsolat</a>
				</div>
			</div>
        </div>
        <div class="mdl-cell mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="text-align: center;width: 100%; margin-top:10px; color: #6c937b;font-size:18px">
            <a href="https://www.facebook.com/imprevo"><i class="fa fa-facebook" style="color: #55adb1;margin-right:30px"></i></a>
            <a href="https://twitter.com/ImprevoLearning"><i class="fa fa-twitter" style="color: #55adb1;margin-right:30px"></i></a>
            <a href="https://plus.google.com/103750741136736429559"><i class="fa fa-google-plus" style="color: #55adb1;margin-right:30px"></i></a>
            <a href="https://www.youtube.com/channel/UC9zzm-SiiLWFX-a_M0E1QHQ"><i class="fa fa-youtube-play" style="color: #55adb1;"></i></a>
        </div>
        <div class="mdl-cell mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="width: 100%;text-align: center;margin-top:20px">
            <span id="foot-copyright-span" style="color: #55adb1">Copyright 2016. Imprevo. Minden jog fenntartva.</span>
        </div>
    </div>
</div>

<script>
    function goLogin() {
        location.href = '/login'
    }

    function goProfile(e) {
		location.href = '/profile';
    }

	function Logout(e) {
        e.preventDefault();
        document.getElementById('logout-form').submit();
    }

	function isMobileDevice() {
		return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
	};

	console.log(isMobileDevice());
	if (!isMobileDevice()){
		$('ul.nav li.dropdown').hover(function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
		}, function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
		});
	}
</script>
</body>
</html>
