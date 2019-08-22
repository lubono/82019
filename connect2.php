<?php
	//connecting to the database
	$con = mysqli_connect("localhost", "root", "", "vendor_business");
	
	if (mysqli_connect_errno()){
		echo "Error occurred while connecting with database".mysqli_connect_errno();
	}
	
	
	
		
?>