<?php
require '../config/db.php';
session_start();
//get sign form data if signup button was clicked

if (isset($_POST['submit'])) {
    $latitude = filter_var($_POST['latitude'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $longitude = filter_var($_POST['longitude'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $accounttype = "User";
	
	
    //validate input values
    if(!$email){
        $_SESSION['signup'] = "Please Enter a Valid Email";
    } elseif (strlen($createpassword) < 4 || strlen($confirmpassword) < 4) {
        $_SESSION['signup'] = "Password should be 4+ characters long";
    } else {
        //check if passwords don't or do match
        if ($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Password do not Match";
        } else {
            //hash password
            $hashed_password = md5($createpassword);
            //check if username or email already exits in the database
            $user_check_query = "SELECT email FROM users WHERE email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Email Already exits";
            } else {
                 $_SESSION['signup-success'] = 'Registration successful.';
            }
        }
    }
    //redirect to signup page if error occured
    if (isset($_SESSION['signup'])) {
        //pass form data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location: signup.php');
        die();
    } else {
        //insert new user into users table
        $insert_user_query = "INSERT INTO users SET latitude='$latitude',longitude='$longitude',
        email='$email',password='$hashed_password',account_type='$accounttype'";

        $insert_user_result = mysqli_query($connection, $insert_user_query);
		
		echo "<script>window.location='loader.php';</script>";
		
		$_SESSION['signup-success'] = 'Registration successful';

    }
} else {
    //if no data entered,bounce back to the signup.php
    header('location: signup.php');
    die();
}
?>

<?php

?>