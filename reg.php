<!DOCTYPE html>
<html lang="en">
<head>
	<link href='css/events.css' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<style>

.box
{
	width: 500px;
	height: 50px;
	-webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px;
	-moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px;
	border-radius: 0px 10px 4px 0px/10px 5px 4px 4px;
	background-color: #fff;
	-webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
	-moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
	box-shadow: 1px 2px 5px rgba(0,0,0,.09);
	border: solid 1px #cbc9c9;
	margin-left: -5px;
	margin-top: 13px;
	padding-left: 10px;
}


.box2
{
	padding: 0.355em 0.9em;
	font-size: 1.1em;
	font-weight: 300;
	border: none;
	-moz-box-shadow: 0px 0px 3px 0px #ccc;
	-webkit-box-shadow: 0px 0px 3px 0px #ccc;
	box-shadow: 0px 0px 3px 0px #ccc;
	margin-left:33%;
	
	border-radius:0px 10px 10px 0px;
	height: 50px;


}


.wrapper
{
	padding: 16px;
	position: relative;
	margin: 0 auto;
	max-width: 1100px;
}



.space
{
	height: 200px;
}

#footer
{
	width: 100%;
	background-color: #17211B;
	height: 200px;
	position: relative;
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

#col1
{
	width: 150px;
	display: inline-block;
	margin-left: 120px;
}


#register-button
{
	border:2px solid #28ae7f;
	background-color: white;
	color: #28ae7f;
	font-size: 20px;
	padding: 25px 50px;
	font-family: 'Open Sans', serif;
	margin-left: 0px;
	cursor: pointer;
	text-align: center;
	display: block;
	margin: 0 auto;
}

.input-areas
{
	border: 1px solid #048d3b;
	color:#191919;
	border-right:5px solid #FF0000;
	font-family: segoe ui light, 'Open Sans', sans-serif;
	outline: none;
}

.input-icn button{
	opacity: 1 !important;
	background-color: #034463 !important;
	color: white !important;
	border: 1px solid #034463 !important;
}
#reg-form{
	width: 800px;
	margin: 0 auto;
}

.input-group{
	margin-top: 10px;
}

</style>
</head>

<title>Sankalp 2015 | Registration</title>

</head>

<body>


        <div id="nav-bar">
		<div class="wrapper">
			<a href="landing.html" style="text-decoration:none"><div id="logo-container">
				<img src="sankalp2.png" width="200px">
			</div></a>

			<a href="events.html" style="text-decoration:none"><div id="button-container">
				EVENTS
 			</div></a>
		</div>	
</div>

<br><br>
					<br>
					<p style="font-family: 'Open Sans', serif;font-size:20px;color:black; text-align: center;"> Hi! Please provide your details:</p>

					<p>
						<br><br>
					<form id="reg-form" method="post" action="regi.php">

					<div class="input-group input-group-lg">
      					<span class="input-group-btn input-icn">
      						  <button class="btn btn-default " type="button" disabled="disabled"><span class="glyphicon glyphicon-user"></span></button>
      					</span>
      					<input type="text" class="form-control input-areas" name="nme" placeholder="Name" required="TRUE" autofocus>
    				</div>

    				<div class="input-group input-group-lg">
      					<span class="input-group-btn input-icn">
      						  <button class="btn btn-default " type="button" disabled="disabled"><span class="glyphicon glyphicon-pencil"></span></button>
      					</span>
      					<input type="text" class="form-control input-areas" name="clg" required="TRUE" placeholder="College/School">
    				</div>
					
    				<div class="input-group input-group-lg">
      					<span class="input-group-btn input-icn">
      						  <button class="btn btn-default " type="button" disabled="disabled"><span class="glyphicon glyphicon-phone"></span></button>
      					</span>
      					<input type="digit" class="form-control input-areas" name="cnt" required="TRUE" placeholder="Mobile">
    				</div>
						
					<div class="input-group input-group-lg">
      					<span class="input-group-btn input-icn">
      						  <button class="btn btn-default " type="button" disabled="disabled"><span class="glyphicon glyphicon-envelope"></span></button>
      					</span>
      					<input type="email" class="form-control input-areas" name="eml" required="TRUE" placeholder="E-mail">
    				</div>
					
					<div class="input-group input-group-lg">
      					<span class="input-group-btn input-icn">
      						  <button class="btn btn-default " type="button" disabled="disabled"><span class="glyphicon glyphicon-map-marker"></span></button>
      					</span>
      					<input type="text" class="form-control input-areas" name="htw" required="TRUE" placeholder="Hometown">
    				</div>				

					<br><br><br>

					</p>

					<p><span style="font-family: 'Open Sans', serif;font-size:20px;color:black"> Choose Events: </span></p>
					
					<div class="row">

						<div class="col-sm-4">
							<p><input type="checkbox" name="byg" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Bridge Your Gap </span></p>
							<p><input type="checkbox" name="roe" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Robo Exploder </span></p>
							<p><input type="checkbox" name="rbx" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> RoBoxing </span></p>
							<!--<p><input type="checkbox" name="fyw" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black">  </span></p>-->
							<p><input type="checkbox" name="rbl" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> RoBall </span></p>
						</div>

						<div class="col-sm-4">
							<p><input type="checkbox" name="agk" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Algo Geeks </span></p>
							<p><input type="checkbox" name="mtk" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Momentika </span></p>
							<!--<p><input type="checkbox" name="gck" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black">  </span></p>
							<p><input type="checkbox" name="fbl" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black">  </span></p>-->
							<p><input type="checkbox" name="jyd" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Junkyard </span></p>
							<p><input type="checkbox" name="quz" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Quiz </span></p>
						</div>

						<div class="col-sm-4">
							
							<p><input type="checkbox" name="nfs" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> NFS </span></p>
							<p><input type="checkbox" name="ffa" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> FIFA </span></p>
							<!--<p><input type="checkbox" name="dta" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black">  </span></p>-->
							<p><input type="checkbox" name="cts" value="Y"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> CS </span></p>
						</div>
						
					</div>
					
					<br><br><br>

					<button id="register-button" type="submit">REGISTER</button>


					<div class="space"></div>


					</form>

		
	
 <div id="footer">
		<div id="pattern">.</div>
		<div id="foot-text"><p><span style="font-size:25px">see you at</span><br><span style="font-size:45px">Sankalp '15 :)</span></p></div>

		<div id="social-links">
			<span style="font-size:12px;margin-bottom: -12px;display: block;top: -9px;position: relative;">Hola find us on social media: </span>
			
			<img src="fb.png" width="50px" style="top: -30px;right: -160px;position: relative;">
			
				<br>
			<p style="margin-top: -30px;">
				<span class="glyphicon glyphicon-earphone" ></span>&nbsp<span style="font-size:12px;">+91 98363 62471</span><br><br>
				<span class="glyphicon glyphicon-envelope"></span>&nbsp<a style="font-size:12px;text-decoration:none;color:white" href="mailto:info@snklp.in?Subject=Web%20Enquiry">info@snklp.in</a><br>
			</p>
		</div>
		<br>
		<br>
		<div id="made">
			<span style="font-family: 'Open Sans',serif;font-size:12px">Crafted with <span class="glyphicon glyphicon-heart" style="color:red"></span> at <a href="http://www.nitmas.edu.in" target="_blank" style="text-decoration:none"><span style="color:orange">NITMAS</span></a></span>
		</div>
	
	</div>

	
</body>
</html>