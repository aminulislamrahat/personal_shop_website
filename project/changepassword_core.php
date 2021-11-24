<?php
	session_start();
	require_once("connect.php");
	
	$a_email = $generateAuth = $newAuth = $haspass = $run_update_pass_query = $update_pass_query = "";
	
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$old_pass = validity($_POST["old_pass"]);
				$new_pass = validity($_POST["new_pass"]);
				$conf_pass = validity($_POST["conf_pass"]);
			}
			function validity($data)
			{
				$data = trim($data);
				$data = htmlentities($data);
				return $data;
			}
	
	
	
			if(isset($_COOKIE["adminUser"]))
			{
				$getcurrent_admin_User = $_COOKIE["adminUser"];
				
				
				$checking_adm= "SELECT * FROM admin WHERE auth = '".$getcurrent_admin_User."' limit 1";
				$query_checking_adm = mysqli_query($connect,$checking_adm) or die(mysqli_error($connect));
		
				if ($query_checking_adm == true)
				{
					while($admin_data = mysqli_fetch_array($query_checking_adm))
					{
					
						$a_email = $admin_data["email"];
						
					}
				}
				
				$generateAuth = md5(sha1($old_pass.$a_email));
				
				
				if ($generateAuth == $getcurrent_admin_User && $new_pass == $conf_pass)
				{
					$haspass = md5(sha1($conf_pass));
					$newAuth = md5(sha1($conf_pass.$a_email));
					
			
					$update_pass_query = "UPDATE admin SET password = '$haspass', auth ='$newAuth' WHERE email = '$a_email'";
					$run_update_pass_query = mysqli_query($connect,$update_pass_query) or die(mysqli_error($connect));
				
					if($run_update_pass_query == true)
					{
						setcookie("adminUser","",time()+(21600*20)); //logout
					
						setcookie("adminUser",$newAuth,time()+(21600)); //login
						header("location:changepassword.php?change_password=password changed !");
					
					}
				}
				else
				{
					header("location: changepassword.php?dontmatch=password did not match !!!");
					
				}
				
			}
			else if(isset($_COOKIE["platiUser"]))
			{
				$getcurrent_Pla_User = $_COOKIE["platiUser"];
				
				$checking_pla= "SELECT * FROM platinum_user WHERE  auth = '".$getcurrent_Pla_User."' limit 1";
				$query_checking_pla = mysqli_query($connect,$checking_pla) or die(mysqli_error($connect));
				
				if ($query_checking_pla == true)
				{
					while($admin_data = mysqli_fetch_array($query_checking_pla))
					{
					
						$a_email = $admin_data["pemail"];
						
					}
				}
				
				$generateAuth = md5(sha1($old_pass.$a_email));
				
				
				if($generateAuth == $getcurrent_Pla_User && $new_pass == $conf_pass )
				{
					$haspass = md5(sha1($conf_pass));
					$newAuth = md5(sha1($conf_pass.$a_email));
			
					
			
					$update_pass_query = "UPDATE platinum_user SET ppassword = '$haspass', auth ='$newAuth' WHERE pemail = '$a_email'";
					$run_update_pass_query = mysqli_query($connect,$update_pass_query) or die(mysqli_error($connect));
				
					if($run_update_pass_query == true)
					{
						setcookie("platiUser","",time()+(21600*20)); //logout
					
						setcookie("platiUser",$newAuth,time()+(21600)); //login
						header("location:changepassword.php?change_password=password changed !");
					
					}
			
				}
				else
				{
					header("location: changepassword.php?dontmatch=password did not match !!!");
					
				}
		
			}
			else if(isset($_COOKIE["reguUser"]))
			{
				$getcurrent_reg_User = $_COOKIE["reguUser"];
				
				
			
		
				$checking_rag= "SELECT * FROM regular_user WHERE auth = '".$getcurrent_reg_User."' limit 1";
				$query_checking_rag = mysqli_query($connect,$checking_rag) or die(mysqli_error($connect));
				
				if ($query_checking_rag == true)
				{
					while($admin_data = mysqli_fetch_array($query_checking_rag))
					{
					
						$a_email = $admin_data["remail"];
					
					}
				}
				
				$generateAuth = md5(sha1($old_pass.$a_email));
				
				
				if ($generateAuth == $getcurrent_reg_User && $new_pass == $conf_pass)
				{
					$haspass = md5(sha1($conf_pass));
					$newAuth= md5(sha1($conf_pass.$a_email));
					
			
					$update_pass_query = "UPDATE regular_user SET rpassword = '$haspass', auth ='$newAuth' WHERE remail = '$a_email'";
					$run_update_pass_query = mysqli_query($connect,$update_pass_query) or die(mysqli_error($connect));
				
					if($run_update_pass_query == true)
					{
						setcookie("reguUser","",time()+(21600*20)); //logout
					
						setcookie("reguUser",$newAuth,time()+(21600)); //login
						header("location:changepassword.php?change_password=password changed !");
					
					}
				}
				else
				{
					header("location: changepassword.php?dontmatch=password did not match !!!");
					
				}
			}
			
		

		
		
?>
