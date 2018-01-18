<style>
.top-header-link{
  color:#ffffff;
  text-decoration: none;
}

.top-header-link:hover{
  color:#f29f00;
  text-decoration: none;
}

.navbar-default {
	width:100%;
	background:rgba(255,255,255,0);
	margin:0;
	border:none;
}

.navbar-default .navbar-nav > li{
	padding:0px;
}
.navbar-default .navbar-nav > li > a{
	color:#000000;
	font-size: 14px;
  font-weight: 550;
  height:80px;
  line-height: 80px;
  padding:0px;
	text-transform: uppercase;
}

.navbar-default .navbar-nav > li > a:hover{
  color:#f29f00;
}

.navbar-default .navbar-nav > li > a:focus{
  color:#f29f00;
}

.navbar-default .navbar-nav > .open > a{
	background:rgba(255,255,255,0);
	color:#ffffff;
	font-size: 14px;
}

.navbar-default .navbar-nav > .open > a:hover{
	background:rgba(255,255,255,0);
  color:#f29f00;
}

.navbar-default .navbar-nav > .open > a:focus{
	background:rgba(255,255,255,0);
  color:#f29f00;
}



.navbar-default .navbar-nav .dropdown .dropdown-menu{
	margin-top:10px;
	padding:15px 20px 15px 20px;
	background:#eaf2ee;
  border: 1px solid #202020;
  box-shadow:0px -2px 2px rgba(0, 0, 0, 0.4);
}

.navbar-default .navbar-nav .dropdown .dropdown-menu > li{
	padding:0;
	border-bottom:1px solid #d2d9d6;
}

.navbar-default .navbar-nav .dropdown .dropdown-menu > li > a{
	padding:10px 0px 10px 0px ;
	color:#000;
}

.navbar-default .navbar-nav .dropdown .dropdown-menu > li > a:hover{
	background:#eaf2ee;
	color:#f29f00;
}

#dropdown2:before {
	position: absolute;
	top: 0px;
	left:160px;
	display: inline-block;
	content: '';
  box-sizing: border-box;
  transform-origin: 0 0;
  transform: rotate(135deg);
  box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.4);
  border: 10px solid black;
  border-color: transparent transparent #eaf2ee #eaf2ee;
}

#dropdown3:before {
	position: absolute;
	top: 0px;
	left:160px;
	display: inline-block;
	content: '';
  box-sizing: border-box;
  transform-origin: 0 0;
  transform: rotate(135deg);
  box-shadow: -3px 3px 3px 0 rgba(0, 0, 0, 0.4);
  border: 10px solid black;
  border-color: transparent transparent #eaf2ee #eaf2ee;
}


.navbar-default .navbar-toggle {
		border:none;
    padding-top:21px;
		padding-right:15px;
}

.navbar-default .navbar-toggle > i{
  font-size:20px;
}

.navbar-default .navbar-toggle.collapsed > .fa-navicon{
  display:block;
}

.navbar-default .navbar-toggle.collapsed > .fa-close{
  display:none;
}

.navbar-default .navbar-toggle > .fa-navicon{
  display:none;
}

.navbar-default .navbar-toggle > .fa-close{
  display:block;
}

.navbar-brand{
  padding-top:30px;
}

.header-profile-div{
  background:url('/images/header_profile_deactive.png') no-repeat;
  background-position:0px 20px;
  width:130px;
  height:80px;
  text-align:right;
}

.header-profile-div.active{
  background:url('/images/header_profile_active.png') no-repeat;
  background-position:0px 20px;
  width:130px;
  height:80px;
  text-align:right;
  color:#f29f00;
}

.header-profile-img {
  color:#000;
}

@media (max-width: 450px)
{
  .mdl-cell--12-col-phone{
    width:100% !important;
  }
  .navbar-header{
    margin-left:16px;
  }
  #myNavbar{
    background:#eaf2ee;
    margin-top:10px;
    width:100%;
  }
}

</style>
<div id="header-div" class="mdl-grid mdl-cell mdl-cell--12-col" style="width:100%;margin:0;padding:0;height:110px">
  @if (Auth::guest())
  <div class="mdl-grid mdl-cell mdl-cell--12-col" style="width:100%;background-color:#3b4a51; height:30px;margin:0;padding:0;justify-content:center;">
    <div class="mdl-grid mdl-cell mdl-cell--8-col mdl-grid-no--spacing" style="padding:0; margin:0">
      <div class="mdl-cell mdl-cell mdl-cell--6-col" style="color:#ffffff;padding:0; margin:0;line-height:30px">
        <img src="images/header_phone_handle.png" style="width:15px; height:15px;margin-right:10px"/>Hívj minket: +36-20-341-2944
      </div>
      <div class="mdl-cell mdl-cell mdl-cell--6-col" style="color:#ffffff;text-align:right;padding:0; margin:0;line-height:30px">
        <a class="top-header-link" href="#">Bejelentkezés</a> | <a class="top-header-link" href="#">Regisztráció</a>
      </div>
    </div>
  </div>
  @endif
  <div class="mdl-grid mdl-cell mdl-cell--12-col" style="width:100%;background-color:#eaf2ee; height:80px;margin:0;padding:0;justify-content:center;">
    <div class="mdl-grid mdl-cell mdl-cell--8-col mdl-cell--12-col-phone" style="padding:0; margin:0">
      <nav class="navbar navbar-default">
          <div class="navbar-header" style="">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
              <i aria-hidden="true" class="fa fa-navicon" style="color:#000"></i>
              <i aria-hidden="true" class="fa fa-close" style="color:#000"></i>
            </button>
            <a class="navbar-brand" href="/" style="text-align: left;padding-left: 0px;"><img src='/images/header_imprevo_log.png'></img></a>
          </div>
          <div class="collapse navbar-collapse  navbar-right" id="myNavbar" style="height:80px;line-height:80px;">
            <ul class="nav navbar-nav mdl-cell--hide-phone" style="">
              <li><a href="https://imprevo.hu/what-is-imprevo">{!! trans('headerfooter.header-span1') !!}<span style="padding:15px;color:#e1e1e1">|</span></a></li>
              <li>
                <a href="https://imprevo.hu/shop">{!! trans('headerfooter.header-span2') !!}<span style="padding:15px;color:#e1e1e1">|</span></a></a>
              </li>

              <li class="dropdown" style="">
                <a class="dropdown-toggle" data-toggle="dropdown2" href="https://imprevo.hu/ingyenes-tartalmak">{!! trans('headerfooter.header-span5') !!}
                <span style="padding:15px;color:#e1e1e1">|</span></a>
                <ul id="dropdown2" class="dropdown-menu">
                  <li><a class="a-submenu" href="https://imprevo.hu/20-részes-ingyenes-angol-tanfolyam">{!! trans('headerfooter.header-span7') !!}</a></li>
                  <li><a class="a-submenu" href="https://imprevo.hu/tanulj-meg-angolul-6-hónap-alatt-az-imprevo-val">{!! trans('headerfooter.header-span8') !!}</a></li>
                  <li><a class="a-submenu" href="https://imprevo.hu/angol-igeidők-ebook">{!! trans('headerfooter.header-span9') !!}</a></li>
                  <li><a class="a-submenu" href="https://imprevo.hu/angol-levelek-írása">{!! trans('headerfooter.header-span10') !!}</a></li>
                </ul>
              </li>
              <li><a href="https://imprevo.hu/blog">INGYENESEK<span style="padding:15px;color:#e1e1e1">|</span></a></a></li>

              <li><a href="https://imprevo.hu/blog">KAPCSOLAT</a></a></li>
              <li class="dropdown" style="margin-left:15px;padding-left:15px;height:80px;border-left:1px solid #e1e1e1">
                <a class="dropdown-toggle" data-toggle="dropdown3" href="https://imprevo.hu/ingyenes-tartalmak">
                  <div class="header-profile header-profile-div">
                    Sándor
                    <img class="header-profile header-profile-img" src="/images/header_profile_arrow_down.png" style="margin-left:5px"/>
                  </div>
                </a>
                <ul id="dropdown3" class="dropdown-menu">
                  <li><a class="a-submenu" href="https://imprevo.hu/20-részes-ingyenes-angol-tanfolyam">
                      <img src="/images/header_profile_icon_mail.png" style="margin-right:5px">
                      <span>Béres Béla Sándor<br><span style="padding-left:25px">beres.bela.s@gmail.com</span></span>
                  </a></li>
                  <li><a class="a-submenu" href="https://imprevo.hu/tanulj-meg-angolul-6-hónap-alatt-az-imprevo-val">
                    <img src="/images/header_profile_icon_book.png" style="margin-right:5px">
                    <span>Kurzusok</span>
                  </a></li>
                  <li><a class="a-submenu" href="https://imprevo.hu/angol-igeidők-ebook">
                    <img src="/images/header_profile_icon_profill.png" style="margin-right:5px">
                    <span>Profil</span>
                  </a></li>
                  <li><a class="a-submenu" href="https://imprevo.hu/angol-levelek-írása">
                    <img src="/images/header_profile_icon_logout.png" style="margin-right:5px">
                    <span>Kijelentkezés</span>
                  </a></li>
                </ul>
              </li>
            </ul>
            <div class="mdl-grid mdl-cell mdl-cell--12-col-phone mdl-cell--hide-tablet mdl-cell--hide-desktop" style="padding:20px 0px; margin:0">
              <div class="mdl-cell mdl-cell mdl-cell--12-col-phone" style="line-height:60px; margin:0;font-size:15px; border-bottom:1px solid #d2d9d6">
                AZ IMPREVO
              </div>
              <div class="mdl-cell mdl-cell mdl-cell--12-col-phone" style="line-height:60px; margin:0;font-size:15px; border-bottom:1px solid #d2d9d6">
                SHOP
              </div>
              <div class="mdl-cell mdl-cell mdl-cell--12-col-phone" style="line-height:60px; margin:0;font-size:15px;">
                BLOG
              </div>
              <div class="mdl-cell mdl-cell mdl-cell--12-col-phone" style="line-height:60px; margin:0;font-size:15px; border-bottom:1px solid #d2d9d6; border-top:1px solid #d2d9d6">
                INGYENESEK
              </div>
            </div>
          </div>
      </nav>
    </div>
  </div>
</div>
<!-- <ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li class="dropdown" style="">
    <button id="my-account-button" onclick="goLogin(event)" class="dropdown-toggle mdl-button mdl-js-button mdl-button--raised mdl-button--colored" data-toggle="dropdown" style="border-radius:2px;outline:none;border:none;">
      {!! trans('headerfooter.header-button1') !!}
    </button>
    </li>
  @else
    <li class="dropdown" style="">
      <button class="dropdown-toggle" id="my-account-button-logged" onclick="location.href = '/home'" class="my-nav-button dropdown-toggle" data-toggle="dropdown" style="border-radius:2px;outline:none;border:none;">
        {!! trans('headerfooter.header-button2') !!}
      </button>

      <ul id="dropdown3" class="dropdown-menu">
        <li><a class="a-submenu" href="/profile">{!! trans('headerfooter.header-dropdown1') !!}</a></li>
        <li><a class="a-submenu" href="#" onclick="Logout(event)">{!! trans('headerfooter.header-dropdown2') !!}</a></li>
      </ul>
    </li>
  @endif
</ul> -->
<script>
function isMobileDevice() {
  return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
if (!isMobileDevice()){
  $('ul.nav li.dropdown').hover(function() {
    $('.header-profile').addClass('active');
     $(".header-profile-img").attr("src", "/images/header_profile_arrow_down_active.png");
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
  }, function() {
    $('.header-profile').removeClass('active');
    $(".header-profile-img").attr("src", "/images/header_profile_arrow_down.png");
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
  });
}
</script>
