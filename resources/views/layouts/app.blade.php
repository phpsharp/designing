<!DOCTYPE html>
<html lang="en" style="position:relative; min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Imprevo</title>

    <!-- Fonts -->

	<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />


    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" />
    <link rel="stylesheet" href="/css/material.min.css" />
    <link rel="stylesheet" href="/css/styles.css" />

    <link rel="stylesheet" href="{{ Config::get('RELATIVE_URL') }}/assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>
    <script src="/assets/vendor/pnotify/pnotify.custom.js"></script>



    <link href="/assets/audio-player/css/audioPlayer.css" rel="stylesheet"/>
    <script src="/assets/audio-player/js/audioPlayer.js"></script>


	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />

	<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Head Libs -->
	<script src="/assets/vendor/modernizr/modernizr.js"></script>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
	  <!--GaCode-->

	<!--End GaCode-->
    <!--Facebook Pixel Code-->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1692560164346282');
fbq('track', "PageView");

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1692560164346282&ev=PageView&noscript=1"
/></noscript>

    <!--End Facebook Pixel Code-->
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
	padding-right:15px;
}

#header-div
{
	width:100%;
	/*justify-content:center;*/
	padding:10px 0 10px 0;
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
	font-weight:700;
	color: #6c937b;
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

#header-div{
	background: #006e73;
	padding:20px 50px 20px 50px;
}

#div-footer {
	height:140px;
}

@media (max-width: 1380px){
	#footer-links-div{
		width:90%;
	}

}
@media (max-width: 1205px){


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

@media (max-width: 990px) {
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
}

@media (max-width: 769px) {
	#header-div{
		background: #006e73;
		padding:20px 10px 20px 10px;
	}

    .navbar-default .navbar-collapse {
        background:#ffffff;
		float:right;
		width:60%;
		z-index:99999;
    }

	.navbar-default{
		padding-right:0px;
	}

	.navbar-default .navbar-nav > li > a{
		color:#6c937b;
	}

	.navbar-default .navbar-nav > li {
		border-bottom: 1px solid #eeeeee;
	}

	.navbar-default .navbar-toggle{
		padding:5;
	}

	.navbar-default .navbar-toggle i{
		font-size:18px;
	}

	.navbar-brand img{
		height:14px;
		width: auto;
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

	#dropdown3:before {
		display: none;
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

	#my-account-button-logged{
		font-size: 10px;
		width:100px;
		height:40px;
	}

	.footer-link{
		font-size:12px;
	}

	#div-footer {
		height:230px;
	}

}

</style>
<style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('/images/pageLoader.gif') 50% 50% no-repeat #dadada;
    opacity: .8;
}
</style>
<body style="padding:0px; margin: 0px; height:100%;width:100%; overflow-x: hidden;background:#ffffff;">
<div id="Parent-Div-Background" style="position:relative; margin:0; width:100%;min-height:100%;">
			<div id="header-div" class="mdl-grid mdl-cell mdl-cell--12-col mdl-grid-no--spacing" style="">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<i aria-hidden="true" class="fa fa-navicon" style="color:#ffffff"></i>
								</button>
								<a class="navbar-brand" href="/" style=""><img src='/images/logo.png'></img></a>
							</div>
							<div class="collapse navbar-collapse  navbar-right" id="myNavbar">
								<ul class="nav navbar-nav" style="margin-right:80px">
									<li><a href="https://imprevo.hu/what-is-imprevo">what is this?</a></li>
									<li>
										<a  href="https://imprevo.hu/shop">Shop</a>
									</li>
									<li><a href="https://imprevo.hu/blog">Blog</a></li>
									<li class="dropdown" style="">
										<a class="dropdown-toggle" data-toggle="dropdown2" href="https://imprevo.hu/ingyenes-tartalmak">ingyenes-tartalmak<!--<span class="caret"></span>--></a>
										<ul id="dropdown2" class="dropdown-menu">
											<li><a class="a-submenu" href="https://imprevo.hu/20-részes-ingyenes-angol-tanfolyam">20-részes-ingyenes-angol-tanfolyam</a></li>
											<li><a class="a-submenu" href="https://imprevo.hu/tanulj-meg-angolul-6-hónap-alatt-az-imprevo-val">tanulj-meg-angolul-6-hónap-alatt-az-imprevo-val</a></li>
											<li><a class="a-submenu" href="https://imprevo.hu/angol-igeidők-ebook">angol-igeidők-ebook</a></li>
											<li><a class="a-submenu" href="https://imprevo.hu/angol-levelek-írása">angol-levelek-írása</a></li>
										</ul>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">

									<li  style="">
										<button id="my-account-button" onclick="goLogin()" class="my-nav-button dropdown-toggle mdl-button mdl-js-button mdl-button--raised mdl-button--colored" data-toggle="dropdown" style="border-radius:2px;outline:none;border:none;">
											Login
										</button>
									</li>

								</ul>
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</div>
						</div>
					</nav>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
			</div>




    <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
            <a class="mdl-navigation__link is-active" href="tryit.html">Try it</a>
            <a class="mdl-navigation__link" href="courses.html">Course</a>
            <a class="mdl-navigation__link" href="lessons.html">Lessons</a>
            <a class="mdl-navigation__link" href="freebies.html">Freebies</a>
        </nav>
    </div>

    @yield('content')
    <div id="div-footer" class="mdl-grid mdl-cell mdl-cell--12-col" style="margin:0; padding:0;z-index:2;background:#ffffff; position: absolute;left: 0;bottom: 0px;width: 100%;padding-top:20px;">
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
			<div id="footer-links-div-phone" class="mdl-grid mdl-cell mdl-cell--hide-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-grid--no-spacing" style="justify-content:center; text-align:center;margin:0;paddig:0;">
				<div class="mdl-cell mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="padding-top:10px">
					<a class="footer-link" href="https://imprevo.hu/aszf" style="padding:10px">ÁSZF</a>
					<a class="footer-link" href="https://imprevo.hu/adatvedelem" style="padding:10px">Adatvédelem</a>
					<a class="footer-link" href="https://imprevo.hu/céginformáció" style="padding:10px">Céginfó</a>
					<a class="footer-link" href="https://imprevo.hu/cookie-k-kezelése" style="padding:10px">Sütik</a>
				</div>
				<div class="mdl-cell mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="padding-top:10px">
					<a class="footer-link" href="https://imprevo.hu/sales/course/10" style="">Online Angol Tanfolyam</a>
					<a class="footer-link" href="https://imprevo.hu/what-is-imprevo" style="">Mi az Imprevo?</a>
				</div>
				<div class="mdl-cell mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="padding-top:10px">
					<a class="footer-link" href="https://imprevo.hu/sales/course/11" style="padding:10px">Kik vagyunk?</a>
					<a class="footer-link" href="https://imprevo.hu/contact-page" style="padding:10px">Kapcsolat</a>
				</div>
			</div>

        </div>
        <div class="mdl-cell mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="text-align: center;width: 100%; margin-top:10px; color: #6c937b;font-size:18px">
            <a href="https://www.facebook.com/imprevo"><i class="fa fa-facebook" style="color: #6c937b;margin-right:30px"></i></a>
            <a href="https://twitter.com/ImprevoLearning"><i class="fa fa-twitter" style="color: #6c937b;margin-right:30px"></i></a>
            <a href="https://plus.google.com/103750741136736429559"><i class="fa fa-google-plus" style="color: #6c937b;margin-right:30px"></i></a>
            <a href="https://www.youtube.com/channel/UC9zzm-SiiLWFX-a_M0E1QHQ"><i class="fa fa-youtube-play" style="color: #6c937b;"></i></a>
        </div>
        <div class="mdl-cell mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone" style="width: 100%;text-align: center;margin-top:10px;padding-bottom:15px;">
            <span style="padding-left:210px;color: #6c937b; font-size:12px;font-weight:600;">payment</span>
			<img src="/images/footer-barion-logo.png" style="padding-left:10px">
        </div>
         <div class="mdl-cell mdl-cell mdl-cell--hide-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone" style="width: 100%;text-align: center;margin-top:10px;padding-bottom:15px;">
			<div class="mdl-cell mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col-phone">
				<span style="color: #6c937b; font-size:12px;font-weight:600;">222222222</span>
			</div>
			<div class="mdl-cell mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col-phone">
				<img src="/images/footer-barion-logo.png" style="">
			</div>
        </div>
    </div>
</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="/assets/vendor/jquery/jquery.js"></script>
<script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="/assets/vendor/jquery-validation/jquery.validate.min.js"></script>

<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="/assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="/assets/vendor/pnotify/pnotify.custom.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="/assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="/assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/assets/javascripts/theme.init.js"></script>

<script>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</body>
</html>