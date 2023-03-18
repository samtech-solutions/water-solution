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

</style>

<body onload="getLocation();">

	<div class="container">
		<nav>
			<div class="content">
				<div class="logo"><a href="map.php">MAJI_SAFI</a></div>
				<ul class="links">
					<li><a href="markers/user-map.php">Map_source</a></li>
					<li><a href="markers/user-map.php">Water_Centers</a></li>
					<li><a href="treatment.php">Treatment</a></li>
					<li><a href="services.php">Other_Services</a></li>
				</ul>
				<div class="user"> Welcome back: <?php echo $user; ?></div>
			</div>
		</nav>
		<section class="main">
			<div class="aside">

				<p>Fresh and clean water is a basic need for all.</p>

				<p>Help us identify any source of fresh water.</p>

				<p>Go to <a href="markers/user-map.php">Map source</a> and pin the
					location by giving that area a suitable Name that other people will
					easily access the source by .</p>
				<p>Our sources will be identifies by this icon "Red icon".</p>
				<div class="image"><img src="images/bigred.png" /></div>
			</div>
			<div class="map">
				<?php
				require 'db.php';

				$rows = mysqli_query($connection, "SELECT * FROM users WHERE email ='$user'");

				foreach ($rows as $row) :
				?>

					<iframe src="https://maps.google.com/maps?q=<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>&hl=es;z=14&output=embed"></iframe>

				<?php endforeach; ?>
			</div>
		</section>
	</div>

</body>
<!--api_key=AIzaSyCokvONe6YunLElrqWDWWTE8GIMPlUlHek-->