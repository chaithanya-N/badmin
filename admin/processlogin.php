<?php
session_start();
include("database.php");

$userid = $_POST['userid'];
$password = $_POST['password'];

 

if($userid == '' || $password == '')
{
	echo "Email/Pwd Error";
}
else
{
	if(isset($_POST['userid'])){

 		$query = mysqli_query($link,"SELECT * FROM `admins` WHERE email='".$userid."'");
 		$row = mysqli_fetch_assoc($query);

 		if($userid == $row['email'])
 		{
			if($password == $row['password']){
				
				$_SESSION = array();
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['status'] = $row['status'];
				$_SESSION['usertype'] = $row['user_type'];

				echo "Success";
				// echo $_SESSION['name'];
				}
				else
				{
					echo "Password Error";
				}
		}
		else
		{
			echo "Email Error";
		}
	}
}
?>