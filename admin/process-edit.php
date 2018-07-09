<?php
include 'database.php';

$id = $_POST['id'];
$project_name = $_POST['project_name'];
$project_type = $_POST['project_type'];
$Builtup_area = $_POST['Builtup_area'];
$technique = $_POST['technique'];
$completed = $_POST['completed'];
$location = $_POST['location'];
// $bimage = $_POST['image'];


// echo $id;

$query = mysqli_query($link,"SELECT * FROM projects WHERE id = '".$id."'");
$rowcount = mysqli_num_rows($query);

if($rowcount > 0)
{
	$editq = mysqli_query($link,"UPDATE `projects` SET  `project-type`='$project_type', `client`='$project_name',`area`='$Builtup_area',`technique`='$technique',`completed`='$completed',`location`='$location' WHERE id = '".$id."'");  
 
 echo "SUCCESS";

}


?>