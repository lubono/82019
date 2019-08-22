<?php

	include ("connect2.php");
	include ("function.php");
	
	
	if(logged_in())
	{
		header("location: profile.php");
		exit();
	}
	
	$error = "";
	$error1 = "";
	
	if(isset($_POST['submit']))
		{
		
			$User_name = mysqli_real_escape_string($con, $_POST['User_name']);
			$Password = mysqli_real_escape_string($con, $_POST['Password']);
			$PasswordConfirm = mysqli_real_escape_string($con, $_POST['PasswordConfirm']);
			
			
			date_default_timezone_set('Africa/Lusaka');
			
			$date = date("F, d Y H:i");
			
			/*
			if(strlen($firstName) < 3)
			{
				$error = "First name is too short";
			}
			
			else if(strlen($lastName) < 3)
			{
				$error = "Last name is too short";
			}
			else if(strlen($phone) < 10)
			{
				$error = "Please Enter 10 digit Phone number (E.g. 0950 004181)";
			}
			else if(strlen($phone) > 10)
			{
				$error = "Please Enter 10 digit Phone number (E.g. 0950 004181)";
			}
			
			else if (phone_exists($phone, $con))
			{
				$error = "Someone is already registered with this Phone Number";
			}
			
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$error = "Please enter valid email address";
			}
			else if (email_exists($email, $con))
			{
				$error = "Someone is already registered with this E-mail";
			}
			*/
			
			if(strlen($User_name) < 3)
			{
				$error = "Username is too short";
			}
			
			
			else if (User_name_exists($User_name, $con))
			{
				$error = "Someone is already registered with this Username";
			}
			
			else if(strlen($Password) < 6)
			{
				$error = "Passwords must be greater than 6 characters";
			}
			
			else if($Password !== $PasswordConfirm)
			{
				$error = "Passwords do not match";
			}
			
			
			else 
			{
				$Password = md5($Password);
				
								
					$insertQuery = "INSERT INTO users (User_name, Password, Date)
									VALUES ('$User_name', '$Password', '$date' )";
					
					if (mysqli_query($con, $insertQuery))
					
						{
							$error = "You are successfully registered";
							
						}
						else
						{
							$error = "Failed to Register";
						}
						
					
				
			}
			
			
			
		}
		
	

?>




<!-- You can create scalable multi-column layouts with up to 12 columns. Scaling is focused on screens < 768px, >= 768px, >=992px and >1200px -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Ministry of Finance-Vendor_Business</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
</br>
<div class="container">

<!-- col means column, md >=992px (Also use xs, sm and lg), and the 3 represents the size of the column
3 * 4 = 12 (A 6 column layout would use 2 if they had equal size) -->
	<div class="jumbotron" style="padding-top: 20px;">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			
		 </div>
		  <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12" style="padding-top: 12px;">
			<h2>MoF - Vendor Business | Register</h2>
		 </div>
		 
		 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			
		 </div>
  	</div>
	</br>
	<div class="row" style="background-color: gray; padding:  8px 0 8px 0;">
		
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			<div class="btn-group btn-group-lg" role="group" aria-label="...">
				<a href="index.php" class = "btn btn-primary btn-lg" role="button" style="width: 100%;">Register....</a>
			</div>	
		</div>
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			<div class="btn-group btn-group-lg" role="group" aria-label="...">
				<a href="login.php" class = "btn btn-primary btn-lg" role="button" style="width: 100%;">Login....</a>
			</div>	
		</div>
		<div class="col-lg-1 col-md-3 col-sm-6 col-xs-12">
			
		</div>
		
		<div class="col-lg-7 col-md-3 col-sm-6 col-xs-12">
			<div id="error" style="color: yellow;"><h4><?php echo $error; ?></h4></div>
		</div>
	</div>
	
	
	</br>
	<div class="row">
		<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
			
		 </div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<form method="POST" action="index.php" enctype="multipart/form-data" >
				
				<div class="form-group">
					<input type="text" name="User_name"  placeholder="Enter Username" class="form-control" required/>
				</div> 
				
				<div class="form-group">
					<input type="password" name="Password"  placeholder="Enter Password" class="form-control" required/>
				</div> 
				
				<div class="form-group">
					<input type="password" name="PasswordConfirm"  placeholder="Confirm Password" class="form-control" required/>
				</div> 
				
			
				<button type="submit" name="submit" value="Register" class="btn btn-primary btn-block form-control">
					Register
				</button>
			</form> 
		 </div>
		 <div class="col-lg-5 col-md-3 col-sm-6 col-xs-12">

		 </div>
		 
  	</div>
	
	</div>
	<?php include("Nathan.php"); ?>
</div>

	<br>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>