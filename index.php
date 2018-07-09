<?php
session_start();
 // echo $_SESSION['email'];
 include('baredatabase.php');
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center" style="border:1px solid #ccc; padding:40px;">
          <form method="post" action="process-login.php " id="loginform">
            Name:<input type="text" name="name"><br><br>
            E-Mail:<input type="email" name="email"><br><br>
             Userid:<input type="text" name="id"><br><br>
              <input type="submit" id="submit" value="Submit"><br><br>

    
           </form>
         </div>
         <!-- </div>
        </div> -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- <script type="text/javascript">
      
      $('#submit').click(function(){

        var data = $('#loginform').serialize();
        console.log(data);

        $.ajax({

             type: "POST",
             url: 'process-login.php',
             data: data, // serializes the form's elements.
             success: function(result)
             {
              
                if(result == 'Success')
                {
                  window.location.href = ('success.php');
                }
                else
                {
                  window.location.href = ('fail.php');

                }
             }

        })

      })

    </script>
 -->
  </body>

</html>
