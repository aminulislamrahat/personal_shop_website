<?php
	session_start();
	require_once("connect.php");
	
		$Email = $password = "";
		
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				
				$Email = validity($_POST["E-mail"]);
				$password = validity($_POST["password"]);
				$create_auth = md5(sha1($password.$Email));
			}
			function validity($data)
			{
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				
				return $data;
			}
		
		//platinum
		
		$checking_pla= "SELECT * FROM platinum_user WHERE  auth = '".$create_auth."' limit 1";
		$query_checking_pla = mysqli_query($connect,$checking_pla) or die(mysqli_error($connect));
		
		//regular
		
		$checking_rag= "SELECT * FROM regular_user WHERE auth = '".$create_auth."' limit 1";
		$query_checking_rag = mysqli_query($connect,$checking_rag) or die(mysqli_error($connect));
		
		//admin
		
		$checking_adm= "SELECT * FROM admin WHERE auth = '".$create_auth."' limit 1";
		$query_checking_adm = mysqli_query($connect,$checking_adm) or die(mysqli_error($connect));
		
		if(mysqli_num_rows($query_checking_pla)>0)
		{
			setcookie("platiUser",$create_auth,time()+(21600));
			header("location:platinum_profile.php");
		}
		
		else if(mysqli_num_rows($query_checking_rag)>0)
		{
			
			setcookie("reguUser",$create_auth,time()+(21600));
			header("location:regular_profile.php");
		}
		
		else if(mysqli_num_rows($query_checking_adm)>0)
		{
			
			setcookie("adminUser",$create_auth,time()+(21600));
			header("location:Admin_profile_page.php");
		}
		
		
		else
		{
			header("location: login.php?info_error");
		}
	
			
				
			
		
	?>