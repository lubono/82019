<?php
	//For disconnecting a sessions
	include ("connect.php");
	include ("function.php");
	

		
		session_destroy();//ending the session (logout)
		header("location: login.php");//redirecting to the login page
		exit();
		

?>
