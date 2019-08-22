<?php 

	include("connect.php");
	include("function.php");
	
	$error = "";
	
	if(!logged_in())
	{
		if(isset($_POST['submit']))
		{
		
			$Business_Cat = mysqli_real_escape_string($con, $_POST['Business_Cat']);
			$Owner_fname = mysqli_real_escape_string($con, $_POST['Owner_fname']);
			$Owner_lname = mysqli_real_escape_string($con, $_POST['Owner_lname']);
			$Business_Name = mysqli_real_escape_string($con, $_POST['Business_Name']);
			$Business_Type = mysqli_real_escape_string($con, $_POST['Business_Type']);
			$Assist_fname = mysqli_real_escape_string($con, $_POST['Assist_fname']);
			$Assist_lname = mysqli_real_escape_string($con, $_POST['Assist_lname']);
			$Assist_ID = mysqli_real_escape_string($con, $_POST['Assist_ID']);
			$Assist_Phone = mysqli_real_escape_string($con, $_POST['Assist_Phone']);
			$Location = mysqli_real_escape_string($con, $_POST['Location']);

			$Hour1 = mysqli_real_escape_string($con, $_POST['Hour1']);
			$Minute1 = mysqli_real_escape_string($con, $_POST['Minute1']);
			$Hour2 = mysqli_real_escape_string($con, $_POST['Hour2']);
			$Minute2 = mysqli_real_escape_string($con, $_POST['Minute2']);
			
			$Business_Hrs1 = $Hour1.':'.$Minute1;
			$Business_Hrs = $Hour2.':'.$Minute2;
			
			$Business_Hrs = "$Hour1:$Minute1.Hrs to $Hour2:$Minute2.Hrs";
			
			/*
			echo $Business_Cat; echo '</br>';
			echo $Owner_fname; echo '</br>';
			echo $Owner_lname; echo '</br>';
			echo $Business_Name; echo '</br>';
			echo $Business_Type; echo '</br>';
			echo $Assist_fname; echo '</br>';
			echo $Assist_lname; echo '</br>';
			echo $Assist_ID; echo '</br>';
			echo $Assist_Phone; echo '</br>';
			echo $Location; echo '</br>';
			echo $Business_Hrs;
			*/
			
			date_default_timezone_set('Africa/Lusaka');
			
			$date = date("F, d Y H:i");
			
			include("connect2.php");
			$insertQuery = "INSERT INTO business_info (
			Business_Cat, 
			Owner_fname, 
			Owner_lname, 
			Business_Name, 
			Business_Type, 
			Assist_fname, 
			Assist_lname, 
			Assist_ID, 
			Assist_Phone, 
			Business_Hrs, 
			Location, 
			Date
			)
							
			VALUES (
			'$Business_Cat', 
			'$Owner_fname', 
			'$Owner_lname', 
			'$Business_Name', 
			'$Business_Type', 
			'$Assist_fname', 
			'$Assist_lname', 
			'$Assist_ID', 
			'$Assist_Phone', 
			'$Business_Hrs', 
			'$Location', 
			'$date' 
			)";
					
					if (mysqli_query($con, $insertQuery))
					
						{
							$error = "Busines Details Submited";
							
						}
						else
						{
							$error = "Error - Business name exists";
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
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
</br>
<div class="container">

<!-- col means column, md >=992px (Also use xs, sm and lg), and the 3 represents the size of the column
3 * 4 = 12 (A 6 column layout would use 2 if they had equal size) -->
	<div class="jumbotron" style="padding-top: 20px;" >
	
	
	
	<div class="row">
		<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
		 </div>
		 
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			<a href="Home.php" class = "btn btn-success btn-lg" role="button" style="width: 100%;">Refresh</a>
		</div>
		 
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			<a href="logout.php" class = "btn btn-success btn-lg" role="button" style="width: 100%;">Logout</a>
		 </div>
		 
	</div>
	
	</br>
	
	<div class="row">
		<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
			
		 </div>
		 <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12" style="text-align: center; padding-top: 16px;">
			<h3>Ministry of Finance | Vendor Business</h3>
		 </div> 
		
		 <div class="col-lg-2 col-md-8 col-sm-10 col-xs-12" style="padding-top: 12px;">
			
		 </div>
		 
  	</div>
	
	</br>	
	<div class="row" style="background-color: green; width: 100%; padding: 2px;"></div>
	
	<div class="row" style="padding: 10px;">
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			
		</div>
				
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<div id="error" style="color: blue;"><h4><?php echo $error; ?></h4></div>
			</div>
		</div>
				
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			
		</div>
		
	</div>
	
	<form action="Home.php" method="post">
	
	<div class="row" style="padding: 10px;">
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			
			<div class="inputBox" >
				<label><h4>Enter Business Details</h4></label></br>
			</div>
		</div>
		
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
			
			<div class="inputBox" >
			</div>
		</div>
		
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
			
			<div class="inputBox" >
			</div>
		</div>
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			
			<div class="inputBox" >
				<h4><a href="Query.php" >Query Business Details<a/></h4>
			</div>
		</div>
		
	</div>
	
	
	<div class="row" style="padding: 10px;">
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<div class="inputBox" >
					<select name="Business_Cat" style="padding: 6px 10px; width: 100%;" required/>
						<option value="">Select Search Category </option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						<option value="G">G</option>
						<option value="H">H</option>
						<option value="I">I</option>
						<option value="J">J</option>
						<option value="K">K</option>
						<option value="L">L</option>
						<option value="M">M</option>
						<option value="N">N</option>
						<option value="O">O</option>
						<option value="P">P</option>
						<option value="Q">Q</option>
						<option value="R">R</option>
						<option value="S">S</option>
						<option value="T">T</option>
						<option value="U">U</option>
					</select>
			</div>
			</div>
		</div>
			
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="text" name="Owner_fname" placeholder="Owner First Name" style="padding: 0px 0px 10px 20px; width: 100%;" required="">
			</div>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="text" name="Owner_lname" placeholder="Owner Last Name" style="padding: 0px 0px 10px 20px; width: 100%;" required="">
			</div>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="text" name="Business_Name" placeholder="Busines Name" style="padding: 0px 0px 10px 20px; width: 100%;" required="">
			</div>
		</div>
		</div>
		
		<div class="row" style="padding: 10px;">
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="inputBox" >
					<input type="text" name="Business_Type" placeholder="Busines Type" style="padding: 0px 0px 10px 20px; width: 100%;" required="">
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="inputBox" >
					<input type="text" name="Assist_fname" placeholder="Assistant-First Name" style="padding: 0px 0px 10px 20px; width: 100%;" >
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="text" name="Assist_lname" placeholder="Assistant-Last Name" style="padding: 0px 0px 10px 20px; width: 100%;" >
			</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="text" name="Assist_ID" placeholder="Assistant ID" style="padding: 0px 0px 10px 20px; width: 100%;" >
			</div>
			</div>
		</div>
		<div class="row" style="padding: 10px;">
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="int" name="Assist_Phone" placeholder="Assistant Phone" style="padding: 0px 0px 10px 20px; width: 100%;" >
			</div>
		</div>
			
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="text" name="Location" placeholder="Busines Location" style="padding: 0px 0px 10px 20px; width: 100%;" required="">
			</div>
		</div>
				
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" style="padding-left: 15px ; background-color: gray;">
			<label><h6> Operating Hours:</h6></label></br>
			</div>
		</div>
				
		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="padding-left: 30px;"><h5>From</h5></label></br>
			</div>
		</div>
				
		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="int" name="Hour1" placeholder="Hrs" style="padding: 0px 0px 10px 10px; width: 100%;" required="">
			</div>
		</div>
				
		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="int" name="Minute1" placeholder="Min" style="padding: 0px 0px 10px 10px; width: 100%;" required="">
			</div>
		</div>
				
		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12" style="text-align: left;">
			<div class="inputBox" >
				<label style="padding-left: 30px;"><h5>To</h5></label></br>
			</div>
		</div>
				
		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="int" name="Hour2" placeholder="Hrs" style="padding: 0px 0px 10px 10px; width: 100%;" required="">
			</div>
		</div>
				
		<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<input type="int" name="Minute2" placeholder="Min" style="padding: 0px 0px 10px 10px; width: 100%;" required="">
			</div>
		</div>
			
		</div>
		
		</br>
		<button type="submit" name="submit" style="width: 100%;" class="btn btn-primary btn-block form-control">
			Submit
		</button>
		
		
		
	</form>	
	
	</br>
	
	
		<div class="row" style="padding: 10px;">
		
			<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
				<div class="inputBox" >
					<h4><a href="Category.php?id=1" >Business Category Codes<a/></h4>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				
			</div>
			
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				
			</div>
			
		</div>
	
	
	</div>
	
	
	
	


<?php include("Nathan.php"); ?>
</div>

	<br>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
		
	
	<?php
	}
	else
	{
		header("location: login.php");
		exit();
	}

?>


	