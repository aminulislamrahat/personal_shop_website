<?php
	session_start();
	require_once("connect.php");
?>

<!doctype html>
<html>
<head>
	<title> goldenrice/Signup  </title>
	
</head>
<style>
body{
	margin:0;
	padding:0;
	background-image:url(rice1.jpg);
	-webkit-background-size:cover;
	background-size:cover;
	font-family:Poppins;
}
.wrapper{
	width:420px;
	height:650px;
	color:#000;
	top:50%;
	left:50%;
	padding:40px 30px;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	box-shadow:8px 8px 50px #000;
}
.box{
position:absolute;
}
.box select{
	font-size:20px;
	height:35px;
	width:75%;
}
.wrapper input{
	width:100%;
	margin-bottom:20px;
}
.wrapper input[type=text],.wrapper input[type=email], .wrapper input[type=tel],.wrapper input[type=password]{
	width:80%;
	height:30px;
	font-size:20px;
	opacity:1;
	color:black;
	
}
.wrapper input[type=submit]{

border:none;
	outline:none;
	height:45px;
	background:black;
	color:white;
	font-size:25px;
	font-weight:bold;
}
.wrapper input[type=submit]:hover{
	cursor:pointer;
}
.wrapper a{
   font-size:18px;
   text-decoration:none;
   color:#fff;
   opacity:1;   
}
#overley-area{
	position:absolute;
	background-color:rgba(0,0,0,0.2);
	z-index:-5;
	height:100%;
	width:100%;
	top:0;
	bottom:0;
	
}
</style>
<body>
	
	
	
	
	<div class="wrapper">
	<div align="logo">
				<a href="goldenrice_home.php"> <img src = "image/goldenrice_logo2.png" alt="logo" width="270" height="100" > </a>
				
			</div>
		<form method="POST" action="savedata_core.php">
			
			
					
				<div class="box">
				  
					   <select required name="user_type" id="user_type" >
						<option disabled selected>Select a user type</option>
						<option value = "regular" >Regular user (can order from 5 kg to 50kg) </option>
						<option value = "platinum" >Platinum user (can't order less than 50kg) </option>
					</select><br>
			     
				  </div><br><br><br>
					
				<input  placeholder="Enter Name"type="text" required autocomplete="off" name="Name" id="Name">
				<input placeholder="Enter E-mail" type="email" required  autocomplete="off" name="E-mail" id="E-mail">
					
						<?php
							if(isset($_REQUEST["email_error"]))
							{
								echo "<font color='red'>Sorry.....This email already taken</font>";
							}
							
		
						?>
				<input placeholder="Enter Phone number" type="tel" required  id="Phone" name="Phone" placeholder="01915-678124" pattern="[0-9]{5}-[0-9]{6}" required>
					
						<?php
							if(isset($_REQUEST["phn_error"]))
							{
								echo "<font color='red'>Sorry.....This phone number already taken</font>";
							}
						?>
				<input placeholder="Enter Address " type="text" required  autocomplete="off" name="Address" id="Address">
				<input placeholder="Enter Password " type="password" required name="password" id="password">
				
				<input type="submit" name="submit" value="Sign Up">
				
				<a href="login.php"> Already have an account? go to login </a>
			
			
		</form>
	</div>
	
	<div id="overley-area"></div>
		
	
		
	
	


</body>
</html>