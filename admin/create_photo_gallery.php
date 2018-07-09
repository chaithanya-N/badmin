<?php 

include'database.php';

$projtype = $_POST['projtype'];
$clientid = $_POST['client'];

// $destination1 = $dest.'/';
 echo $projtype;

$query = mysqli_query($link,"SELECT * FROM projects WHERE id = '".$clientid."'");
$row = mysqli_fetch_assoc($query);
$clientname = $row['client'];
echo $clientname;
// if($projtype == 'ongoing')
// 	{
// 		$destination = 'projects/ongoing/'.$clientid;
// 	}
// 	else
// 	{
		$destination = 'projects/'.$clientid;
// 	}

echo $destination;
//  // echo $clientname;

 extract($_POST);
$error=array();
$extension = array("jpeg","jpg","png","gif");

foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
	 
	 $file_name = $_FILES['files']['name'][$key];
	 $file_tmp = $_FILES['files']['tmp_name'][$key];

	 $ext = pathinfo($file_name,PATHINFO_EXTENSION);
	 if(in_array($ext,$extension))
	 {
	 	move_uploaded_file($file_tmp = $_FILES['files']['tmp_name'][$key],$destination.'/'.$file_name);
	 	// if($projtype == 'ongoing')
			// {
			// 	$target_path = 'projects/ongoing/'.$client."/".$file_name;
			// }
			// else
			// {
			// 	$target_path = 'projects/'.$client."/".$file_name;
			// }
	 	

	   $q = mysqli_query($link,"INSERT INTO `gallery`(`client_id`, `client`, `project_type`, `file_name`) VALUES ('$clientid','$clientname','$projtype','$file_name')");

	 	  header('location:createproject.php');
	 	echo($target_path);
	 }
	 else
	 {
	 	array_push($error,"$files_name");
	 	// echo "Failed";
	 }

}



?>