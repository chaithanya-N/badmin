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
	 	.login{padding:40px;}
	 	.login-div{border:1px solid #ccc; padding:10px; background:#ccc;}
	 	.loginlbl{font-size:20px; color:#fff;}
	 	.lbl1{text-align: left!important}
	 	.footer{color:#fff; height:60px; margin-top:161px;bottom: 0;text-align:center}
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
				<div class="col-md-4 login-div pull-right">
					<form  name="form" id="login-form" method="post"  >
						<div class="col-md-12 text-center">
							<label class="loginlbl">Login</label>
						</div>
					
						<div class="col-md-12 text-center" style="padding:15px; background: #fff">
							<label class="lbl1">User ID</label>
							<input type="email" class="form-control" name="userid" 
							 id="mail">
							 <label style="color:red;" class="fname-error error" id="error0">Please enter valid User ID </label> <br> 
							<label class="lbl1">Password</label>
							<input type="password" class="form-control" name="password"
							 id="pw">
							 <label style="color:red;" class="fname-error error" id="error">Please enter Password </label>
							<br>
							<button type="button" onclick="return emailval()" id="loginbtn" >Login</button>
							<hr> 
							<a href="forgotpassword.php">Forgot Password</a>
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
		 $('#loginbtn').click(function(){
		 	
			$data = $('#login-form').serialize();

			$.ajax({
		           type: "POST",
		           url: "processlogin.php",
		           data: $data, // serializes the form's elements.
		           success: function(result)
		           {
		                 // alert(result); // show response from the php script.

		               if(result == "Success")
		               {
					 		window.location.href="dashboard.php";
		               }
		                
		               // window.location.href = "http://stackoverflow.com";
		               // if(result == "Email/Pwd Error")
		               // {
		               // 		alert('Email/Pwd should not be empty');
		               // 		window.location.href="index.php";
		               // }

		               if(result == 'Password Error')
		               {
		               		alert('Password Mismatch');
		               		window.location.href="index.php";
		               }

		               if(result == 'Email Error')
		               {
		               		alert('Email Error');
		               		window.location.href="index.php";
		               }

		           }


		         });
		 
			}) 
 			
	})
	



         document.getElementById("error0").style.display="none";
          document.getElementById("error").style.display="none";
       
  function emailval()
	{
		var email = document.getElementById("mail").value;
	   var atposition=email.indexOf("@");
       var dotposition=email.lastIndexOf(".");
       var password=document.getElementById('pw').value;



        if(email=="null" ||email=="" || atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
        {
         document.getElementById("error0").style.display="block";

	    
         }
        else{
 		document.getElementById("error0").style.display="none";
 		        }

 		        if(password=="null" || password=="")	
	         {
	         	document.getElementById("error").style.display="block";
	         }
	         else{
	         	document.getElementById("error").style.display="none";
	         }


 		     

		}
		 

  


    </script>

</body>
</html>
