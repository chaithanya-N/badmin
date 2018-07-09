<?php
include 'database.php';

$id = $_POST['id'];
$name = $_POST['user'];
$email = $_POST['email'];
$Password= $_POST['password'];
$usertype= $_POST['user_type'];


$query = mysqli_query($link,"SELECT * FROM  admins WHERE id = '".$id."'");
$rowcount = mysqli_num_rows($query);

if($rowcount > 0)
{
	$editq = mysqli_query($link,"UPDATE `admins` SET  `name`='$name', `email`='$email',`password`='$Password',`user_type`='$usertype' WHERE id = '".$id."'");  
 
 echo "SUCCESS";

}


?>