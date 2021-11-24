	<?php
		session_start();
		require_once("connect.php");
		
		$Name = $Email = $Phone = $Address = $runQuery = $password = "";
		
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$Name = validity($_POST["Name"]);
				$Email = validity($_POST["E-mail"]);
				$Phone = validity($_POST["Phone"]);
				$Address = validity($_POST["Address"]);
				$password = validity($_POST["password"]);
				$encrypt_pass = md5(sha1($password));
				$auth_token = md5(sha1($password.$Email));
				$User_type = $_POST["user_type"];
			}
			function validity($data)
			{
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		
		//platinum
		
		$checking_email_pla= "SELECT * FROM platinum_user WHERE pemail = '$Email'";
		$query_checking_email_pla = mysqli_query($connect,$checking_email_pla) or die(mysqli_error($connect));
		
		$checking_phone_pla= "SELECT * FROM platinum_user WHERE pphn_num = '$Phone'";
		$query_checking_phone_pla = mysqli_query($connect,$checking_phone_pla) or die(mysqli_error($connect));
		
		//regular
		
		
		$checking_email_rag= "SELECT * FROM regular_user WHERE remail = '$Email'";
		$query_checking_email_rag = mysqli_query($connect,$checking_email_rag) or die(mysqli_error($connect));
		
		$checking_phone_rag= "SELECT * FROM regular_user WHERE rphn_num = '$Phone'";
		$query_checking_phone_rag = mysqli_query($connect,$checking_phone_rag) or die(mysqli_error($connect));
		
		//admin
		
		$checking_email_adm= "SELECT * FROM admin WHERE email = '$Email'";
		$query_checking_email_adm = mysqli_query($connect,$checking_email_adm) or die(mysqli_error($connect));
		
		$checking_phone_adm= "SELECT * FROM admin WHERE phn_num = '$Phone'";
		$query_checking_phone_adm = mysqli_query($connect,$checking_phone_adm) or die(mysqli_error($connect));
		
		if(mysqli_num_rows($query_checking_email_pla)>0)
		{
			header("location: signup.php?email_error");
		}
		else if(mysqli_num_rows($query_checking_phone_pla)>0)
		{
			header("location: signup.php?phn_error");
		}
		else if(mysqli_num_rows($query_checking_email_rag)>0)
		{
			
			header("location: signup.php?email_error");
		}
		else if(mysqli_num_rows($query_checking_phone_rag)>0)
		{
			header("location: signup.php?phn_error");
		}
		else if(mysqli_num_rows($query_checking_email_adm)>0)
		{
			
			header("location: signup.php?email_error");
		}
		else if(mysqli_num_rows($query_checking_phone_adm)>0)
		{
			header("location: signup.php?phn_error");
		}
		else
		{
			$insertQuery_Platinum = "INSERT INTO platinum_user (pname,pemail,pphn_num,paddress,ppassword,auth) VALUES ('$Name','$Email','$Phone','$Address','$encrypt_pass','$auth_token')";
			$insertQuery_Regular = "INSERT INTO regular_user (rname,remail,rphn_num,raddress,rpassword,auth) VALUES ('$Name','$Email','$Phone','$Address','$encrypt_pass','$auth_token')";
			
			if($User_type == "regular")
			{
					$runQuery = mysqli_query($connect,$insertQuery_Regular);
				
					if($runQuery == true)
					{
						header("location: login.php?action=true");
					}
					else
					{
						header("location: login.php?action=false");
					}
					
			}
			else
			{
				$runQuery = mysqli_query($connect,$insertQuery_Platinum);
				
				
				if($runQuery == true)
				{
					header("location: login.php?action=true");
				}
				else
				{
					header("location: login.php?action=false");
				}
			
			}
		}
	
			
			
			
		
	?>