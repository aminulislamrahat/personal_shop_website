<?php
	session_start();
	require_once("connect.php");
?>

<?php
	if(isset($_COOKIE["adminUser"]))
	{
		header("location:Admin_profile_page.php");
	}
	else if(isset($_COOKIE["platiUser"]))
	{
		header("location:platinum_profile.php");
	}
	else if(isset($_COOKIE["reguUser"]))
	{
		header("location:regular_profile.php");
	}
	
?>



<!doctype html>
<html>
<head>
	<title> goldenrice/Login  </title>
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
	width:400px;
	height:420px;
	color:#000;
	top:50%;
	left:50%;
	padding:40px 30px;
	position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	box-shadow:8px 8px 50px #000;
}
.logo{
	margin:0;
	padding:0;
	font-weight:bold;
	text-align:center;
	margin-bottom:8%;
	
}
.wrapper input{
	width:100%;
	margin-bottom:20px;
}

.wrapper input[type=email], .wrapper input[type=password]{
	border:none;
    border-bottom:1px solid #ffffff;
	background:transparent;
	outline:none;
	height:30px;
	font-size:25px;
	opacity:1;
	color:white;
	
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
::-webkit-input-placeholder{
	color:rgba(0, 0, 0,0.9);
	
}
:focus::-webkit-input-placeholder{
	opacity:0.5;
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
}


</style>
<body>
	
	<div class="wrapper">
	 <div align="logo">
				<a href="goldenrice_home.php"> <img src = "image/goldenrice_logo2.png" alt="logo" width="270" height="120" > </a>
				
			</div>
			<div style="background-color:red;">
			<?php
				if(isset($_REQUEST["info_error"]))
				{
					echo "<font color='white' font size='4%' font weight='bold' >!!ERROR email or password.... TRY AGAIN </font>";
				}
			?>
		</div >
		
		<div>
		<?php
			if(isset($_REQUEST["action"])== "true")
			{
				echo "<font color='white'><h2>Signed up successfully! You can login now</h2></font>";
			}
		?>
	</div>
		<form method="POST" action="logindata_core.php">
			
			       <input placeholder="user@gmail.com" type="email" required  name="E-mail" id="E-mail">
		            <input placeholder="password" type="password" required name="password" id="password">
			       <input type="submit" name="submit_bt" value="Login" id="submit_bt">
					
		</form>
		
		<a href="signup.php"> Don't have any account? Create one </a>	
		
	</div>
		<div id="overley-area"></div>
		
	
	
	
</body>
</html>