<!DOCTYPE html>
<html lang="en">
<head>
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
			<a href="landing.html" style="text-decoration:none"><div id="logo-container">
				<img src="sankalp2.png" width="200px">
			</div></a>

			<a href="events.html" style="text-decoration:none"><div id="button-container">
				EVENTS
 			</div></a>
		</div>	
</div>

<br><br><br><br><br><br><br><br>
<?php
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "sankalp15";




$conn = mysqli_connect($servername, $username, "", $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=mysqli_real_escape_string($conn, $_POST['nme']);
$institute=mysqli_real_escape_string($conn, $_POST['clg']);
$mobile=mysqli_real_escape_string($conn, $_POST['cnt']);
$email=mysqli_real_escape_string($conn, $_POST['eml']);
$hometown=mysqli_real_escape_string($conn, $_POST['htw']);



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
	$sql = "INSERT INTO reg (Name, Institute, Mobile, Email, Hometown ) VALUES ('$name','$institute','$mobile','$email','$hometown')";
}



if ($flag && mysqli_query($conn, $sql)) {
    echo '<div id="response">Thank You for registering! Your ID SNKLP00'. mysqli_insert_id($conn). '. See you at Sankalp 2015.<br><br><br>Got some time?<br>Visit the Sankalp <a id="gallery-container" href="gallery.html" style="text-decoration:none;">Gallery</a></div>'; 
} 
else {
     echo '<div id="response">'.$msg.'<br><br><br>Got some time?<br>Visit the Sankalp <a id="gallery-container" href="gallery.html" style="text-decoration:none;">Gallery</a></div>'; 
}


mysqli_close($conn);
?>



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