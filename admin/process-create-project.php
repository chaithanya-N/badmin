<?php
session_start();
include("database.php");

$projtype = $_POST['projtype'];
$client = $_POST['client'];
$area = $_POST['area'];
$technique = $_POST['technique'];
$completed = $_POST['completed'];
$location = $_POST['location'];

// if($projtype != 'ongoing') 
// {

$q = mysqli_query($link,"INSERT INTO `projects` (`project-type`, `client`, `area`, `technique`, `completed`, `location`) VALUES ('$projtype','$client','$area','$technique','$completed','$location')");

$last_id = $link->insert_id;
// echo $last_id;

mkdir("projects/".$last_id);

  if(is_array($_FILES)) {

 $filename = $_FILES['userImage']['name'];
 if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
 $sourcePath = $_FILES['userImage']['tmp_name'];
 $targetPath = "projects/".$last_id."/".$filename;
 $image_name = addslashes($filename);	
 
 if(move_uploaded_file($sourcePath,$targetPath)) {
  // echo $sourcePath.','.$targetPath;


 }

// echo $last_id;

 $q = mysqli_query($link,"UPDATE `projects` SET  `image`= '$targetPath' WHERE id = '".$last_id."'");

 

header("Location:createproject.php");

	}
 }
 
//  }
// else
// {
// 	// $q = mysqli_query($link,"INSERT INTO `ongoingprojects` (`project-type`, `client`, `area`, `technique`, `completed`, `location`) VALUES ('$projtype','$client','$area','$technique','$completed','$location')");
// 	$q = mysqli_query($link,"INSERT INTO `projects` (`project-type`, `client`, `area`, `technique`, `completed`, `location`) VALUES ('$projtype','$client','$area','$technique','$completed','$location')");

// $last_id = $link->insert_id;
// // echo $last_id;

// mkdir("projects/ongoing/".$last_id);

//   if(is_array($_FILES)) {

//  $filename = $_FILES['userImage']['name'];
//  if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
//  $sourcePath = $_FILES['userImage']['tmp_name'];
//  $targetPath = "projects/ongoing/".$last_id."/".$filename;
//  $image_name = addslashes($filename);	
 
//  if(move_uploaded_file($sourcePath,$targetPath)) {
//   // echo $sourcePath.','.$targetPath;


//  }

// // echo $last_id;

//  // $q = mysqli_query($link,"UPDATE `ongoingprojects` SET  `image`= '$targetPath' WHERE id = '".$last_id."'");
//  $q = mysqli_query($link,"UPDATE `projects` SET  `image`= '$targetPath' WHERE id = '".$last_id."'");

 

// header("Location:createproject.php");

// 	}
//  }
// }

?>