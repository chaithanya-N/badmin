<?php

include 'database.php';


$id = $_POST['id'];

$q = mysqli_query($link, "SELECT * FROM projects WHERE id = '".$id."'");
$rowcount = mysqli_num_rows($q);

if($rowcount > 0)
{

	$delrow = mysqli_fetch_assoc($q);

	$rowid = $delrow['id'];

  $delrowq = mysqli_query($link,"DELETE FROM `projects` WHERE id = '".$rowid."'");

	echo "Row-Deleted";
}




?>