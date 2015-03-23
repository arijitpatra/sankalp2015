<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="logotitle.png">

	<link href='css/events.css' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style type="text/css">
		#response
		{
			height: 400px;
			text-align: center;
			font-family: 'Open-Sans',Segoe UI light,serif;
			text-align: center;
			font-size: 25px;
		}
		#gallery-container {
			padding: 10px 10px;
			border: 1px solid #28ae7f;
			color: #28ae7f;
			font-family: 'segoe ui light', 'Open sans', sans-serif;
			transition: all 0.5s;
			cursor: pointer;
			width: 125px;
			border-radius: 10px 10px 10px 10px;
			font-size: 20px;
			display: inline-block;
		}
	</style>

</head>

<title>Sankalp 2015 | Registration</title>

<body>

	<div id="nav-bar">
		<div class="wrapper">
			<a href="http://www.snklp.in" style="text-decoration:none"><div id="logo-container">
				<img src="sankalp2.png" width="200px">
			</div></a>

			<a href="events" style="text-decoration:none"><div id="button-container">
				EVENTS
			</div></a>
		</div>	
	</div>

	<br><br><br><br><br><br><br><br>
	<?php
	/*$servername = "localhost";
	$username = "root";
    //$password = "password";
	$dbname = "sankalp15";




	$conn = mysqli_connect($servername, $username, "", $dbname);*/

	$servername = "mysql.hostinger.in";
	$username = "u333111651_snklp";
	$password = "sankalp2015";
	$dbname = "u333111651_snklp";




	$conn = mysqli_connect($servername, $username, $password, $dbname);


	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	$name=mysqli_real_escape_string($conn, $_POST['nme']);
	$institute=mysqli_real_escape_string($conn, $_POST['clg']);
	$mobile=mysqli_real_escape_string($conn, $_POST['cnt']);
	$email=mysqli_real_escape_string($conn, $_POST['eml']);
	$hometown=mysqli_real_escape_string($conn, $_POST['htw']);


	$bridge="N";
	$explo="N";
	$box="N";
	$rob="N";
	$algo="N";
	$mom="N";
	$junk="N";
	$quiz="N";
	$nfs="N";
	$fifa="N";
	$cs="N";
	$ckt="N";

	if(isset($_POST['byg'])){
		$bridge=mysqli_real_escape_string($conn, $_POST['byg']);
	}
	if(isset($_POST['roe'])){
		$explo=mysqli_real_escape_string($conn, $_POST['roe']);
	}
	if(isset($_POST['rbx'])){
		$box=mysqli_real_escape_string($conn, $_POST['rbx']);
	}
	if(isset($_POST['rbl'])){
		$rob=mysqli_real_escape_string($conn, $_POST['rbl']);
	}
	if(isset($_POST['agk'])){
		$algo=mysqli_real_escape_string($conn, $_POST['agk']);
	}
	if(isset($_POST['mtk'])){
		$mom=mysqli_real_escape_string($conn, $_POST['mtk']);
	}
	if(isset($_POST['jyd'])){
		$junk=mysqli_real_escape_string($conn, $_POST['jyd']);
	}
	if(isset($_POST['quz'])){
		$quiz=mysqli_real_escape_string($conn, $_POST['quz']);
	}
	if(isset($_POST['nfs'])){
		$nfs=mysqli_real_escape_string($conn, $_POST['nfs']);
	}
	if(isset($_POST['ffa'])){
		$fifa=mysqli_real_escape_string($conn, $_POST['ffa']);
	}
	if(isset($_POST['cts'])){
		$cs=mysqli_real_escape_string($conn, $_POST['cts']);
	}
	if(isset($_POST['ctx'])){
		$ckt=mysqli_real_escape_string($conn, $_POST['ctx']);
	}



	$flag=FALSE;
	$msg=NULL;

	if(!preg_match("/^[A-Za-z. ]*$/",$name))
	{
		$flag=FALSE;
		$msg="We didn't find your name valid! Try Again.";
	}
	else if(!preg_match("/^[A-Za-z.& ]*$/",$institute))
	{
		$flag=FALSE;
		$msg="We didn't find your institute valid! Try Again.";
	}
	else if(!preg_match("/^0?\d{10}$/",$mobile))
	{
		$flag=FALSE;
		$msg="We didn't find your mobile number valid! Try Again.";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$flag=FALSE;
		$msg="We didn't find your email valid! Try Again.";
	}
	else if(!preg_match("/^[A-Za-z. ]*$/",$hometown))
	{
		$flag=FALSE;
		$msg="We didn't find your hometown valid! Try Again.";
	}
	else
	{
		$flag=TRUE;
	}


	if($flag)
	{
		$sql = "INSERT INTO reg (Name, Institute, Mobile, Email, Hometown, Bridge_Your_Gap, Robo_Exploder, RoBoxing, RoBall, Code_Clash, Momentika, Junkyard, Quiz, Circuitrix, NFS, FIFA, CS) VALUES ('$name','$institute','$mobile','$email','$hometown','$bridge','$explo','$box','$rob','$algo','$mom','$junk','$quiz','$ckt','$nfs','$fifa','$cs')";
		
	   
	}



	if ($flag && mysqli_query($conn, $sql)) {
		echo '<div id="response">Thank You for registering! See you at Sankalp 2015.<br>Registration ID: SNKLP0'. mysqli_insert_id($conn). '<br><br><br>Got some time?<br>Visit the Sankalp <a id="gallery-container" href="gallery" style="text-decoration:none;">Gallery</a></div>'; 
	
		$to = $email;
	   $subject = "Registration Successful | Sankalp 2015";
	   $message = "Hi ".$name.",\r\n\r\nYou have been successfully registered for Sankalp 2015. Please note the registration ID: SNKLP0".mysqli_insert_id($conn).".\r\n\r\nMarch 28th & 29th, 2015\r\nNeotia Institute of Technology Management And Science\r\n\r\nFor any further queries, shoot us an email at info@snklp.in or dial 9748798145. \r\nSee you in Sankalp 2015. \r\n\r\nThanks,\r\nTeam Sankalp\r\nwww.snklp.in";
	   $header = "From:info@snklp.in \r\n";
	   $retval = mail ($to,$subject,$message,$header);
	} 
	else {
		echo '<div id="response">'.$msg.'<br><br><br>Got some time?<br>Visit the Sankalp <a id="gallery-container" href="gallery" style="text-decoration:none;">Gallery</a></div>'; 
	}


	mysqli_close($conn);
	?>



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

</body>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-59413815-1', 'auto');
	ga('send', 'pageview');

</script>
</html>