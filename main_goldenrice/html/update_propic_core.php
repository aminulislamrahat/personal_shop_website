<?php
	session_start();
	require_once("connect.php");
	
			$proPic_name = $proPic_tmpName = $location = "";

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$proPic_name = $_FILES["avatar"]["name"];
				$proPic_tmpName = $_FILES["avatar"]["tmp_name"];
				$location = "Avatar/";
				$nameForDB = uniqid().".jpg";
				move_uploaded_file($proPic_tmpName,$location."$nameForDB");
			}
			if(isset($_COOKIE["adminUser"]))
			{
				$currentUser = $_COOKIE["adminUser"];
				
				$avatar_update_query = "UPDATE admin SET avatar = '".$nameForDB."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:Admin_profile_page.php#info");
				}
			}
			else if(isset($_COOKIE["platiUser"]))
			{
				$currentUser = $_COOKIE["platiUser"];
				
				$avatar_update_query = "UPDATE platinum_user SET avatar = '".$nameForDB."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:platinum_profile.php#infop");
				}
			}
			else if(isset($_COOKIE["reguUser"]))
			{
				$currentUser = $_COOKIE["reguUser"];
				
				$avatar_update_query = "UPDATE regular_user SET avatar = '".$nameForDB."' WHERE auth = '".$currentUser."'";
				$run_avatar_update_query = mysqli_query($connect,$avatar_update_query);
				if($run_avatar_update_query == true)
				{
					header("location:regular_profile.php#infop");
				}
			}
			
		?>