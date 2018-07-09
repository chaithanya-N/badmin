<?php
session_start();
include("database.php");

if(isset($_POST["projtype"])){
    // Capture selected country
    $projecttype = $_POST["projtype"];
     
     $q = mysqli_query($link,"SELECT * FROM projects where `project-type`='".$projecttype."' ORDER BY `client` ASC");
     // $row = mysqli_fetch_array($q);

     while($row1 = mysqli_fetch_array($q))
        {
          echo '<option value="'.$row1['id'].'">'.$row1['client'].'</option>';
        }
     }



if(isset($_POST["client"])){
    // Capture selected country
    $clientid = $_POST["client"];
     
     // echo $client;
       $q1 = mysqli_query($link,"SELECT * FROM `gallery` WHERE `client_id` ='".$clientid."'");
      // $row = mysqli_fetch_array($q);
 
       while($roww = mysqli_fetch_assoc($q1))
      {
            $imgid = $roww['id'];
            $clientidd = $roww['client_id'];
            $img = $roww['file_name'];
        // echo "projects/".$id."/".$img;
            echo '<div class="col-md-4" style="padding:20px; "><img src="projects/'.$clientidd.'/'.$img.'"/ style="width:100%"><a href="processdeletephotos.php?id='.$imgid.'"><span class="fa fa-trash" style="color:red; cursor:pointer" id="'.$imgid.'"></span></a></div>';

        // <button type="button" id="'.$imgid.'" class="btn btn-danger btn-sm">Delete</button>
      }

     }
  ?>
 