<!DOCTYPE html>
<html lang="en">
<head>
	<link href='css/events.css' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

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


	<?php
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "sankalp15";


$conn = mysqli_connect($servername, $username, "", $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO reg (Name, Institute, Mobile, Email, Hometown ) VALUES ('$_POST[nme]','$_POST[clg]','$_POST[cnt]','$_POST[eml]','$_POST[htw]')";



if (mysqli_query($conn, $sql)) {
    echo "Thank You for registering! See you at Sankalp 2015."; 
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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

