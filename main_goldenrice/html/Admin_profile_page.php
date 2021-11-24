<?php
	session_start();
	require_once("connect.php");
	$a_id = $a_name = $a_email = $a_phn_num = $a_password = $admin_data = $a_joindate = "";
	
	if(isset($_COOKIE["adminUser"]))
	{
		$curr_User = $_COOKIE["adminUser"];
						
		$chek_Query = "SELECT * FROM admin WHERE auth = '".$curr_User."' limit 1";
		$run_chek_Query = mysqli_query($connect,$chek_Query);
		if (mysqli_num_rows($run_chek_Query)===0)
		{
			setcookie("adminUser","",time()+(21600*20));
			header("location:login.php");
		}
	}
	
	
?>

<!doctype html>
<html>
<head>
	<title> goldenrice/user/Admin  </title>
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
					<li><a href="Admin_profile_page.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="Admin_profile_page.php#about_us"> ABOUT  </a></li>
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
	
	
	<section id = "banner">
		<img src = "../image/rice.jpg" alt="banner" >
	</section>
	
	
	
	
	<section id="user_info" >
		
		
		<div>
			<span>
				<?php
						if(isset($_COOKIE["adminUser"]))
						{
							$currentUser = $_COOKIE["adminUser"];
							$infoQuery = "SELECT * FROM admin WHERE auth = '".$currentUser."' limit 1";
							$run_infoQuery = mysqli_query($connect,$infoQuery);
							if ($run_infoQuery == true)
							{
								while($admin_data = mysqli_fetch_array($run_infoQuery))
								{
									$a_id = $admin_data["id"];
									$a_name = $admin_data["name"];
									$a_email = $admin_data["email"];
									$a_phn_num = $admin_data["phn_num"];
									$a_password = $admin_data["password"];
									$a_joindate = $admin_data["join_date"];
									$a_avatar = $admin_data["avatar"];
								}
							}
						}
					?>
			</span>
		</div>
		<div align="center" style='background-color : red; color : #5555ff;' id = "info">
			<?php 
				echo "<div align='right'>ID :".$a_id."<br>
					  Name :".$a_name."<br> 
					  Email :".$a_email."<br>
					  Phone number :".$a_phn_num."<br> </div>
					  
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
		
		
		
	</section>		<!-- end of user info-->

	<section id = "order_list">
		database er kaj
		<table width="100%">
			<tr>
				<th>User</th>
				<th>Address</th>
				<th>Product name</th>
				<th>Quantity</th>
				<th>price</th>
				<th>Action button</th>
			</tr>
		</table>
	
	</section>
	
	
	<details style="background-color : gray;">
		<summary>Product update er kajj </summary>
			<section id = "product_update">
				<table width="100%">
					<tr>
						<th>Product name</th>
						<th>Current price</th>
						<th>new price</th>
						<th>Action button</th>
					</tr>
				</table>
	
			</section>
	</details>
	<footer>
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
					<li><a href="Admin_profile_page.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="Admin_profile_page.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer>
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