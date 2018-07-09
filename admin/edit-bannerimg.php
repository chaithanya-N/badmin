<?php

include 'database.php';

$image = $_POST['imgid'];

$q = mysqli_query($link,"SELECT * FROM `projects` WHERE `image` = '".$image."'");
$row = mysqli_fetch_assoc($q);

$last_id =  $row['id'];
echo $row['id'];

// echo $image;
if(isset($_FILES["file"]["type"]))
{

$sourcePath = $_FILES["file"]["name"];
echo $sourcePath;
}
else
{

	echo'error';
}

// if(is_array($_FILES)) {

//  $filename = $_FILES['userImage']['name'];
//  echo $filename;
//  if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
//  $sourcePath = $_FILES['userImage']['tmp_name'];
//  $targetPath = "projects/".$last_id."/".$filename;
//  $image_name = addslashes($filename);	
 
//  if(move_uploaded_file($sourcePath,$targetPath)) {
//   // echo $sourcePath.','.$targetPath;


//  }

// // echo $last_id;

//  // $q = mysqli_query($link,"UPDATE `projects` SET  `image`= '$targetPath' WHERE id = '".$last_id."'");

 

// // header("Location:createproject.php");
//  // echo "Success";

// 	}
//  }

?>