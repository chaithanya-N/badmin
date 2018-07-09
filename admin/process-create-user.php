<?php
session_start();
include("database.php");

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$status = 1;
// echo $username.','.$email.','.$password;


	if(isset($username)){


		$query = mysqli_query($link,"INSERT INTO `admins`(name,email,password,status,user_type) VALUES ('$username','$email','$password','$status','$usertype')");

  		echo "Success";
	}
?>