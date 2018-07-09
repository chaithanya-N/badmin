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
    <style>
   .create-user-form> .row{margin-bottom: 10px;}

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
            <div class="row">
                <div class="col-lg-12">
                 <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Create Project</a></li>
                    <li><a data-toggle="pill" href="#menu1">Add Photos</a></li>
                     <li><a data-toggle="pill" href="#menu2">Delete Photos</a></li>
                 </ul>
  
  <div class="tab-content">
<!-- create project start -->
    <div id="home" class="tab-pane fade in active">
      <div class="row" style="background:#f7f7f7; padding:20px;">
                <div class="col-md-6 col-md-offset-3" >
                 <form name="myform" id="create-addproject-form" method="post" enctype="multipart/form-data" action="process-create-project.php"  class="create-user-form">
                    <div class="row">
                        <label class="col-md-3">Project Type </label>
                        <div class="col-md-9">
                            <select name="projtype" class="form-control" id="Project" required>
                                <option value="" selected="yes" disabled="disabled">Select Project Type</option>
                                <option value="residential">Residential</option>
                                <option value="institutional">Institutional</option>
                                <option value="industrial">Industrial</option>
                                <option value="ongoing">ongoing projects</option>
                             </select>
                              <!--  <label style="color:red;" class="fname-error error" id="error0">Please enter your Project Type </label>   -->
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Client Name </label>
                        <div class="col-md-9">
                            <input  type="text" name="client" class="form-control" id="name1" required>
                            <!-- <label style="color:red;" class="fname-error error" id="error">Please enter your Client Name</label>   -->
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Builtup area</label>
                        <div class="col-md-9">
                            <input type="text" name="area"  class="form-control" id="name2" required>
                            <!-- <label style="color:red;" class="fname-error error" id="error2">Please enter your Builtup area</label>   -->
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Technique</label>
                        <div class="col-md-9">
                            <input type="text" name="technique" class="form-control"  id="name3" required>
                             <!-- <label style="color:red;" class="fname-error error" id="error3">Please enter your Technique</label>   -->
                        </div>
                    </div>
                     <div class="row">
                        <label class="col-md-3">Completed</label>
                        <div class="col-md-9">
                            <input type="text" name="completed" class="form-control" id="name4" required>
                            <!--  <label style="color:red;" class="fname-error error" id="error4">Please enter your Completed year</label>   -->
                        </div>
                    </div>
                     <div class="row">
                        <label class="col-md-3">Location</label>
                        <div class="col-md-9">
                            <input type="text" name="location" class="form-control" id="name5" required>
                         </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Upload Photo</label>
                        <div class="col-md-9">
                            <button id="addfile" class="btn btn-primary" type="button">Select File </button>
                            <p id="filename"></p> 
                            <input type="file" name="userImage" class="inputFile" id="userImage" style='display:none'>
                         </div>  
                    </div>
                   <!--  <label style="color:red;" class="fname-error error" id="error6">Please fill all the above filds </label>   -->
                    
                    <div class="row">
                         <div class="col-md-9 col-md-offset-3">
                            <span id="errormsg">Please Fill all details</span><br>
                            <input  type="submit" name="submit"   class="btn btn-primary" value="Add Project"
                            id="addprojectbtn"  >
                        </div>
                    </div>
                 </form>
               </div>
            </div>
    </div>
    <!-- create project end -->
    <!-- add project start -->
    <div id="menu1" class="tab-pane fade">
        <div class="row" style="background:#f7f7f7; padding:20px;">
                <div class="col-md-6 col-md-offset-3"  >
                 <form  name="myform1" id="create-user-form" method="post" class="create-user-form" enctype="multipart/form-data" action="create_photo_gallery.php">
                  <div class="row">
                        <label class="col-md-3">Select Project Type</label>
                        <div class="col-md-9">
                              <select name="projtype" class="form-control" id="projtype">
                                <option value="" selected="yes" disabled="disabled">Select Project Type</option>
                                 <?php 
 
                                $query = mysqli_query($link,"SELECT DISTINCT `project-type` FROM projects order BY `project-type` ASC");
                                 while($row = mysqli_fetch_assoc($query))
                               
                                {
                                ?>
                                  <option value="<?php echo $row['project-type'] ?>"><?php echo ucfirst($row['project-type']) ?></option>
                                <?php 
                              }
                              ?>
                             </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3">Select Project </label>
                        <div class="col-md-9">
                              <select name="client" class="form-control" id="response">
                                <option value="" selected="yes" disabled="disabled">Select Project</option>
                                  
                             </select>
                             

                        </div>
                    </div>

                    <div class="row" id="uploadpics1">
                        <label class="col-md-3">Upload Photo</label>
                        <div class="col-md-9">
                            <input type="file" name="files[]" multiple class="btn btn-primary">
                        </div>
                    </div>
                   
                    <div class="row">
                      <div id="addimgs">
                        
                      </div>

                    </div>
                    <div class="row">
                        <!-- <label class="col-md-12 text-right" id="addmore" style="color:#06f; cursor:pointer; font-size:12px; font-weight:400"> <i class="fa fa-plus"></i> Add More Pictures</label> -->
                         
                    </div>
                    
                    <dir></dir> <div class="row">
                         <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="submit">
                        </div>
                    </div>
                 
               </div>
            </div>
    </div>
</form>
<!-- Delete Photos start-->
     <div id="menu2" class="tab-pane fade">
        <div class="row" style="background:#f7f7f7; padding:10px;">
                <div class="col-md-6 col-md-offset-3"  >
                 <form  name="myform1" id="create-user-form" method="post" class="create-user-form" enctype="multipart/form-data" action="create_photo_gallery.php">
                  <div class="row">
                        <label class="col-md-3">Select Project Type</label>
                        <div class="col-md-9">
                               <select name="projtype" class="form-control" id="projtype1">
                                <option value="" selected="yes" disabled="disabled">Select Project Type</option>
                                 <?php 
 
                                $query = mysqli_query($link,"SELECT DISTINCT `project-type` FROM projects order BY `project-type` ASC");
                                 while($row = mysqli_fetch_assoc($query))
                               
                                {
                                ?>
                                  <option value="<?php echo $row['project-type'] ?>"><?php echo ucfirst($row['project-type']) ?></option>
                                <?php 
                              }
                              ?>
                             </select>
                        </div>  
                    </div>
                    <div class="row">
                        <label class="col-md-3">Select Project </label>
                        <div class="col-md-9">
                              <select name="client" class="form-control" id="response1">
                                <option value="" selected="yes" disabled="disabled">Select Project</option>
                                  
                             </select>

                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" id="images">
                          
                      </div>
                    </div>
                 </form>
               </div>
            </div>
    </div>
      <!-- add project end -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                 
               
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
    <script src="sbadmin/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

          $('#addprojectbtn').attr('disabled','disabled');
          $('#addfile').attr('disabled','disabled');
          $('#errormsg').hide();
          
          $('#name5').keyup(function(){
            var myLength = $("#name5").val().length;
            if(myLength == 0)
            {
              // alert('empty');
              $('#addfile').attr('disabled','disabled');
            }
            else
            {
              $('#addfile').removeAttr('disabled');
            }

            })


          $('#addfile').click(function(){
            $('#userImage').click();
           })

          $('#userImage').change(function(){
            $('#filename').html($(this).val().replace(/C:\\fakepath\\/i, '')); 
            $('#addprojectbtn').removeAttr('disabled');
          })
              
         })

   //      $('#addprojectbtn').click(function(){


   //        var  data = $('#create-addproject-form').serialize();
   //           $.ajax({
   //                 type: "POST",
   //                 url: "",
   //                 data: data, // serializes the form's elements.
   //                 // dataType: 'json',
   //                 success: function(result)
   //                 {
   //                      alert(result); // show response from the php script.
   //                      console.log(result);
   //                     // if(result == "Success")
   //                     // {
   //                     //      window.location.href="createproject.php";
   //                     // }
   //                     // else
   //                     // {
   //                     //  // window.location.href="createuser.php";
   //                     // }
   //                     // // window.location.href = "http://stackoverflow.com";

   //                 }
   //               });
   // })

$('#addmore').click(function(){

  var input = jQuery('<input type="file" name="uploadphoto" id="addimgbtn"><span id="removepicbtn">Remove</span>');
  jQuery('#addimgs').append(input);
})


$('#removepicbtn').click(function(){
console.log('clicked remove');
  jQuery('#addimgbtn').remove();
})
    
// select project type and values add photos
 $("#projtype").change(function(){
        var selectedprojtype = $("#projtype option:selected").val();
        // alert(selectedprojtype);
        $.ajax({
            type: "POST",
            url: "process-select-projtype.php",
            data: { projtype : selectedprojtype } 
        }).done(function(result){

            // alert(result);
             $("#response").html(result);
        });
    });

// select project type and values delete photos
 $("#projtype1").change(function(){
        var selectedprojtype = $("#projtype1 option:selected").val();
        // alert(selectedprojtype);
        $.ajax({
            type: "POST",
            url: "process-select-projtype.php",
            data: { projtype : selectedprojtype } 
        }).done(function(result){

            // alert(result);
             $("#response1").html(result);
        });
    });



// select project get images
 $("#response1").change(function(){
        var selectedclient = $("#response1 option:selected").val();
        // alert(selectedprojtype);
        $.ajax({
            type: "POST",
            url: "process-select-projtype.php",
            data: { client : selectedclient } 
        }).done(function(result){

             $("#images").html(result);
 
        });
    });

 
</script>
</body>

</html>
