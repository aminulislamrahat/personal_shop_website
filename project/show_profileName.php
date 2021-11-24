<?php

		if(isset($_COOKIE["adminUser"]))
		{
			$currentUser1 = $_COOKIE["adminUser"];
			$infoQuery1 = "SELECT name FROM admin WHERE auth = '".$currentUser1."' limit 1";
			$run_infoQuery1 = mysqli_query($connect,$infoQuery1);
			if ($run_infoQuery1 == true)
			{
				while($admin_data1 = mysqli_fetch_array($run_infoQuery1))
				{
					$p_name = $admin_data1["name"];
				}
			}
			echo "<a href='Admin_profile_page.php'>". $p_name ."</a>";
			echo "<a href='logout_core.php'> LOGOUT </a>";
		}
		else if(isset($_COOKIE["platiUser"]))
		{
			$currentUser1 = $_COOKIE["platiUser"];
			$infoQuery1 = "SELECT pname FROM platinum_user WHERE auth = '".$currentUser1."' limit 1";
			$run_infoQuery1 = mysqli_query($connect,$infoQuery1);
			if ($run_infoQuery1 == true)
			{
				while($admin_data1 = mysqli_fetch_array($run_infoQuery1))
				{
					$p_name = $admin_data1["pname"];
				}
			}
			echo "<a href='platinum_profile.php'>". $p_name ."</a>";
			echo "<a href='logout_core.php'> LOGOUT </a>";
		}
		else if(isset($_COOKIE["reguUser"]))
		{
			$currentUser1 = $_COOKIE["reguUser"];
			$infoQuery1 = "SELECT rname FROM regular_user WHERE auth = '".$currentUser1."' limit 1";
			$run_infoQuery1 = mysqli_query($connect,$infoQuery1);
			if ($run_infoQuery1 == true)
			{
				while($admin_data1 = mysqli_fetch_array($run_infoQuery1))
				{
					$p_name = $admin_data1["rname"];
				}
			}
			echo "<a href='regular_profile.php'>". $p_name ."</a>";
			echo "<a href='logout_core.php'> LOGOUT </a>";
		}
		else
		{
			echo "<li><a href='login.php'> LOGIN </a></li>";
		}
	
	


?>
