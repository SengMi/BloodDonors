<?php session_start(); ?>
<?php include('../dbcon.php'); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="userstyles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>

<body>

	<div class="container h-100" >
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" style="background-color: rgb(255,97,97,56%)">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/ico.png" class="brand_logo" alt="Logo">
						<span><h4><b>သွေးလှူကြစို့...</b></h4></span>
					</div>
				</div>
				
				
				<div class="d-flex justify-content-center form_container">
					
					<form action="#" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="အမည်" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="စကားဝှက်" required>
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="userlogin" style="border-radius: 8px" class="btn login_btn">ဝင်ရောက်မည်</button>
				   </div>
					</form>
				</div>
				
				<?php
	if (isset($_POST['userlogin']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM donor WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:userdashboard.php');
					
				}
			else
				{
					echo '
								<div class="alert alert-danger alert-dismissible">
                                        Invalid Username & Password.
                                    </div> ';
				}
		}
  ?>
				
				
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="useraddblood.php"  class="ml-2" style="text-decoration:none">အကောင့်အသစ်ဖွင့်မည်။</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="../" style="text-decoration:none; color: #8A0302;">Back to Admin Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>



</html>

