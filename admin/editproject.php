<?php
session_start();
 // echo $_SESSION['email'];
$id = $_GET['id'];

 include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> </title>

    <!-- Bootstrap Core CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="sbadmin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="sbadmin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
     input{margin-bottom:5px;}
</style>
</head>

<body>

    <div id="wrapper">

        <?php 
        	include("header.php");
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project Management </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <!-- /.row -->
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4 class="page-header">Edit Projects</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-md-8">
                                <?php 
 
                                $query = mysqli_query($link,"SELECT * FROM projects WHERE id = '".$id."'");
                                
                                $row = mysqli_fetch_assoc($query);
                               
                                {
                                ?>
                             <form id="editprojectform" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                 <div class="col-md-12">
                                    <label class="col-md-3" >Project Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="project_name" class="form-control" value="<?php echo ucfirst($row['client'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Project Type</label>
                                    <div class="col-md-9">
                                        <input type="text" name="project_type" class="form-control" value="<?php echo ucfirst($row['project-type'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Builtup Area</label>
                                    <div class="col-md-9">
                                        <input type="text" name="Builtup_area" class="form-control" value="<?php echo ucfirst($row['area'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Technique</label>
                                    <div class="col-md-9">
                                        <input type="text" name="technique" class="form-control" value="<?php echo ucfirst($row['technique'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Completed</label>
                                    <div class="col-md-9">
                                        <input type="text" name="completed" class="form-control" value="<?php echo ucfirst($row['completed'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Location</label>
                                    <div class="col-md-9">
                                        <input type="text" name="location" class="form-control" value="<?php echo ucfirst($row['location'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Banner Images</label>
                                 </div>
                                 <div class="col-md-12">
                                     <img src="<?php echo $row['image']?>" name="image" id="img"> 
                                     <label style="color:#4286f4; " id="editbanner">Change Image</label>
                                 </div>
                                  <div class="col-md-12">
                                    <label class="col-md-3" >Project Images</label>
                                 </div>
                                  <div class="form-group">
                                     <div class="col-md-12">
                                     <?php 
                                     // $id1 = $_GET['id'];

                                   $query = mysqli_query($link,"SELECT * FROM  gallery WHERE client_id = '".$id."'");
                                    $query1 = mysqli_query($link,"SELECT * FROM  gallery WHERE client_id = '".$id."'");
                                    $row1 = mysqli_fetch_assoc($query1);
                                    while($row = mysqli_fetch_assoc($query))
                                    {
                                    ?>
                                <div class="col-md-4 col-xs-4 w3layouts_gallery_grid">
                                 <img src="projects/<?php echo $row1['client_id'].'/'.$row['file_name']; ?>" alt=" " class="img-responsive" style="width:350px; height:150px;padding:10px;">
                                    <!--  <img src="<?php echo ucfirst($row1['image'])?>"> -->
                                </div>
                                     <?php 
                                 }
                                 ?>
                                 </div>
                             </div><br>
                                 <div class="form-group">
                                     <button type="button" class="btn btn-primary btn-md" id="updatebtn">Update</button>
                                     <a href="existingprojects.php" class="btn btn-warning btn-md">Cancel</a>
                                     <button type="button" class="btn btn-danger btn-md" id="deleteprojectbtn">Delete Project</button>
                                 </div>
                             </form>
                             <?php 
                         }
                         ?>
                           </div> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>
    <!-- /#wrapper -->'


    <!-- update modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#ffca00">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff">Update Successful</h4>
      </div>
      <div class="modal-body">
        <p>You Have Successfully Updated Project</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- update modal end -->
<!-- delete modal -->
<div id="delmyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:red">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff">Delete Confirmations</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Project!!!</p>
        <button type="button" class="btn btn-primary btn-sm" id="deleteprojectyesbtn">Yes</button>
        <button type="button" class="btn btn-warning btn-sm" id="deleteprojectnobtn">No</button>
      </div>
      
    </div>

  </div>
</div>
<!-- delete modal end -->
<!-- delete modal -->
<div id="delsuccessmyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:red">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff">Delete Successful</h4>
      </div>
      <div class="modal-body">
        <p>Project Deleted Successfully!!!</p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- delete modal end -->


<!-- edit banner image modal -->
<!-- Modal -->
<div id="bannermyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Banner Image</h4>
      </div>
      <div class="modal-body">
         <div class="row text-center">
            <div class="col-md-6 col-md-offset-2">
              <img src="" id="imagepreview" width="80%">
            </div>
          </div>
         <div class="row text-center" style="padding:20px;">
          <form action="" method="post" enctype="multipart/form-data" id="changeimgform" >
            <input type="hidden" name="imgid" value="" id="imgid">
           <input type="file" name="file"  id="file">
           <button class="btn btn-primary btn-sm" type="button" id="bannerchangebtn">Change</button>
          </form>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div><!-- edit banner image modal end-->
    <!-- jQuery -->
    
   <script src="sbadmin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="sbadmin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="sbadmin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="sbadmin/dist/js/sb-admin-2.js"></script>
    <script>




    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

       

        $('#updatebtn').click(function(){

            var data = $('#editprojectform').serialize();

            $.ajax({
                url: 'process-edit.php',
                type:'POST',
                data:data,

                success: function (result) {
                    
                    // alert(result);

                    if(result == "SUCCESS")
                    {
                        $('#myModal').modal('show');
                        $('#myModal').on('hidden.bs.modal', function () {
                        location. reload(true);
                        })
                    }
                 }
            })
        })




         $('#deleteprojectbtn').click(function(){
             $('#delmyModal').modal('show');

             $('#deleteprojectyesbtn').click(function(){
                $('#delmyModal').modal('hide');
                // alert('delete');
            var data = $('#editprojectform').serialize();
            $.ajax({
                url: 'deleteproject.php',
                type:'POST',
                data:data,

                success: function (result) {
                    
                    // alert(result);

                    if(result == "Row-Deleted")
                    {
                        $('#delsuccessmyModal').modal('show');
                        $('#delsuccessmyModal').on('hidden.bs.modal', function () {
                            window.location.href='existingprojects.php';
                        })
                    }
                 }
            })
        })
})

 $('#deleteprojectnobtn').click(function(){
        // alert('dont delete');
            $('#delmyModal').modal('hide');
            location. reload(true);
     })

// Edit banner image
  $('#editbanner').click(function(){
      // alert();
       $('#imagepreview').attr('src', $('#img').attr('src'));
       $('#imgid').attr('value', $('#img').attr('src'));
    $('#bannermyModal').modal('show');
  })
// Edit Banner image End

$('#bannerchangebtn').click(function(){
  // var imgsrc = $('#imagepreview').attr('src');
   // alert(imgsrc);
   var data = $('#changeimgform').serialize();
   // alert(data);
  $.ajax({
    url:'edit-bannerimg.php',
    type:'POST',
    data:data,
    // dataType: 'json',

    success:function(result){
      alert(result);
    }

  })
})
        
});
 

    
    </script>
</body>

</html>
