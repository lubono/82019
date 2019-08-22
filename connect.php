<?php
	//Fields after "localhost", "Username", "Password",
	//Responsible for creating account and login page
	//Creating and maintaining sessions
	$con = mysqli_connect("localhost", "root", "", "vendor_business"); 
	
	if (mysqli_connect_errno()){
		echo "Error occured while connecting with database".mysqli_connect_errno();
	}
	
	session_start();
	
			
		$timeout = 1800; // Number of seconds until it times out.
		 
		// Check if the timeout field exists.
		if(isset($_SESSION['timeout'])) 
		{
			// See if the number of seconds since the last
			// visit is larger than the timeout period.
			$duration = time() - (int)$_SESSION['timeout'];
			if($duration > $timeout) 
			{
				header("location: logout.php");
				// Destroy the session and restart it.
				//session_destroy();
				//session_start();
							}
		}
		 
		// Update the timout field with the current time.
		$_SESSION['timeout'] = time();
	
?>