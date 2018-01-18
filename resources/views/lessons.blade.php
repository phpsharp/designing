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
    <div class="mdl-grid portfolio-max-width" style="min-height:550px;">      
    </div>
</div>

<script type="text/javascript">


</script>

@endsection
