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


.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: grey;
  color: black;
}

.topnav a.active {
  background-color: #820404;
  color: white;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  text-align:left;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  
}
.text{
  color: white;
  text-align: center;
  
  text-decoration: none;
}
.footer {
  background-color: black;
   color: white;
  height:400px;
  padding-top:20px; 
  bottom:0;
}
.mid {
  background-color: white;
   color: white;
  height:1750px;
  padding-top:20px; 
  bottom:0;
}
input[type=submit]{
	
	border:none;
	height:30px;
	background:black;
	color:white;
	font-size:15px;
	font-weight:bold;
	cursor:pointer;
}

input[type=file]::-webkit-file-upload-button {
 padding:60 30;
 color:white;
 background-color:black;
 border:none;
 font-size:15px;
 height:30px;
font-weight:bold;
cursor:pointer;
}
a{
		text-decoration:none;
		color:white;
		
	}
	div#updateform
	{
		display : none;
		
	}
</style>
<body>	

		<div >
			<div align="center">
				<a href="goldenrice_home.php"> <img src = "image/goldenrice_logo2.png" alt="logo" width="400"  > </a>
				
			</div>
		
		
			<div class="topnav">
                    <a href="goldenrice_home.php" style="width:11%"> HOME </a>
					<a href="all_products.php" style="width:11%"> PRODUCTS </a>
					<a href="goldenrice_home.php#services" style="width:11%"> SERVICES </a>
					<a href="album.php" style="width:11%"> ALBUM </a>
					<a href="goldenrice_home.php#cont_shop" style="width:11%"> CONTACT </a>
					<a href="goldenrice_home.php#address" style="width:11%"> ADDRESS </a>
					<a href="journal.php" style="width:11%"> JOURNALS </a>
					<a href="goldenrice_home.php#about_us" style="width:11%"> ABOUT  </a>
					<?php
						require_once("show_profileName.php");
					?>
					
	</div> <!-- end of header-->
	
	
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
	</div><br>
	<div align="center" style='background-color :black; color : white; font-size:200%;width:20%;height:60px;font-weight:bold'>
		<?php 
				echo "Welcome ".$a_name."<br> "
				?>
		</div><br>
			<?php 
				echo " <div class='row'  >
					  <div class='column'  > 
						<img src = 'avatar/".$a_avatar."' alt='propic' width='200px'>
						<div style='background-color:#7c8182;padding:10px 10px ;position:absolute;'>
						<form enctype='multipart/form-data' action='update_propic_core.php' method='POST'>
							<input type='file' name='avatar'>
							<input type='submit' name='submit_avatar' value='upload' id='upload_bt'>
						</form><br>
						<div class='row'>
						<div style='background-color:black;font-size:20px;font-weight:bold;width:50%'>
						<a href = 'changepassword.php'>Change Password</a></div><br>
					  
					  <button onclick='myFunction()' style='background-color:black;color:white;border:none;height:30px;font-size:15px;font-weight:bold'>
					  Update info</button>
					  <div id = 'updateform' >
						
						<div>
						<form method='POST' action='update_name_core.php'>
							<div style='font-size:25px;font-weight:bold;'><label for='Name'>Name : </label><br>
							<input  type='text' required autocomplete='off' name='Name' id='Name'><br></div>
							<div><input type='submit' name='confirm_name' value='Confirm Name'></div><br>
						</form>
						</div>
						<div>
						<form method='POST' action='update_address_core.php'>
							<div style='font-size:25px;font-weight:bold;'><label for='Address'>Address : </label><br>
							<input type='text' required  autocomplete='off' name='Address' id='Address'><br></div>
							<div><input type='submit' name='confirm_address' value='confirm_address'></div><br>
						</form>
						</div>
						<button onclick='closeform()' style='background-color:black;color:white;border:none;height:30px;font-size:15px;font-weight:bold'>Cancel</button>
		
					</div>
					</div>
					
						</div>
					  </div><br><br><br><br>
						
				 <div class='column' style='background-color:#7c8182;padding:80px 30px;font-size:150%;font-weight:bold;'>
				    
					ID :".$a_id."<br>
					 
					  Email :".$a_email."<br>
					  Phone number :".$a_phn_num."<br>
					  Address :".$a_address."<br>
					  Total order :".$a_totalOrder."<br>
					  Total point :".$a_point."<br>
					 
					  
					  </div>
					  
					  </div><br><br><br>";
			
			
			?> <!-- password will not be shown-->
	</div>
	
	

<div class="row" style="background-color:white" >
 <div class="column">
 </div>
</div>
	
 <div class="footer">
 <div class="row">
   <div class="column">
     <h1></h1><br>
	 <h1 style="color:white;font-size:200%"><center>Follow Us</center></h1>
	<div align="center"><br>
     
                 <a href="goldenrice_home.php"> <img src = "image/facebook2.png" alt="logo" width="42"  > </a>
				<a href="goldenrice_home.php"> <img src = "image/insta.png" alt="logo" width="50"  > </a>
				<a href="goldenrice_home.php"> <img src = "image/twitter.png" alt="logo" width="45"  > </a>
				<a href="goldenrice_home.php"> <img src = "image/gmail.png" alt="logo" width="45"  > </a>
			
      </div> 
 
  </div> 

   <div class="column">
	<br><br>
	      <div align="center" >
			        <a href="goldenrice_home.php" style="color:white;width:11%;text-decoration:none" > HOME </a><br><br>
					<a href="all_products.php" style="color:white;text-decoration:none"> PRODUCTS </a><br><br>
					<a href="goldenrice_home.php#services" style="color:white;text-decoration:none"> SERVICES </a><br><br>
					<a href="album.php" style="color:white;text-decoration:none"> ALBUM </a><br><br>
					<a href="goldenrice_home.php#cont_shop" style="color:white;text-decoration:none"> CONTACT </a><br><br>
					<a href="goldenrice_home.php#address" style="color:white;text-decoration:none"> ADDRESS </a><br><br>
					<a href="journal.php" style="color:white;text-decoration:none"> JOURNALS </a><br><br>
					<a href="goldenrice_home.php#about_us" style="color:white;text-decoration:none"> ABOUT  </a><br><br>
					<a href="#" style="color:white;text-decoration:none"> LOGIN </a>
			 </div> 
			
  </div> 
  <div class="column" id="cont_shop">
	<h1 style="color:white;font-size:200%"><center>Contact us</center></h1>
	
				<label for="name">Name : </label><br>
				<input type="text" name="name" id="name"><br><br>
				<label for="E-mail">E-mail : </label><br>
				<input type="email"  name="E-mail" id="E-mail"><br><br>
				<label for="massage"> Write messege : </label>
				<textarea name="messege" id="messege" cols="30" rows="10"></textarea><br>
				<input type="button" value="SEND">	
			
  </div> 
 </div>
</div> <!-- end of footer-->
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