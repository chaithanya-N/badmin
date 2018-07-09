<?php
include('database.php');

$imgid = $_GET['id'];

echo $imgid;


// $q = mysqli_query($link,"SELECT * FROM gallery WHERE id = '".$imgid."'");
// $rowcount = mysqli_num_rows($q);

// if($rowcount > 0)
// {

	$delimg = mysqli_query($link,"DELETE FROM `gallery` WHERE id = '".$imgid."'");

	header('location:createproject.php');
// }
// else
// {
// 	echo "Image Not available";
// }

?>