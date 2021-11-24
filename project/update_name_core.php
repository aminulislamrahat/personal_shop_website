<?php
	session_start();
	require_once("connect.php");
	
			$Name = "";
		
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$Name = validity($_POST["Name"]);
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
				
				$avatar_update_query = "UPDATE admin SET name = '".$Name."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:Admin_profile_page.php#info");
				}
			}
			else if(isset($_COOKIE["platiUser"]))
			{
				$currentUser = $_COOKIE["platiUser"];
				
				$avatar_update_query = "UPDATE platinum_user SET pname = '".$Name."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:platinum_profile.php#infop");
				}
			}
			else if(isset($_COOKIE["reguUser"]))
			{
				$currentUser = $_COOKIE["reguUser"];
				
				$avatar_update_query = "UPDATE regular_user SET rname = '".$Name."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:regular_profile.php#infop");
				}
			}
			
		?>