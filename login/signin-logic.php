<?php
require '../config/db.php';
session_start();
if (isset($_POST['submit'])) {
    //get form data
    
    $username_email = $_POST['username_email'];
    $password = $_POST['password'];
	$hashed_password = md5($password);
    mysqli_real_escape_string($connection, $username_email);
    mysqli_real_escape_string($connection, $password);
	
    if (!$username_email) {
        $_SESSION['signin'] = "Email Required";
    } elseif (!$password) {
        $_SESSION['signin'] = "Password Required";
    } else {
		//fetch user from database
			$fetch_user_query = "SELECT * FROM users WHERE email='$username_email'";
			$fetch_user_result = mysqli_query($connection, $fetch_user_query);

			if (mysqli_num_rows($fetch_user_result) == 1) {
				//convert the record into assoc array
				$user_record = mysqli_fetch_assoc($fetch_user_result);
				$db_password = $user_record['password'];
				//compare password
				if ($hashed_password == $db_password) {
					//set session for access control
					 
					//set session if user is admin
					if ($user_record['account_type'] == 'Admin') {
						$_SESSION['user_is_admin'] = true;
						echo "<script>window.location='../markers/admin-map.php';</script>";
					}else{
					  //log user in
					  $_SESSION['user-email'] = $user_record['email'];
					  echo "<script>window.location='loader.php';</script>";
					}
				} else {
					//$_SESSION['user-email'] = $user_record['email'];
					//echo $hashed_password,$db_password;
					echo "<script>window.location='loader.php';</script>";
					$_SESSION['signin'] = "Wrong Password";
				}
			} else {
				$_SESSION['signin'] = "User not found";
       }
    }
    //if any problem
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ../index.php');
        die();
    }
} else {
    header('location: ../index.php');
    die();
}
