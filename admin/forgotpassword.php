<?php
session_start();

// $id = $_GET['id'];

 include('database.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Centre for Vernacular Architecture Trust :: Admin</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
	<style type="text/css">
		.header{background:#000; padding:10px; color:#fff;}
	 	h1>a{color:#fff; text-decoration: none}
	 	.login{padding:40px;margin:15px;}
	 	
	 	
	 	
	 	.footer{color:#fff; height:60px; margin-top:220px;bottom: 0;text-align:center}
	</style>
</head>
<body>

	<div class="container-fluid">
		<!-- Header -->
		<div class="row">
			<div class="col-md-12 header" >
 					<div class="col-md-4">
							
						<a href="index.html" style="font-family:'Amaranth', sans-serif; font-size:20px;">
							<img src="../images/logo.png" width="18%"></a>
					</h1>
					</div>
				</div>
 		</div>
		<!-- header End -->

        <!-- Main Body -->
		<div class="row login">
			<div class="col-md-12">
				<div class="col-md-4 login-div">
					<form  name="form" id="form" method="post">
						<div class="col-md-12 " style="padding:15px; background: #fff">
							<label class="lbl1">User ID</label>
							<input type="email" class="form-control" name="userid" 
							 id="mail">
							<label>Password</label>
							<input type="password" class="form-control" name="Password">
							 <!-- <label style="color:red;" class="fname-error error" id="error0">Please enter valid User ID </label> <br>  -->
							<label>Conform Password</label>
							<input type="password" class="form-control" name="cpassword"id="pw">
							
							 <!-- <label style="color:red;" class="fname-error error" id="error">Please enter Password </label> -->
							<br>
							<button type="button" id="submitbtn" class="btn btn-info" >submit</button>
							
 						</div>
					</form>
			
				</div>
			</div>
		</div>
		<!-- Main body end -->
		<!-- footer -->
		<div class="row footer">
			<div class="col-md-12">
				<h6>Copyright  Centre for Vernacular Architecture Trust </h6>
			</div>
		</div>
		<!-- footer end -->
	</div>



<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="../js/jquery.flexslider.js"></script>
	<script src="../js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="../js/bootstrap.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		 $('#submitbtn').click(function(){
		 	
			$data = $('#form').serialize();

			$.ajax({
		           type: "POST",
		           url: "passworddb.php",
		           data: $data, // serializes the form's elements.
		           success: function(result)
		           {
		                 alert(result); // show response from the php script.

		             window.location.href="forgotpassword.php";

		               

		           }


		         });
		 
			}) 
 			
	})
	


</script>