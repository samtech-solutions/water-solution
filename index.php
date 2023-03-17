<?php
session_start();
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);
?>

<!DOCTYPE 	html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>maji safi services</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
 </head>
 <body>
    <div class="container">
           <div class="text">
            <h1>MAJI SAFI</h1>
            <h1>KWA WOTE</h1>
            <p style="color:rgb(238, 20, 39)">Clean Water for all</p>
            <p style="color:rgb(190, 245, 9)">Locate the nearest<br> clean water sources. </p>
            <p style="color:aqua">Nearest water <br>treatment facilities</p>
            
           </div>
	         <div class="drop">
            <div class="content">
              <h2>Sign in</h2>
                   <?php if (isset($_SESSION['signin'])) : ?>
					<div class="alert_message error">
					  <p style="color:red;font-size:12px;">
						<?= $_SESSION['signin'];
						unset($_SESSION['signin']);
						?>
					  </p>
					</div>
				  <?php elseif (isset($_SESSION['signup-success'])) : ?>
					<div class="alert_message success ">
					  <p style="color:green;font-size:12px;">
						<?= $_SESSION['signup-success'];
						unset($_SESSION['signup-success']);
						?>
					  </p>
					</div>
				  <?php endif ?>

              <form  action="login/signin-logic.php" method="POST">
                  <div class="inputBox">
                      <input type="text" name="username_email" placeholder="Enter Email" style="color:purple;font-size:14px;">
                  </div>
                  <div class="inputBox">
                    <input type="password" name="password" placeholder="Enter Password" style="color:purple;font-size:14px;">
                </div>
                <div class="inputBox">
                  <input type="submit" name="submit" value="Login">
                  </div>
              </form>
            </div>
           </div>
           <a href="#" class="btn">Forgot Password</a>
           <a href="signup/signup.php" class="btn signup">Signup</a>
	  </div>
</body>
</html>