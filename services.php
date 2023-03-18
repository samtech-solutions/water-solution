<?php
session_start();

$user = $_SESSION['user-email'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>user map page</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	</link>
</head>
<style>
	.main {
		display: flex;
		flex-direction: row;
		justify-content: center;
	}
	.image{
		border:1px solid black;
	}
</style>

<body onload="getLocation();">

	<div class="container">
		<nav>
			<div class="content">
				<div class="logo"><a href="map.php">MAJI_SAFI</a></div>
				<ul class="links">
					<li><a href="markers/user-map.php">Map_source</a></li>
					<li><a href="water-center.php">Water_Centers</a></li>
					<li><a href="treatment.php">Treatment</a></li>
					<li><a href="services.php">Other_Services</a></li>
				</ul>
				<div class="user"> Welcome back: <?php echo $user; ?></div>
			</div>
		</nav>
		<h2>OUR SERVICES</h2>
		<section class="main">

			<div class="image">
				<img src="images/bigred.png" />
			</div>

			<div class="image">
				<img src="images/bigred.png" />
			</div>

			<div class="image">
				<img src="images/bigred.png" />
			</div>

			<div class="image">
				<img src="images/bigred.png" />
			</div>
		</section>
	</div>

</body>
<!--api_key=AIzaSyCokvONe6YunLElrqWDWWTE8GIMPlUlHek-->