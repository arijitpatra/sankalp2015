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


#col2
{
	width: 150px;
	display: inline-block;

}

#col3
{
	width: 150px;
	display: inline-block;
	
}


#register-button
{
	border:1px solid #28ae7f;
	background-color: white;
	color: #28ae7f;
	font-size: 20px;
	padding: 25px 50px;
	font-family: 'Open Sans', serif;
	margin-left: 212px;
	cursor: pointer;
}

.input-areas
{
	border: 1px solid #048d3b;
	color:#191919;
	border-right:5px solid #FF0000;
	font-family: segoe ui light, 'Open Sans', sans-serif;
	outline: none;
}

.input-icn
{
	color: white;
	border: 1px solid #034463;
	background-color: #034463;
	opacity: 1; 
	
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
					<p><span style="font-family: 'Open Sans', serif;font-size:20px;color:black"> Hi! Please provide your details: </span></p>

					<p>
					<form method="post" action="regi.php" style="width:600px;margin-left: 0 auto;text-align:center">

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


					<p><span style="font-family: 'Open Sans', serif;font-size:20px;color:black"> Choose Events: </span></p>

					<div id="col1">
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Robotics </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Coding </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Photography </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Junkyard </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Quiz </span></p>
					</div>

					<div id="col2">
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Robotics </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Coding </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Photography </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Junkyard </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Quiz </span></p>
					</div>

					<div id="col3">
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Robotics </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Coding </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Photography </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Junkyard </span></p>
					<p id="pemail"><input type="checkbox" name="rob" value="Robotics"><span style="font-family: 'Open Sans', serif;font-size:15px;color:black"> Quiz </span></p>
					</div>


					<br><br><br>
					

					<div id="register-button" type="submit">REGISTER</div>

					<div class="space"></div>


					</form>
		</p>
		
	
 <div id="footer">
		<div id="pattern">.</div>
		<div id="foot-text"><p><span style="font-size:25px">see you at</span><br><span style="font-size:45px">Sankalp '15 :)</span></p></div>

		<div id="social-links">
			<span style="font-size:12px;margin-bottom: -12px;display: block;top: -9px;position: relative;">Hola find us on social media: </span>
			
			<img src="fb.png" width="50px" style="top: -30px;right: -160px;position: relative;">
			
				<br>
			<p style="margin-top: -30px;">
				<span class="glyphicon glyphicon-earphone" ></span>&nbsp<span style="font-size:12px;">+91 98765 12345</span><br><br>
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