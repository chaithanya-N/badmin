<?php
session_start();
 // echo $_SESSION['email'];
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
                    <h4 class="page-header">Create New User</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3"  >
                 <form id="create-user-form" method="post" class="create-user-form">
                    <div class="row">
                        <label class="col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" id="name">
                            <span id="errormsg-name" class="errormsg">Please Enter Name</span>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control" id="email">
                            <span id="errormsg-email" class="errormsg">Please Enter Email</span>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" id="password">
                            <span id="errormsg-pwd" class="errormsg">Please Enter Password</span>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">User Type</label>
                        <div class="col-md-9">
                            <select class="form-control" name="usertype" id="usertype">
                                <option selected="yes" disabled="disabled" value="">Select User Type</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Moderator">Moderator</option>
                            </select>
                            <span id="errormsg-ut" class="errormsg">Please Select Usertype</span>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-9 col-md-offset-3">
                            <input  id="create-userbtn" type="button" name="create-user" class="btn btn-primary" value="Create User" id="create-user">
                        </div>
                    </div>
                 </form>
               </div>
            </div>
               
    </div>
    <!-- /#wrapper -->

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
        $('#errormsg-name,#errormsg-pwd,#errormsg-ut,#errormsg-email').hide();

        $('#create-userbtn').click(function(){

            if($('#name').val() == '')
            {
                $('#errormsg-name').show();
            }
            else
            {
                  $('#errormsg-name').hide();
             }
            
            if($('#email').val() == '')
            {
                 $('#errormsg-email').show();
            }
            else
            {
                 $('#errormsg-email').hide();
            }
                 
            if($('#password').val() == '')
            {
                 $('#errormsg-pwd').show();
            }
                   
           if(!$('#usertype').val())
            { 
            $('#errormsg-ut').show();
            }   
            else
            {
            $data = $('#create-user-form').serialize();

            $.ajax({
                   type: "POST",
                   url: "process-create-user.php",
                   data: $data, // serializes the form's elements.
                   success: function(result)
                   {
                        alert(result); // show response from the php script.

                       if(result == "Success")
                       {
                            window.location.href="createuser.php";
                       }
                       else
                       {
                        // window.location.href="createuser.php";
                       }
                       // window.location.href = "http://stackoverflow.com";

                   }
                 });
        }
         })
    })
    </script>
</body>

</html>
