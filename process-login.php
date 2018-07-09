<?php

include("baredatabase.php");


$name = $_POST['name'];
$email = $_POST['email'];
$user = $_POST['id'];
// $sql = mysqli_query($connection,"UPDATE bare SET id='100' WHERE name='rejoice' ");

$sql = mysqli_query($connection,"SELECT userdetails.name, userdetails.password,bare.email FROM userdetails RIGHT JOIN bare ON userdetails.id = bare.id");
	while($row1 = mysqli_fetch_assoc($sql))
	{
// while($row = mysqli_fetch_assoc($sql)){
// echo 'Values are '.$row['name'].','.$row['email'].','.$row['id'	].'<br>';
// }	

echo ($row1['name']);
echo ($row1['email']);
echo ($row1['password']);
echo "<br>";
}


// $q = mysqli_query($connection,"SELECT * FROM bare, userdetails WHERE id = '".$user."'");
// $row=mysqli_fetch_assoc($q);

// echo $row;
 // if($name == 'a')
 // {
 // 	echo "Success";
 // 	header('success.php');
 // }
 // else
 // {
 // 	echo "Failed";
 // 	header('fail.php');

 // }
?>