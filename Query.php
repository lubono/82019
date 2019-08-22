<?php 

	include("connect.php");
	include("function.php");
	
	if(!logged_in())
	{
		
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
		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
		 </div>
		 
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			<a href="Query.php" class = "btn btn-success btn-lg" role="button" style="width: 100%;">Refresh</a>
		</div>
		 
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			<a href="logout.php" class = "btn btn-success btn-lg" role="button" style="width: 100%;">Logout</a>
		 </div>
		 
	</div>
	
	</br>
	
	<div class="row">
		<div class="col-lg-2 col-md-4 col-sm-8 col-xs-12">
			
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
				<label><h4>Query Business Details</h4></label>
			</div>
		</div>
		
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
		</div>
		
		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
		</div>
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >

				<h4><a href="Home.php" >Enter Business Details<a/></h4>
			</div>
		</div>
		
	</div>
	
	</br>
	
	
	
	<form action="Query.php" method="post" style="padding: 15px 10px 20px 10px; border: 1px solid green;" >

	<div class="row">

		<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12" >
			<div class="inputBox" >
					
				</div>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" >
			<div class="inputBox" >
					<select name="searchtype" style="padding: 6px 10px; width: 100%;" required/>
						<option value="">Select Search Category </option>
						<option value="Query_All">Query All</option>
						<option value="Business_Cat">Business Category</option>
						<option value="Business_Name">Business Name</option>
						<option value="Business_Type">Business Type</option>
						<option value="Owner_fname">Owner First Name</option>
						<option value="Owner_lname">Owner Last Name</option>
					</select>
			</div>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" >
			<div class="inputBox" >
					<input name="searchterm" type="text" style="padding: 6px 10px; width: 100%;"/>
			</div>
		</div>	

		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" >
			<div class="inputBox" >
					<input type="submit" name="submit" value="Query" id="form" style="padding: 6px 10px; width: 100%; background-color: gray;"/>
			</div>
		</div>	
				</br>		
	</div>
	</form>
	
	<div class="row" style="padding: 10px;">
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<div class="inputBox" >
				<h4><a href="Category.php?id=2" >Business Category Codes<a/></h4>
			</div>
		</div>
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			
		</div>
		
		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
			
		</div>
		
	</div>
	
	</div>
	
		
<?php

	if(isset($_POST['submit']))
	{
		$searchtype=$_POST['searchtype'];
		$searchterm=trim($_POST['searchterm']);
		

		if (!get_magic_quotes_gpc())
			{
			$searchtype = addslashes($searchtype);
			$searchterm = addslashes($searchterm);
			}


	
		
	if ($searchtype == 'Query_All' && $searchterm == "")
	{
		$sql = "SELECT * FROM business_info";
	}
	
	else if ($searchtype !== 'Query_All' && $searchterm == "")
	{
		echo 'You have not entered search details.  Please go back and try again.';
		exit;	}
	
	else
	{
		$sql = "SELECT * FROM business_info WHERE ".$searchtype." like '%".$searchterm."%'  ";
	}
	
	$result = $con->query($sql);
	 
	if($result) 
	{
	   
		if($result->num_rows == 0) {
			echo '<p>There are no Details Found</p>';
		}
		else {
		   
			echo '<table width="100%" margin-top: 600px;>
					 <label><h4>Busines Details</h4></label>
					<tr>
						<th>Business Category</th>
						<th>Owner First Name</th>
						<th>Owner Last Name</th>
						<th>Business Name</th>
						<th>Business Type</th>
						<th>Assistant First Name</th>
						<th>Assistant Last Name</th>
						<th>Assistant ID</th>
						<th>Assistant Phone</th>
						<th>Business Hours</th>
						<th>Location</th>
						<th>Date of Registration</th>
						
					</tr>';
	 
	
			// Print each file
			while($row = $result->fetch_assoc()) {
				echo "
					<tr>
						<td>{$row['Business_Cat']}</td>
						<td>{$row['Owner_fname']}</td>
						<td>{$row['Owner_lname']}</td>
						<td>{$row['Business_Name']}</td>
						<td>{$row['Business_Type']}</td>
						<td>{$row['Assist_fname']}</td>
						<td>{$row['Assist_lname']}</td>
						<td>{$row['Assist_ID']}</td>
						<td>{$row['Assist_Phone']}</td>
						<td>{$row['Business_Hrs']}</td>
						<td>{$row['Location']}</td>
						<td>{$row['Date']}</td>
					</tr>";
			}
	 
		   
			echo '</table>';
		}
	 
	 
		$result->free();
		}
		else
		{
			echo 'Error! SQL query failed:';
			echo "<pre>{$con->error}</pre>";
		}
		 

		$con->close();
		}
	?>


	
	
	
	


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


	