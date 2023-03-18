<!DOCTYPE html>
<html>

<head>
	<title>water location</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<style>
	html,
	body {
		height: 100%;
		margin-top: 35px;
		padding: 0;
		overflow: hidden;
		background-color: rgb(206, 200, 200);
	}

	#map {
		height: 570px;
		margin-left: 10px;
	}

	.container nav {
		position: relative;
		width: 100%;
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
</style>

<body>

	<div class="container">
		<nav style="width:1100px">
			<div class="content">
				<div class="logo"><a href="../map.php">MAJI_SAFI</a></div>
				<ul class="links">
					<li><a href="../markers/user-map.php">Map_source</a></li>
					<li><a href="../water-center.php">Water_Centers</a></li>
					<li><a href="../treatment.php">Treatment</a></li>
					<li><a href="../services.php">Other_Services</a></li>
				</ul>

			</div>
		</nav>
		<section class="main">

		</section>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>