<?php

	function User_name_exists($User_name, $con)
	{
		$result = mysqli_query($con, "SELECT User_ID FROM users WHERE User_name='$User_name'");
		
		if(mysqli_num_rows($result) == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	function logged_in()
	{
			
			if(isset($_SESSION['User_name']) || isset($_COOKIE['User_name']))
			
			{
				return true;
			}
			else
			{
				return false;
			}
	}

	
	
?>