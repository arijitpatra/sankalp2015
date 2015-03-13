<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="logotitle.png">
	<!-- <link rel="stylesheet" href="css/landing.css"> -->
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	
	<style type="text/css">

		html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}

		html,body 
		{
			height: 100%;
			width: 100%;
			min-width: 1000px;
			min-height: 100%;

		}




		html {
			background-image: url('sample.jpg');
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		body {
			background-color: rgba(44,62,80 , 0.6 );
			background-image: url('pattern.png');
			background-position: center;
			background-repeat: repeat;
			font-family: 'Josefin Slab','segoe ui light', 'Open sans', sans-serif;
		}
		.countdown-container {
			position: relative;
			top: 60%;
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			transform: translateY(-50%);
		}
		.clock-item .inner {
			height: 0px;
			padding-bottom: 100%;
			position: relative;
			width: 100%;
		}
		.clock-canvas {
			background-color: rgba(255, 255, 255, .1);
			border-radius: 50%;
			height: 0px;
			padding-bottom: 100%;
		}
		.text {
			color: #AB9;
			font-size: 30px;
			font-weight: bold;
			margin-top: -50px;
			position: absolute;
			top: 50%;
			text-align: center;
			text-shadow: 1px 1px 1px rgba(0, 0, 0, 0);
			width: 100%;
		}
		.text .val {
			font-size: 50px;
		}
		.text .type-time {
			font-size: 20px;
		}
		@media (min-width: 768px) and (max-width: 991px) {
			.clock-item {
				margin-bottom: 30px;
			}
		}
		@media (max-width: 767px) {
			.clock-item {
				margin: 0px 30px 30px 30px;
			}
		}






		.circle 
		{
			border-radius: 50%;
		}

		#slide-container
		{
			display: table;
			width: 100%;
			min-height: 400px;
			height: 600px;
			position: relative;
			background: url('home1.jpg') center;
			background-size: cover;
		}

		#pic-container
		{
			display: table-cell;
			vertical-align: middle;
			position: relative;
			height: 100%;
			width: 100%;
		}

		#big-logo
		{
			display: inline-block;
			width: 400px;
			height: 400px;
			position: absolute;
			z-index: 15;
			top: 15%;
			left: 35%;
			background: url("bigLogo.png") center no-repeat;
		}

		#splash-canvas{
			width: 700px;
			height: 700px;
			position: absolute;
			z-index: 14;
			top: -5%;
			left: 22.5%;
		}

		.picture-item
		{
			position: absolute;
			width: 100%;
			height: 100%;
			background-color: yellow;
			z-index: 1;
			top: 0;
		}

		#nav-bar
		{
			width: 100%;
			background-color: #28ae7f;
			height: 100px;
			position: relative;
			transition: all 0.2s;
			padding-top: 13px;
			z-index: 999;
		}

		.nav-fixed{
			position: fixed !important;
			top: 0;
			left: 0;
			right: 0;
			height: 85px !important;
			padding-top: 3px !important;
			z-index: 999999999;
			box-shadow: 0px 0px 5px 0px #000;
		}

		#logo-container
		{
			position: absolute;
			height: 52px;
			width: 200px;
			top:27%;
			left: 3%;
		}

		#button-container
		{
			float: right;
			margin-right:0px;
			padding: 15px 20px;
			border:1px solid white;
			background-color:#28ae7f;
			color:white;
			font-family: 'segoe ui light', 'Open sans', sans-serif;
			transition: all 0.5s;
			cursor: pointer;
		}

		.nav-fixed #button-container{
			margin-right:15px;
		}


		#menu-icon
		{
			font-size: 22px;
			background-color:#28ae7f;
			color:white;
			float: right;
			display: none;
			border: 1px solid white;
			padding: 10px;
			cursor: pointer;
		}

		.nav-fixed #menu-icon{
			display: inline-block !important;
		}


		#about-us
		{

			line-height: 1.4em;
			font-family: 'Open Sans', sans-serif;
			font-size: 1.25em;
			color: #666;
			top: 15%;
			left: 15%;
			background: url("about.png") left center no-repeat;
			width: 100%;
			min-height: 250px;
			height: 250px;
			display: table;
		}

		#about-us p
		{
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			padding-left: 200px;
			width: 100%;
		}

		#countdown
		{
			height: 850px;
			background-position: center;
			background-size: cover;
			background: url("circuit.png");
			border-width: 100%;
			position: relative;

		}

		.wrapper
		{
			padding: 16px;
			position: relative;
			margin: 0 auto;
			max-width: 1000px;
			min-width: 1000px;
			width: 1000px;
		}


		#page-nav
		{
			height: 125px;
			width: 100%;
			position: relative;
			text-align: center;
		}

		.navs
		{
			padding-top: 25px;
			padding-bottom: 25px;
			border-style: solid;
			border-width: 1px;
			border-color: white;
			background-color: #28ae7f;
			color: white;
			font-family: 'segoe ui light', 'Open sans', sans-serif;
			font-size: 0.75em;
			margin-top: 50px;
			margin-left: 10px;
			margin-right: 10px;
			margin-bottom: 50px;
			display: inline-block;
			cursor: pointer;
			width: 135px;
			text-align: center;
		}

		#sponsor-head
		{
			height: 135px;
			width:100%;
			background-color: #0D5959;
			color: white;
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			font-size: 35px;
			padding-top: 35px;

		}


		#footer
		{
			width: 100%;
			background-color: #17211B;
			height: 200px;
			position: relative;
		}

		#nitmas-container
		{
			position: absolute;
			bottom: 3%;
			width: 100%;
			left: 0;
			right: 0;
			text-align: center;
		}

		#date
		{
			position: absolute;
			width: 500px;
			top: 125px;
			left: 31%;
			text-align: center;

		}

		#map-head
		{
			height: 135px;
			width:100%;
			background-color: #0D5959;
			color: white;
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			font-size: 35px;
			padding-top: 35px;

		}

		.space
		{
			height: 200px;
		}

		#map-container
		{

			width: 100%;
		}

		#team-head
		{
			height: 135px;
			width:100%;
			background-color: #0D5959;
			color: white;
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			font-size: 35px;
			padding-top: 35px;

		}

		.member
		{

			margin: 50px 25px;
			top: 10%;
			display: inline-block;
			min-height: 200px;
			height: auto;

		}


		.member-pic
		{
			border-radius: 50%;
			width: 150px;
			height: 150px;
			border: 2px solid #25383C;
			box-shadow: 0px 0px 5px 0px #000;
			transition: all 0.5s;

		}

		.member:hover .member-pic
		{
			box-shadow: 0px 0px 12px 0px #28ae7f;
		}


		.member-info
		{
			width: 100%;
			height: 50px;
			margin-top: 20px;
			text-align: center;
			font-size: 12px;
			font-family: 'Roboto Slab', serif;
			color: #0D5959;
			line-height: 15px;

		}


		#team
		{
			height: auto;
			width: 100%;
			text-align: center;
		}


		#accomodation-head
		{
			height: 135px;
			width:100%;
			background-color: #0D5959;
			color: white;
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			font-size: 35px;
			padding-top: 35px;

		}


		#workshop-head
		{
			height: 135px;
			width:100%;
			background-color: #0D5959;
			color: white;
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			font-size: 35px;
			padding-top: 35px;
		}

		#foot-text
		{
			top: 35%;
			padding-left: 5%;
			color: white;
			font-family: 'Open Sans', serif;
			position: absolute;
		}


		#made
		{
			bottom: 10%;
			padding-left: 45%;
			color: white;
			font-family: 'Open Sans', serif;
			position: absolute;	
		}


		#social-links
		{
			top: 35%;
			padding-left: 75%;
			color: white;
			font-family: 'Open Sans', serif;
			position: absolute;
		}

		#pattern
		{
			width: 100%;
			position: absolute;
			background: url("bcity.png");
			background-repeat: repeat-x;
			top: -50px;
			height: 50px;
		}


		.shades{
			position: absolute;
			width: 100%;
			height: 100%;
			left: 0px;
			right: 0px;
			top: 0px;
			bottom: 0px;
			z-index: 11;
			background: url('pattern.png') repeat;
			opacity: 0.8;
		}

	</style>

</head>

<title>Sankalp 2015 | The annual techno-management fest of NITMAS</title>

<body onkeydown="moveDown('#countdown')">

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


	<span style="display:none">
		<div itemscope itemtype="http://schema.org/EducationEvent">
			<a itemprop="url" href="http://snklp.in"><div itemprop="name"><strong>Sankalp</strong></div>
			</a>
			<div itemprop="description">Welcome to the extravaganza of Sankalp 2014, the annual techno-management fest of Neotia Institute of Technology Management and Science.                         NITMAS is a part of Bengal Ambuja group. The students of NITMAS thus take the oath ‘SANKALP’ to connect all students of different colleges to fight technically with each other.</div>
			<div><meta itemprop="startDate" content="2015-03-28T09:00">Starts: 03/28/2015 09:00AM</div>
			<meta itemprop="endDate" content="2015-03-29:00.000">Ends: 2015-03-29:00.000
			<meta itemprop="duration" content="0000-00-00T08:00">Duration: 08:00
		</div>
		<div itemprop="location" itemscope itemtype="http://schema.org/PostalAddress">
			<div itemprop="streetAddress">NITMAS Campus, Jhinga, Diamond Harbour Road, South 24 Parganas</div>
			<div>P.O. Box: <span itemprop="postOfficeBoxNumber">Amira</div>
			<div><span itemprop="addressLocality">Kolkata</span>, <span itemprop="addressRegion">West Bengal</span></div><div itemprop="postalCode">743368</div>
			<div itemprop="addressCountry">India</div>
		</div>
	</span>


	<div id="slide-container">
		<div id="big-logo" class="circle"></div>
		<canvas id="splash-canvas"></canvas>
		<span class="shades"></span>
	</div>

	<div id="nav-bar">
		<div class="wrapper">
			<div id="logo-container">
				<img src="sankalp2.png" width="200px">
			</div>

			<div id="menu-icon" onclick="scrollTo('#menus')"><span class="glyphicon glyphicon-list"></span></div>
			<a href="#" style="text-decoration:none" onclick="alert('Registrations to be opened soon.')"><div id="button-container">
				REGISTER
			</div></a>
			
		</div>	
	</div>

	<div id="countdown">
		<div class="countdown-container container">  <!--beginning of coutdown-->
			<div class="clock row">

				<!-- days --> 
				<div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
					<div class="wrap">
						<div class="inner">
							<div id="canvas_days" class="clock-canvas"></div>
							<div class="text">
								<p class="val">0</p>
								<p class="type-days type-time"><br>D A Y S</p>
							</div>
						</div>
					</div>
				</div>

				<!-- hours --> 

				<div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
					<div class="wrap">
						<div class="inner">
							<div id="canvas_hours" class="clock-canvas"></div>
							<div class="text">
								<p class="val">0</p>
								<p class="type-hours type-time"><br>H O U R S</p>
							</div> 
						</div>
					</div>
				</div>

				<!-- minutes --> 
				<div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
					<div class="wrap">
						<div class="inner">
							<div id="canvas_minutes" class="clock-canvas"></div>
							<div class="text">
								<p class="val">0</p>
								<p class="type-minutes type-time"><br>M I N U T E S</p>
							</div>
						</div>
					</div>
				</div>

				<!-- seconds --> 
				<div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
					<div class="wrap">
						<div class="inner">
							<div id="canvas_seconds" class="clock-canvas"></div>
							<div class="text">
								<p class="val">0</p>
								<p class="type-seconds type-time"><br>S E C O N D S</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div> <!--end of coutdown-->

		<div id="nitmas-container"><img src="nitmas.png" height="85px"></div>

		<div id="date"><span style="font-family:'segoe ui light', 'Open sans', sans-serif;font-size:35px;color:#AB9">march</span><br><span style="font-family:'segoe ui light', 'Open sans', sans-serif;font-size:75px;color:#AB9">28<span style="font-family:'segoe ui light', 'Open sans', sans-serif;font-size:30px;color:#AB9">th</span> <span style="font-family:'Bitter',serif;font-size:30px;color:#AB9">&</span> 29<span style="font-family:'segoe ui light', 'Open sans', sans-serif;font-size:30px;color:#AB9">th</span></span><br><span style="font-family:'segoe ui light', 'Open sans', sans-serif;font-size:25px;color:#AB9">2015</span></div>

	</div>

	

	<div id="content">
		<div class="wrapper">
			
			<div id="page-nav">
				<p id="menus">
					<a class="navs" href="#" style="text-decoration:none;color:white" onclick="alert('Coming Soon')">EVENTS</a>
					<a class="navs" href="#" style="text-decoration:none;color:white" onclick="alert('Coming Soon')">SCHEDULE</a>				
					<a class="navs" href="#" style="text-decoration:none;color:white" onclick="scrollTo('#sponsor-head')">SPONSORS</a>
					<a class="navs" href="#" style="text-decoration:none;color:white" onclick="scrollTo('#team-head')">TEAM SANKALP</a>
					<a class="navs" href="#" style="text-decoration:none;color:white" onclick="scrollTo('#map-head')">LOCATION</a>
					<a class="navs" href="#" style="text-decoration:none;color:white" onclick="alert('Coming Soon')">GALLERY</a>
				</p>
			</div><hr>


			<div id="about-div">
				<div id="about-us">
					<p> Welcome to the extravaganza of Sankalp 2014, the annual techno-management fest of Neotia Institute of Technology Management and Science.
						NITMAS is a part of Bengal Ambuja group. The students of NITMAS thus take the oath ‘SANKALP’ to connect all students of different colleges to fight technically with each other.</p>

					</div><hr>
				</div>


			</div>





			<div id="sponsor-head"><p>Sponsors<br><span style="font-size:15px">"thank you,we owe a lot to you"</span></p></div>
			<div class="wrapper">
				<div id="sponsor"><p style="font-family:'Open Sans', serif;font-size:25px;color:#0D5959;text-align:center;margin-top: 16%;padding-left: 0%;position:relative">To be updated soon.</div>

			</div>	

			<div class="space"></div>



			<div id="map-head"><p>Location<br><span style="font-size:15px">"know how to reach our campus"</span></p></div>


			<div id="map-container"> 
				<iframe src="https://mapsengine.google.com/map/embed?mid=zEGRKk_enwVY.kpKuZVFH5jhM" width="100%" height="500"></iframe><br>
				<p><address style="font-family:'Open Sans', serif;font-size:25px;color:#0D5959;text-align:center;padding-top: 5%;padding-left: 0%;line-height:30px">NITMAS Campus,<br>Jhinga, Diamond Harbour Road, P.O. Amira, South 24 Parganas,<br>West Bengal 743368,India</address></p>
			</div>

			<div class="space"></div>


			<div id="team-head"><p>Team Sankalp<br><span style="font-size:15px">"meet the wizards"</span></p></div>

			<div id="team">

				<p>
					<div class="member">
						<img class="member-pic" src="sh.jpg">
						<div class="member-info"><p><h3>Prof. Suman Halder</h3>Technical Advisor</p></div>
					</div>
				</p>

				<br>

				<!--4th Yr-->
				<p>

					<div class="member">
						<img class="member-pic" src="adhiraj.jpg">
						<div class="member-info"><p><h3>Adhiraj Sharma</h3>ECE,4th Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="akshay.jpg">
						<div class="member-info"><p><h3>Akshay Kumar</h3>CSE,4th Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="rohit.jpg">
						<div class="member-info"><p><h3>Rohit Rai</h3>CSE,4th Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="tanay.jpg">
						<div class="member-info"><p><h3>Tanay Kumar Bera</h3>CSE,4th Yr</p></div>
					</div>		

					<div class="member">
						<img class="member-pic" src="vikash.jpg">
						<div class="member-info"><p><h3>Vikash Bhakta</h3>CSE,4th Yr</p></div>
					</div>

				</p>
				<!--end 4th yr-->

				<br>

				<!--3rd Yr-->
				<p>

					<div class="member">
						<img class="member-pic" src="sid.jpg">
						<div class="member-info"><p><h3>Siddhant Jaiswal</h3>EEE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="arijit.jpg">
						<div class="member-info"><p><h3>Arijit Patra</h3>CSE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="niraj.jpg">
						<div class="member-info"><p><h3>Niraj Raj</h3>EEE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="shaunak.jpg">
						<div class="member-info"><p><h3>Shaunak Bhattacharya</h3>ECE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="prashant.jpg">
						<div class="member-info"><p><h3>Prashant Sharma</h3>ECE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="raunak.jpg">
						<div class="member-info"><p><h3>Raunak Shastri</h3>ECE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="ankita.jpg">
						<div class="member-info"><p><h3>Ankita Gupta</h3>CSE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="puja.jpg">
						<div class="member-info"><p><h3>Puja Kumari</h3>IT,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="priya.jpg">
						<div class="member-info"><p><h3>Priya Singh</h3>CSE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="neha.jpg">
						<div class="member-info"><p><h3>Neha Kumari</h3>CSE,3rd Yr</p></div>
					</div>

					<div class="member">
						<img class="member-pic" src="sonu.jpg">
						<div class="member-info"><p><h3>Sonu Priya Singh</h3>ECE,3rd Yr</p></div>
					</div>

				</p>
				<!--end 3rd yr-->

				<br>


			</div>
		</div>

		<div style="text-align:center"><div class="fb-like-box" data-href="https://www.facebook.com/sankalp.nitmas" data-width="1100" data-height="286" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div></div>

		<div class="space"></div>


	</div>

	<div id="footer">
		<div id="pattern">.</div>
		<div id="foot-text"><p><span style="font-size:25px">see you at</span><br><span style="font-size:45px">Sankalp '15 :)</span></p></div>
		<div id="social-links">
			<span style="font-size:12px;margin-bottom: -12px;display: block;top: -9px;position: relative;">Hola! Find us on social media: </span><a href="https://www.facebook.com/sankalp.nitmas" target="_blank"><img src="fb.png" width="50px" style="top: -30px;right: -160px;position: relative;"></a>
			
			<br>
			<p style="margin-top: -30px;">
				<span class="glyphicon glyphicon-earphone" ></span>&nbsp<span style="font-size:12px;"><a href="tel:+919836362471" style="text-decoration:none;color:white">9836362471</a> / <a href="tel:+919748798145" style="text-decoration:none;color:white">9748798145</a></span><br><br>
				<span class="glyphicon glyphicon-envelope"></span>&nbsp<a style="font-size:12px;text-decoration:none;color:white" href="mailto:info@snklp.in?Subject=Web%20Enquiry">info@snklp.in</a><br>
			</p>
		</div>
		<br>
		<br>
		<div id="made">
			<span style="font-family: 'Open Sans',serif;font-size:12px">Crafted with <span class="glyphicon glyphicon-heart" style="color:red"></span> at <a href="http://www.nitmas.edu.in" target="_blank" style="text-decoration:none"><span style="color:orange">NITMAS</span></a></span>
		</div>

	</div>





	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
	<script type="text/javascript" src="kinetic.js"></script> 
	<script type="text/javascript" src="jquery.final-countdown.js"></script> 
	<script type="text/javascript" src="snklpSplash.js"></script> 

	<script type="text/javascript">
		function scrollTo(target)
		{
			$('html,body').animate({
				scrollTop: parseInt($(target).offset().top) - 85
			});
		}
	</script>

	<script type="text/javascript">

		timestamp=function(x){ return new Date(x).getTime() / 1000;}

		$(document).ready(function() {
			$('.countdown').final_countdown({
				start: timestamp('11 March 2015 09:00'),
				end:  timestamp('28 March 2015 09:00'),
				now: Date.now()/1000,


				selectors: {
					value_seconds: '.clock-seconds .val',
					canvas_seconds: 'canvas_seconds',
					value_minutes: '.clock-minutes .val',
					canvas_minutes: 'canvas_minutes',
					value_hours: '.clock-hours .val',
					canvas_hours: 'canvas_hours',
					value_days: '.clock-days .val',
					canvas_days: 'canvas_days'
				},
				seconds: {
					borderColor: '#1444CD',
					borderWidth: '3'
				},
				minutes: {
					borderColor: '#6BDA3A',
					borderWidth: '3'
				},
				hours: {
					borderColor: '#F4FD00',
					borderWidth: '3'
				},
				days: {
					borderColor: '#FEA202',
					borderWidth: '3'
				}}, function() {
// Finish callback
});
		});

		navHeight = 100;
		winHeight = $(window).innerHeight();
		scrolled = false;
		fixed = false;

		function setSliderHeight(){
			winHeight = $(window).innerHeight();
			scrollOfset = winHeight - navHeight;
			$('#slide-container').innerHeight(scrollOfset);
		}

		setSliderHeight();

		$(window).on('resize',function(){
			setSliderHeight();
		});

		$(window).on('scroll',function(){
			scrolled = true;
		});

		setInterval(function (){ console.log('qqq');
			if(scrolled){
				if($(window).scrollTop() > scrollOfset){
					if(!fixed){
						$('#nav-bar').addClass('nav-fixed');
						fixed = true;
					}			
				}
				else{
					if(fixed){
						$('#nav-bar').removeClass('nav-fixed');
						fixed = false;
					}			
				} 
				scrolled = false;
			}	
		},100);



		var booleanValue = true;

		function moveDown(target) {
				if(booleanValue == true)
				{
			    	$('html,body').animate({
					scrollTop: parseInt($(target).offset().top) - 85
					});
					booleanValue = false;
				}
				
			}

	</script>


	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-59413815-1', 'auto');
		ga('send', 'pageview');

	</script>







</body>

</html>

