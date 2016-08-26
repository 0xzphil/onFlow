<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi"> 
<head>
<title>MAD Hub - Music Animation Douga</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:url" content="http://madhub.me">
<meta property="og:title" content="MAD Hub - Music Animation Douga, Nơi cập nhật và chia sẻ AMV">
<meta property="og:type" content="website">
<meta property="og:image" content="http://madhub.me/img/social_sharing.png">
<meta property="fb:app_id" content="1150786978348749">

<link rel='stylesheet' id='reset-css'  href='{{ URL::asset('css/reset.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='{{ URL::asset('css/superfish.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='{{ URL::asset('css/font-awsome/css/font-awesome.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='{{ URL::asset('css/orbit.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='{{ URL::asset('css/style.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href='{{ URL::asset('css/color/green.css')}}' type='text/css' media='all' />
<link rel="stylesheet" href='{{ URL::asset('css/zerogrid.css')}}' type="text/css" media="screen">
<link rel="stylesheet" href='{{ URL::asset('css/responsive.css')}}' type="text/css" media="screen">
<link rel="icon" type="image/png" href='{{ URL::asset('images/favicon.ico')}}' />

<script type='text/javascript' src='{{ URL::asset('js/jquery.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/jquery-migrate.min.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/jquery-1.10.2.min.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/jquery.carouFredSel-6.2.1-packed.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/hoverIntent.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/superfish.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/orbit.min.js')}}'></script>
<script src='{{ URL::asset('js/css3-mediaqueries.js')}}'></script>

<script type="text/javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
</head>

<body class="home blog">
	<div id="header-nav-container">
            
    <a href='{{ url('index') }}'>
    <img alt='MADhub-logo' src="{{url('themes/model/category.png')}}" id="category" />
    </a>
    
	<!-- Navigation Menu -->
    <div >          
	{{ Form::open(['method'=>'GET',  'url'=> 'index/1', 'class' =>'searchform' ]) }}
	   	
	    {{ Form::label('Search for:', null,  ['for'=> 's', 'class' =>'screen-reader-text']) }}

	    {{ Form::text('search' , null, ['id'=>'s']) }}
	    @if( isset($category) == false || $category!=null)
	        {{ Form::hidden('category', $category)}}
	    @endif
	    <button type="button" onclick="window.location.assign('http://www.w3schools.com')"  id="searchbutton">
	    </button>
	    

	{{ Form::close() }}
	</div>
    <a href="{{ url('index') }}">
	    <img alt='home' src="{{url('images/logo_MAD_mini.png')}}" width="5"  id="home_icon" />
	</a>
    
    <!-- <a href='{{ url('index') }}'>
    	<img alt='MADhub-logo' src="{{url('themes/model/logo.png')}}" id="logo" />
    </a> -->
    
    <a href='{{ url('index') }}'>
    	<img alt='MADhub-logo' src="{{url('img/avatar.png')}}" id="avatar" />
    </a>

    <!-- <a href='{{ url('index') }}'>
	    <img alt='MADhub-logo' src="{{url('themes/model/logo.png')}}" id="logo" />
	</a>
    <a href='{{ url('index') }}'>
	    <img alt='MADhub-logo' src="{{url('themes/model/avatar.png')}}" id="logo" />
	</a> -->
	<!-- @if(!isset($loggedInUser))
		<li class="menu-item"><a href="{{url('auth/login')}}">Log in</a>
		<ul class="sub-menu">
			<li class="menu-item"><a href="{{url('users/freg')}}">Đăng ký bằng facebook</a></li>
			<li class="menu-item"><a href="{{url('users/create')}}">Đăng ký</a></li>
			<!-- <li class="menu-item"><a href="{{url('auth/login')}}">Đăng nhập</a></li> -->
		<!-- </ul>
		</li>
	@else 
		<li class="menu-item"><a href="{{url('auth/logout')}}">Log out</a></li>
	@endif -->
    <!-- End Navigation Menu -->
    
    <div class="clear"></div>
                    
    	</div>
	</div>
</div>	
        	
    </div>
    <!-- Right panel -->
    <div id="hashtag">
    	<ul>
    		<div class="wrapPanel">
    		<li class="currentName"> 
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-home fa-fw" aria-hidden="true"></i></div>
    			Home
    			</a>
    		</li>

    		<li class="name">
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-star fa-fw" aria-hidden="true"></i></div> 
    			Bài viết đã thích
    			<div class="wrapNumber">0</div>
    			</a>
    			
    		</li>
    		
    		<li class="name">
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-bookmark fa-fw" aria-hidden="true"></i></div>Bài viết đã lưu
    			<div class="wrapNumber">0</div>
    			</a>
    		</li>


    		<li class="name">
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i></div>Fanpage facebook
    			<div class="wrapNumber">0</div>
    			</a>
    		</li>

    		<li class="name">
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i></div> Lịch sử
    			<div class="wrapNumber">0</div>
    			</a>
    		</li>

    		<li class="name"> 
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></div> Nhận tin qua email  <!-- Channel -->
    			</a>
    		</li>

    		</div>

    	</ul>

    	<ul>
    	<div class="wrapPanel">
    		<li class="name">
    			<a href="">
    		<div class="wrapIcon"><img src="{{ url('themes/model/img/Wakfu.png')}}" width="20" height="20"></div>
    		Wakfu animation 
    		<div class="wrapNumber">0</div>
    			</a>
    		</li>
    		
    		<li class="name"> 
    			<a href="">
    		<div class="wrapIcon"><img src="{{ url('themes/model/img/Dofus.png')}}" width="20" height="20"></div> 
    		Dofus animation 
    		<div class="wrapNumber">0</div>
    			</a>
    		</li>

    		<li class="name"> 
    			<a href="">

    		<div class="wrapIcon"><img src="{{ url('themes/model/img/WakfuGame.png')}}" width="20" height="20"></div> 
    		Wakfu game
    		<div class="wrapNumber">0</div>
    			</a>
    		</li>

    		<li class="name"> 
    			<a href="">

    		<div class="wrapIcon"><img src="{{ url('themes/model/img/DofusGame.png')}}" width="20" height="20"></div> 
    		Dofus game 
    		<div class="wrapNumber">0</div>
    			</a>
    		</li>


    		<li class="name"> 
    			<a href="">

    		<div class="wrapIcon"><img src="{{ url('themes/model/img/TreeOfSavior.png')}}" width="20" height="20"></div> 
    		Tree of Savior 
    		<div class="wrapNumber">0</div>
    			</a>
    		</li>

    	</div>
    	</ul>
    	<ul>
    	<div class="wrapEndPanel">
    		<li class="name">
    			<a href="">
    			<div class="aweFontWrap">
    				<i class="fa fa-cog"></i>
    			</div>
    			 Cài đặt trang</li>
    			 </a>
    		<li class="name">
    			<a href="">
    			<div class="aweFontWrap"><i class="fa fa-info-circle" aria-hidden="true"></i></div> Liên hệ </li>
    			</a>
    	</div>
    	</ul>

    </div>
    <ul>
    

    <div class="spacing-45"></div>
    <div class="news">

		<div class="wrapimage">
			<img src="{{ url('img/tumblr_5.png') }}" alt="thumblr" height="220">
		</div>
		<div class="title">
			<a href="">Wakfu season I - tập 1 - Đứa con của sương mù - Vietsub bởi Mage Maker team</a>
		</div>
		<div class="listInfo">
			<span class="block"><i class="fa fa-user" aria-hidden="true"></i> Fizz</span>
			<span class="block"><i class="fa fa-comment-o" aria-hidden="true"></i> 10 comments</span>
			<span class="block"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Wakfu</span>
			
		</div>
		<div class="content">
			Grougaloragran, a mysterious and ancient entity, appears one with a baby carriage. After defeating a mysterious foe with powers over time, who wants Grougaloragran's life force, or "Wakfu", Grougaloragran comes across Alibert, who is quitting his profession as a bounty hunter after almost taking a innocent man to jail. 
		</div>

		<div class="actionList">
		<div class="wrap">
			<div id="action"><i class="fa fa-heart" aria-hidden="true"></i></div>
			<div id="share">Like</div>
		</div>
		<div class="wrap">
			<div id="action"><i class="fa fa-coffee" aria-hidden="true"></i></div>
			<div id="share">Watch</div>
		</div>
		<div class="wrap">
			<div id="action"><i class="fa fa-comment" aria-hidden="true"></i></div>
			<div id="share">Comment</div>
		</div>
		<div class="wrap">
			<div id="action"><i class="fa fa-heart" aria-hidden="true"></i></div>
			<div id="share">Save</div>
		</div>
		<div class="wrap">
			<div id="action"><i class="fa fa-share" aria-hidden="true"></i> </div>
			<div id="share">Share</div><!-- 
			<div id="face"><i class="fa fa-facebook" aria-hidden="true"></i></div>
			<div id="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
			<div id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div> -->

		</div>
		</div>
    </div>

    <div class="news"></div>
    <div class="news"></div>
    <div class="news"></div>
    <div class="news"></div>
    <div class="news"></div>
    <div class="news"></div>
    <div class="news"></div>
    <div class="news"></div>

    <div class="news"></div>

    </ul>
    <!-- board -->
    <!-- End Header -->

    @yield('container')
    
    <!-- Start Featured Carousel -->

    <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
        <div class="wrap-col">	
            <!-- Footer Copyright -->
            <p>Open source 2016 MADhub. All Rights Reserved.</p>
            <!-- End Footer Copyright -->
            
            <!-- Footer Logo -->
			<img alt='mad-hub-logo-footer' src='{{URL::asset('images/footer-logo.png')}}' id='footer-logo' />
            <!-- End Footer Logo -->
        
        <div class="clear"></div>
		</div>
        </div>
    </div>
    <!-- End Footer -->


</body>

</html>