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
    .create-user-form> .row{margin-bottom: 10px;}
    .errormsg{color:red;}
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
                    <h1 class="page-header">User Management </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Edit User</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                          <?php 
                              $query = mysqli_query($link,"SELECT * FROM admins WHERE id = '".$id."'");
                                
                                $row = mysqli_fetch_assoc($query);
                               
                                {
                                ?>
                              <form id="edituserform" method="post" class="create-user-form">
                                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                 <div class="col-md-12">
                                    <label class="col-md-3" >Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="user" class="form-control" value="<?php echo ucfirst($row['name'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control" value="<?php echo ucfirst($row['email'])?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-md-3" >Password</label>
                                    <div class="col-md-9">
                                        <input type="text" name="password" class="form-control" value="<?php echo ucfirst($row['password'])?>">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <label class="col-md-3" >User Type</label>
                                    <div class="col-md-9">

                                <input type="text" id="type" name="user_type" class="form-control" value="<?php echo ucfirst($row['user_type'])?>">
                                    </div>
                                </div>


                               <?php
                            if($row['user_type'] == 'Administrator')
                            {
                        ?> 
                                  
                                 <div class="form-group" style="margin:25px;">
                                     <button type="button" class="btn btn-primary btn-md" id="updatebtn">Update</button>
                                     <a href="existingusers.php" class="btn btn-warning btn-md">Cancel</a>
                                     <button type="button" disabled class="btn btn-danger btn-md" id="deleteuserbtn">Delete User</button>
                                 </div>
                                 <?php } 
                        elseif($row['user_type'] == 'Moderator')
                        { ?>
                    
                                 <div class="form-group" style="margin:25px;">
                                     <button type="button" class="btn btn-primary btn-md" id="updatebtn">Update</button>
                                     <a href="existingusers.php" class="btn btn-warning btn-md">Cancel</a>
                                     <button type="button"  class="btn btn-danger btn-md" id="deleteuserbtn">Delete User</button>
                                 </div>
                                 <?php }  ?>
                       
                             </form>
                             <?php 
                         }
                         ?>

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
        <p>You Have Successfully Updated User</p>
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
        <p>Are you sure you want to delete this User!!!</p>
        <button type="button" class="btn btn-primary btn-sm" id="deleteuseryesbtn">Yes</button>
        <button type="button" class="btn btn-warning btn-sm" id="deleteusernobtn">No</button>
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
        <p>User Deleted Successfully!!!</p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- delete modal end -->     

            
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
    <script type="text/javascript">
    $(document).ready(function(){



         $('#updatebtn').click(function(){

            var data = $('#edituserform').serialize();

            $.ajax({
                url: 'process-edituser.php',
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

// delete
  

$('#deleteuserbtn').click(function(){
             $('#delmyModal').modal('show');

             $('#deleteuseryesbtn').click(function(){
                $('#delmyModal').modal('hide');
                // alert('delete');
            var data = $('#edituserform').serialize();
            $.ajax({
                url: 'deleteuser.php',
                type:'POST',
                data:data,

                success: function (result) {
                    
                    // alert(result);

                    if(result == "Row-Deleted")
                    {
                        $('#delsuccessmyModal').modal('show');
                        $('#delsuccessmyModal').on('hidden.bs.modal', function () {
                            window.location.href='existingusers.php';
                        })
                    }
                 }
            })
        })
})


$('#deleteusernobtn').click(function(){
        // alert('dont delete');
            $('#delmyModal').modal('hide');
            location. reload(true);
     })





       
    })
    </script>
</body>

</html>
