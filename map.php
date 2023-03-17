<?php
session_start();

$user = $_SESSION['user-email'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>user map page</title>
</head>
<style>
	body {
		height: 85%;
		background-color: rgb(206, 200, 200);
	}

	.container {
		position: fixed;
		display: absolute;
		left: 0px;
		top: 0px;

	}

	.container nav {
		position: relative;
		max-width: 100%;
		background: #8a86a1;
		box-shadow: 10px 5px 10px #8a86a1, 3px 2px 5px #c7c7dd;
		margin: 0 10px;
		height: 70px;
		align-items: center;
		justify-content: space-between;
	}

	nav .content {
		display: flex;
		align-items: center;
	}

	nav .content .links {
		margin-left: 10px;
		display: flex;

	}

	.content .logo a {
		color: #400e49;
		font-size: 30px;
		font-weight: 600;
		text-shadow: 10px 5px 10px #dfc7e4, 3px 2px 5px #40ca21;
		text-transform: uppercase;
		text-decoration: none;
		margin-left: 5px;
	}

	.content .links li {
		list-style: none;
		line-height: 40px;

	}

	.content .links li a {
		color: #fff;
		font-size: 18px;
		font-weight: 500;
		padding: 9px 17px;
		border-radius: 5px;
		text-decoration: none;
		transition: all 0.3s ease;
	}

	.content .links li a:hover,
	.content .links li label:hover {
		background: #323c4e;
	}

	.user {
		margin-left: 30px;
		position: relative;
		color: blue;
		text-align: left;
	}

	.main {
		display: flex;
		flex-direction: row;
		justify-content: center;
	}

	.aside {
		width: 40%;
		height: 500px;
		background: #323c4e;
		margin-left: 20px;
		margin-top: 20px;
	}

	.map {
		width: 60%;
		height: 500px;
		margin-top: 20px;
	}

	iframe {
		width: 90%;
		height: 500px;
		border: none;
		margin-left: 30px;
		margin-top: 0px;
		margin-right: 20px;
	}
</style>

<body onload="getLocation();">

	<div class="container">
		<nav>
			<div class="content">
				<div class="logo"><a href="#">MAJI_SAFI</a></div>
				<ul class="links">
					<li><a href="markers/user-map.php">Locate</a></li>
					<li><a href="#">Water_Centers</a></li>
					<li><a href="#">Treatment</a></li>
					<li><a href="#">Other_Services</a></li>
				</ul>
				<div class="user"> Welcome back: <?php echo $user; ?></div>
			</div>
		</nav>
		<section class="main">
			<div class="aside">

				<p>Hello world</p>

				<p>Hello world</p>

				<p>Hello world</p>

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