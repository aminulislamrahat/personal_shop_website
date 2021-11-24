<?php
	session_start();
	require_once("connect.php");
	
			$Address = "";
		
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$Address = validity($_POST["Address"]);
			}
			function validity($data)
			{
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			if(isset($_COOKIE["adminUser"]))
			{
				$currentUser = $_COOKIE["adminUser"];
				
				$avatar_update_query = "UPDATE admin SET address = '".$Address."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:Admin_profile_page.php#info");
				}
			}
			else if(isset($_COOKIE["platiUser"]))
			{
				$currentUser = $_COOKIE["platiUser"];
				
				$avatar_update_query = "UPDATE platinum_user SET paddress = '".$Address."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:platinum_profile.php#infop");
				}
			}
			else if(isset($_COOKIE["reguUser"]))
			{
				$currentUser = $_COOKIE["reguUser"];
				
				$avatar_update_query = "UPDATE regular_user SET raddress = '".$Address."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:regular_profile.php#infop");
				}
			}
			
		?>