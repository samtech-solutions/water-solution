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
 img {
        width: 400px;
        height: 500px;
        background:black;
    }

    .image {
        margin-left: 0;
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
		<section class="main">
			<div class="aside">
				<div class="image"><img src="images/tap.png" /></div>
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