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

	h2 {
		text-align: center;
		color: #459bcd;
		letter-spacing: 20px;
		line-height: 2;
	}

	.image {
		border: 1px dotted #459bcd;
		border-radius: 30px;
		width: 200px;
		height: 300px;
		margin: 20px;
	}
	.image:hover {
		border: 2px dotted red;
		
	}

	img {
		width: 200px;
		height: 150px;
		border-radius: 30px;
	}

	h5 {
		font-size: 20px;
		color: #459bcd;
		margin-top: 0px;
		text-align: center;
		line-height: 1;
	}

	p {
		margin-top: -20px;
		font-size: 16px;
		color: white;
		margin-left: 2px;
	}

	.btn {
		width: 100px;
		font-size: 15px;
		height: 30px;
		color: white;
		font-weight: bold;
		background: green;
		border: 2px solid green;
		border-radius: 30px;
		margin-left: 40px;
	}
	.btn:hover {
		background: red;
		font-size: 16px;
		border: 2px solid red;
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
				<img src="images/guard.png" />
				<h5>WaterGuard</h5>
				<p>Use Waterguard to treat your drinking water</p>
				<button class="btn" style="margin-top:20px">Buy</button>
			</div>

			<div class="image">
				<img src="images/truck.png" />
				<h5>Water Buzzer</h5>
				<p>We deliver clean water to your door step</p>
				<button class="btn" style="margin-top:20px">Call now</button>
			</div>

			<div class="image">
				<img src="images/tank.png" />
				<h5>Water Tanks</h5>
				<p>When its raining store roof water to be used later.</p>
				<button class="btn" style="margin-top:20px">Buy</button>
			</div>

			<div class="image">
				<img src="images/driller.jpg" />
				<h5>Borehole Drilling</h5>
				<p>To sustain water availability. Drill underground water for use by the community. </p>
				<button class="btn">Call now</button>
			</div>
		</section>
	</div>

</body>
<!--api_key=AIzaSyCokvONe6YunLElrqWDWWTE8GIMPlUlHek-->