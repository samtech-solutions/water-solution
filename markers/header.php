<!DOCTYPE html>
<html>
<head>
    <title>water location</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
</head>
<style>

    html, body {
        height: 100%;
        margin-top: 35px;
        padding: 0;
		overflow:hidden;
		background-color:rgb(206, 200, 200);
    }
 
    #map {
        height: 570px;
		margin-left:10px;
    }

	.container {
		position: fixed;
		display: absolute;
		left: 0px;
		top: 0px;
		width:100%;

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

</style>
<body>

<div class="container">
		<nav>
			<div class="content">
				<div class="logo"><a href="#">MAJI_SAFI</a></div>
				<ul class="links">
					<li><a href="../markers/user-map.php">Locate</a></li>
					<li><a href="#">Water_Centers</a></li>
					<li><a href="#">Treatment</a></li>
					<li><a href="#">Other_Services</a></li>
				</ul>
				
			</div>
		</nav>
		<section class="main">
		
		</section>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

