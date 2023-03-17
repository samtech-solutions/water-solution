
<?php
session_start();
//get back form data if there was a registration error

$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
//delete signup-data
unset($_SESSION['signup-data']);
?>

<!DOCTYPE 	html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>maji safi services</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
 </head>
 <body onload= "getLocation();">
    <section class="form_section" style="margin-top:-20px">
    <div class="container form_section-container">
      <h2>Sign Up</h2>
      <?php if (isset($_SESSION['signup'])) : ?>
        <div class="alert_message error">
          <p>
            <?= $_SESSION['signup'];
            unset($_SESSION['signup']);
            ?>
          </p>
        </div>
      <?php endif ?>
	  
      <form action="signup-logic.php" enctype="multipart/form-data" method="POST" class="myForm">
	   <input type="email" name="email" value="<?= $email ?>" placeholder=" Enter Email Address" style="background:aqua"/>
        <input type="hidden" name="latitude" value="" placeholder="latitude" />
        <input type="hidden" name="longitude" value="" placeholder="longitude" />
        <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Create Password" style="background:aqua" />
        <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password" style="background:aqua"/>
        
		<button type="submit" name="submit" class="btn">Sign Up</button>
      </form>
	  <script>
	  //get the user location
	 function getLocation(){
	 
	   if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(showPosition,showError);
	   
	   }
	 }
	function showPosition(position){
	  document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
	  document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
	}
	function showError(error){
		 switch(error.code){
		  case error.PEMMISSION_DENIED:
		  alert("You Must Allow The request for Geolocation");
		  location.reload();
		  break;
		 }
	}
</script>
    </div>
  </section>

</body>
</html>