@extends('layouts.app')
<style>
#know_more_button {
	background:#399aed;
	color:white;
	font-size: 14px;
	width:100%;
	padding:0px 5px 0px 5px;
}
#know_more_button:hover {
	background:#2081d5;
}
.custom-row{
	background:#ffffff;

}
.custom-row:hover{
	background:#f0f0f0;
}

#banner-image {
	padding:10px;
	margin:0px 0px 0px 15px;
	width:110px;
	height:110px;
}
#brecumb_div{
	background: #9fc3ae;
	padding:5px 40px 5px 0px;
	padding-left:80px;
	font-size: 16px;
}

#main-content{
	padding-bottom:150px;
}

@media (max-width: 400px) {
	#banner-image {
		padding:0px;
		margin:15px 0px 0px 10px;
		width:60px;
		height:60px;
	}

	#brecumb_div{
		padding-left:25px;
	}

	#main-content{
		padding-bottom:250px;
	}
}
</style>
@section('content')
<div id="main-content" class="mdl-layout__content" style="width:100%;background-color:#ebf3ef">
    <div id="brecumb_div" style="">
        <span><a href="/" style="color:#d5e7dc;line-height: 40px;text-decoration: none">Imprevo</a></span>
        <span style="padding:0px 5px 0px 5px;color:#d5e7dc;line-height: 40px">/</span>
        <span style="color:#fff;line-height: 40px">DashBoard</span>
    </div>
    <div class="mdl-grid portfolio-max-width">
        <div id="top-banner" class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
			<div  id="top-banner-card" class="mdl-grid mdl-cell mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--12-col-desktop mdl-grid--no-spacing mdl-card mdl-shadow--4dp" style="min-height:115px;padding:0;background: url('/images/dashboard_above_graphic.png') no-repeat center/cover; background-color:#006e73">
                <div class="mdl-grid mdl-cell mdl-cell--hide-phone mdl-cell--5-col" style="margin:0">
                </div>
                <div class="mdl-grid mdl-cell mdl-cell--4-col-phone mdl-cell--5-col" style="margin:0">
                    <div class="mdl-cell mdl-cell--12-col" style="text-align:center">
                        <span style="color:#ffffff;font-size:25px;">IMPREVO - Interaktív online angol leckék az IMPREVO-val!</span>
                    </div>
					<div class="mdl-cell mdl-cell--12-col" style="text-align:center">
						<span style="color:#7fbabd">Videós magyarázatokkal és szótanuló játékokkal.</span>
					</div>
                </div>
				<div class="mdl-grid mdl-cell mdl-cell--2-col mdl-cell--4-col-phone" style="padding:10px;margin:0;padding-top:50px;text-align:center">
                    <button id="know_more_button" onclick="tryit()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                        Try it
                    </button>
				</div>
            </div>
        </div>

          <div class="mdl-cell mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet">
            <p class="mdl-cell mdl-cell--12-col mdl-typography--headline normal_title">courses</p>
            <div id="list" class="mdl-grid mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp" style="padding:0">

                    <div id="course-div-1" class="course-div mdl-grid mdl-cell mdl-cell--12-col custom-row" style="width:100%;padding:5px;margin:0; border-bottom: 1px solid #eeeeee; cursor:pointer" onclick="location.href='/lessons'">
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet mdl-cell--1-col-phone pt5">
                            <div style="font-size:18px;font-weight: 300;color:#3b4a51">course1</div>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--5-col-tablet mdl-cell--3-col-phone text-right pt5">
                            <span style="font-size: 16px;color: #979797">25 lessons</span>
														<i class="fa fa-chevron-right" style="padding-left:10px;color:#000000; font-weight:10; font-size:12px;"></i>
                        </div>
                    </div>

										<div id="course-div-2" class="course-div mdl-grid mdl-cell mdl-cell--12-col custom-row" style="width:100%;padding:5px;margin:0; border-bottom: 1px solid #eeeeee; cursor:pointer" onclick="location.href='/lessons'">
												<div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet mdl-cell--1-col-phone pt5">
														<div style="font-size:18px;font-weight: 300;color:#3b4a51">course2</div>
												</div>
												<div class="mdl-cell mdl-cell--6-col mdl-cell--5-col-tablet mdl-cell--3-col-phone text-right pt5">
														<span style="font-size: 16px;color: #979797">35 lessons</span>
														<i class="fa fa-chevron-right" style="padding-left:10px;color:#000000; font-weight:10; font-size:12px;"></i>
												</div>
										</div>


            </div>
          </div>
          <div class="mdl-cell mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet">
            <p id="side-top-title" class="mdl-cell mdl-cell--12-col mdl-typography--headline normal_title" style="display:none">Current Lesson</p>
            <div id="side-top"  class="mdl-grid mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp portfolio-card" onclick="" style="cursor:pointer;padding:0">

            </div>
            <p class="mdl-cell mdl-cell--12-col mdl-typography--headline normal_title">Try them</p>
            <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp" style="padding:0;">
                <div class="mdl-grid mdl-cell mdl-cell--12-col" style="padding:0px;margin:0px;border-bottom: 1px solid #eeeeee">
				    <div class="mdl-cell mdl-cell--6-col" style="padding:0;  padding-left:10px; margin:0">
                        <div class="mdl-cell mdl-cell--12-col" style="color:#000000;padding-top:20px;font-size:25px;font-weight: 300; line-height:30px;">IMPREVO angol tanfolyam</div>
                        <div class="mdl-cell mdl-cell--12-col" style="padding-top:20px;">
                            <span>try them</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col" style="padding-top:20px;">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect imprevo-default" onclick="location.href = '/sales/course/10'">
								try them
							</button>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col" style="padding:0; margin:0">
                        <img src="/images/dashboard_ad_image1.png" border="0" alt="">
                    </div>
                </div>
                <div class="mdl-grid mdl-cell mdl-cell--12-col" style="padding:0px;margin:0px;border-bottom: 1px solid #eeeeee">
				    <div class="mdl-cell mdl-cell--6-col" style="padding:0;  padding-left:10px; margin:0">
                        <div class="mdl-cell mdl-cell--12-col" style="color:#000000;padding-top:20px;font-size:25px;font-weight: 300;line-height:30px;">Hallás utáni szövegértés mini leckék</div>
                        <div class="mdl-cell mdl-cell--12-col" style="padding-top:20px;">
                            <span>try .,...</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col" style="padding-top:20px;">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect imprevo-default" onclick="location.href = '/sales/course/11'">
								try ....
							</button>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col" style="padding:0; margin:0">
                        <img src="/images/dashboard_ad_image2.png" border="0" alt="">
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>

<script type="text/javascript">


</script>

@endsection
