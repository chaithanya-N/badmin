<?php
session_start();
 
include("database.php");

// $id = $_POST['id'];
$user = $_POST['userid'];
$psw = $_POST['Password'];
$cpsw = $_POST['cpassword'];

// echo $user.','.$psw.','.$cpsw;



       if($psw != '' && $user != '' && $cpsw!='')
 		{
	        $query = mysqli_query($link,"SELECT * FROM `admins` WHERE email='".$user."'");
	 		$row = mysqli_fetch_assoc($query);

 		if($user == $row['email'])
 		{

 			if($psw==$cpsw)
 			{

             $q = mysqli_query($link,"UPDATE `admins` SET  `password`='$psw' WHERE email='".$user."'");  
 
            echo "SUCCESS";

 			}

            else
            {
             echo'password and conform password must be same';
            }



 		}
 		else
 		{
 			echo'please enter valid email address';
 		}



 	}
	else
	{
		echo'please  fill the  fields';
	}

		 		
	
	


	
	
?>