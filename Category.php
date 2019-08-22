<?php 

	include("connect.php");
	include("function.php");
	
	if(!logged_in())
	{
		if(isset($_GET['id']))
		{
			$id = intval($_GET['id']);
			if ($id == 1){$GoBack = 'Home.php';}
			if ($id == 2){$GoBack = 'Query.php';}
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

	<style>
		table 
			{
				align="center"
				margin-top: 50px;
				border: 1px solid;
			}
			
		table label
		{
			text-align: center;
		}
		table tr:nth-child(even)
			{
				
			background-color: #eee;
			}
			
		table tr:nth-child(odd) 
			{
			background-color: #cccccc;
			}
			
		table th 
			{
				background-color: gray;
				color: white;
				border: 1px solid;
			}
			
		 table, th, td 
			 {
				text-align: center;
				
				font-size: 20px;
				margin-left: 50x;
				margin-top: 5px;
				border: 1px solid;
				
			 }
	</style>

</head>
<body>
</br>
<div class="container">

<!-- col means column, md >=992px (Also use xs, sm and lg), and the 3 represents the size of the column
3 * 4 = 12 (A 6 column layout would use 2 if they had equal size) -->
	<div class="jumbotron" style="padding-top: 20px;" >
	
	
	
	<div class="row">
		<div class="col-lg-8 col-md-3 col-sm-6 col-xs-12">
		 </div>
		 
		<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
			<a href= <?php echo $GoBack ?> class = "btn btn-success btn-lg" role="button" style="width: 100%;">Go Back</a>
		</div>
		 
		<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
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
	
	</br>
	
	<div class="row">
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label><h4>Business Category Codes</h4></label>
			</div>
		</div>
		
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
		</div>
				
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label><h4>International Standard Industrial Classification</h4></label>
			</div>
		</div>
		
	</div>
	
	<div class="row" style="background-color: gray; width: 100%; padding: 1px;"></div>
	
	</br>
	
	<div class="row">
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>A. Agriculture, forestry and fishing</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>B. Mining and quarrying</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>C. Manufacturing</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>D. Electricity, gas, steam and air conditioning supply</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>E. Water supply; sewerage, waste management and remediation activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>F. Construction</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>G. Wholesale and retail trade; repair of motor vehicles and motorcycles</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>H. Transportation and storage</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>I. Accommodation and food service activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>J. Information and communication</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>K. Financial and insurance activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>L. Real estate activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>M. Professional, scientific and technical activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>N. Administrative and support service activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>O. Public administration and defence; compulsory social security</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>P. Education</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>Q. Human health and social work activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>R. Arts, entertainment and recreation</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>S. Other service activities</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>T. Activities of households as employers; undifferentiated goods- and services-producing activities of households for own use</h4></label>
			</div>
		</div>
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<label style="color: blue;"><h4>U. Activities of extraterritorial organizations and bodies</h4></label>
			</div>
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


	