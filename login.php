<?php

	include ("connect.php");
	include ("function.php");
	$error = "";
	
	if(logged_in())
	{
		header("location: Already.php");
		exit();
	}
	else
	
	{
		if(isset($_POST['submit']))
		{
		
			$User_name = mysqli_real_escape_string($con, $_POST['User_name']);
			$Password = mysqli_real_escape_string($con, $_POST['Password']);
			
			//echo $Password; echo '</br>';
			$Password = md5($Password);
			
			$result = mysqli_query($con, "SELECT Password FROM users WHERE User_name = '$User_name' ");
			$retrievePassword = mysqli_fetch_assoc($result);
			$UserPassword = $retrievePassword['Password'];
			
			//echo $User_name; echo '</br>';
			//echo $UserPassword; echo '</br>';
			//echo $Password; echo '</br>';
			
			
			if (!User_name_exists($User_name, $con))
			{
				$error = "Username does not exist";
			}
			
			else if ($Password == $UserPassword)
			{
				header("location: Home.php");
				exit();
			}
			
			else
			
			{
				$error = "Wrong Password";
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
			<h2>MoF - Vendor Business | Sign-in</h2>
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
			<form method="POST" action="login.php" enctype="multipart/form-data" >
				
				<div class="form-group">
					<input type="text" name="User_name"  placeholder="Enter Username" class="form-control" required/>
				</div> 
				
				<div class="form-group">
					<input type="password" name="Password"  placeholder="Enter Password" class="form-control" required/>
				</div> 
				
				<button type="submit" name="submit" value="Login" class="btn btn-primary btn-block form-control">
					Login
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