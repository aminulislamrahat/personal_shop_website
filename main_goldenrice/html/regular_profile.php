<?php
	session_start();
	require_once("connect.php");
	$a_id = $a_name = $a_email = $a_phn_num = $a_password = $admin_data = $a_joindate = $a_address = $a_avatar = $a_point = $a_totalOrder = "";
	
	if(isset($_COOKIE["reguUser"]))
	{
		$curr_User = $_COOKIE["reguUser"];
						
		$chek_Query = "SELECT * FROM regular_user WHERE auth = '".$curr_User."' limit 1";
		$run_chek_Query = mysqli_query($connect,$chek_Query);
		if (mysqli_num_rows($run_chek_Query)===0)
		{
			setcookie("reguUser","",time()+(21600*20));
			header("location:login.php");
		}
	}
	
?>


<!doctype html>
<html>
<head>
	<title> goldenrice/user/regular  </title>
</head>
<style>
	div#updateform
	{
		display : none;
	}
</style>
<body>	
	<header>
		<div >
			<div align="center">
				<a href="goldenrice_home.php"> <img src = "../image/goldenrice_logo2.png" alt="logo" width="400"  > </a>
				
			</div>
		
		
			<nav>
				<ul>
					<li><a href="goldenrice_home.php"> HOME </a></li>
					<li><a href="all_products.php"> PRODUCTS </a></li>
					<li><a href="goldenrice_home.php#services"> SERVICES </a></li>
					<li><a href="album.php"> ALBUM </a></li>
					<li><a href="regular_profile.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="regular_profile.php#about_us"> ABOUT  </a></li>
					<?php
						require_once("show_profileName.php");
					?>
					
				</ul>
			</nav>
			<div>
				<ul>
					<li><a href="#">icon</a></li>
					<li><a href="#">icon</a></li>
					<li><a href="#">icon</a></li>
				</ul>
			</div>
		</div>
	</header> <!-- end of header-->
	
	
	
	<div>
		<span>
			<?php
				if(isset($_COOKIE["reguUser"]))
				{
					$currentUser = $_COOKIE["reguUser"];
					$infoQuery = "SELECT * FROM regular_user WHERE auth = '".$currentUser."' limit 1";
					$run_infoQuery = mysqli_query($connect,$infoQuery);
					if ($run_infoQuery == true)
					{
						while($admin_data = mysqli_fetch_array($run_infoQuery))
						{
							$a_id = $admin_data["rid"];
							$a_name = $admin_data["rname"];
							$a_email = $admin_data["remail"];
							$a_phn_num = $admin_data["rphn_num"];
							$a_address = $admin_data["raddress"];
							$a_password = $admin_data["rpassword"];
							$a_joindate = $admin_data["rjoin_date"];
							$a_totalOrder = $admin_data["rtotal_order"];
							$a_point = $admin_data["rpoint"];
							$a_avatar = $admin_data["avatar"];
						}
					}
				}
			?>
		</span>
	</div>
	<div align="center" style='background-color : red; color : #5555ff;' id = "pinfo">
			<?php 
				echo "<div align='right'>ID :".$a_id."<br>
					  Name :".$a_name."<br> 
					  Email :".$a_email."<br>
					  Phone number :".$a_phn_num."<br>
					  Address :".$a_address."<br>
					  Total order :".$a_totalOrder."<br>
					  Total point :".$a_point."<br></div>
					  <div><a href = 'changepassword.php'>Change_password</a></div>
					  
					  <button onclick='myFunction()'>Update info</button>
					  <div id = 'updateform' >
						
						<div>
						<form method='POST' action='update_name_core.php'>
							<div><label for='Name'>Name : </label><br>
							<input  type='text' required autocomplete='off' name='Name' id='Name'><br></div>
							<div><input type='submit' name='confirm_name' value='confirm_name'></div>
						</form>
						</div>
						
						
						<div>
						<form method='POST' action='update_address_core.php'>
							<div><label for='Address'>Address : </label><br>
							<input type='text' required  autocomplete='off' name='Address' id='Address'><br></div>
							<div><input type='submit' name='confirm_address' value='confirm_address'></div>
						</form>
						</div>
						<button onclick='closeform()'>Cancel</button>
		
					</div>
					  
					  
					 
					  <div align='left' > 
						<img src = 'avatar/".$a_avatar."' alt='propic' width='300px'>
						<form enctype='multipart/form-data' action='update_propic_core.php' method='POST'>
							<input type='file' name='avatar'>
							<input type='submit' name='submit_avatar' value='upload' id='upload_bt'>
						</form>
					  </div>";
			
			
			?> <!-- password will not be shown-->
	</div>
	
	
	
	
	<footer> <!-- start of footer-->
		<div id="about_us">
			<h2>About us</h2>
			<p>kichu kotha about dokan</p>
		</div>
		<div id="cont_shop">
			<div>
				<h2>Contact Number</h2>
				<ul>
					<li>number1</li>
					<li>number2</li>
					<li>number3</li>
				</ul>
			</div>
			<div >
				<h2>Follow us</h2>
				<ul>
					<li><a href="#"> Facebook logo </a></li>
					<li><a href="#"> twitter logo </a></li>
					<li><a href="#"> g-mail logo </a></li>
					<li><a href="#"> foodpanda logo </a></li>
				</ul>
			</div>
			<div >
				<h2>Contact us</h2>
				<label for="name">Name : </label><br>
				<input type="text" name="name" id="name"><br><br>
				<label for="E-mail">E-mail : </label><br>
				<input type="email"  name="E-mail" id="E-mail"><br><br>
				<label for="massage"> Write messege : </label>
				<textarea name="messege" id="messege" cols="30" rows="10"></textarea><br>
				<input type="button" value="SEND">
			</div>
		</div>
		<div id="copy_right">
			<p>copyright massage </p>
			<div>
				<ul>
					<li><a href="goldenrice_home.php"> HOME </a></li>
					<li><a href="all_products.php"> PRODUCTS </a></li>
					<li><a href="goldenrice_home.php#services"> SERVICES </a></li>
					<li><a href="album.php"> ALBUM </a></li>
					<li><a href="regular_profile.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="regular_profile.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer> <!-- end of footer-->
	<script>
		function myFunction()
		{
			document.getElementById("updateform").style.display = "block";
		}
		function closeform()
		{
			document.getElementById("updateform").style.display = "none";
		}
	</script>
</body>
</html>