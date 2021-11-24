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
	height:500px;
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
.wrapper input[type=text],.wrapper input[type=password]{
	width:80%;
	height:25px;
	font-size:20px;
	opacity:1;
	color:black;
	
}
 input[type=submit]{

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
	
	<!-- end of header-->
	
	
	<div class="wrapper">
	<div align="logo">
				<a href="goldenrice_home.php"> <img src = "image/goldenrice_logo2.png" alt="logo" width="270" height="100" > </a>
				
			</div><br>
			<div style="color:White;font-size:25px;font-weight:bold;">
			<?php
				if(isset($_REQUEST["change_password"]))
				{
					echo $_REQUEST["change_password"];
				}
				else if(isset($_REQUEST["dontmatch"]))
				{
					echo $_REQUEST["dontmatch"];
				}
	?>
			</div><br>
		<form method="POST" action="changepassword_core.php">
			<input placeholder="OLD PASSWORD" type="password" required  autocomplete="off" name="old_pass" id="old_pass">
           <input placeholder="NEW PASSWORD" type="text" required  autocomplete="off" name="new_pass" id="new_pass">
	              <input placeholder="CONFIRM NEW PASSWORD" type="text" required  autocomplete="off" name="conf_pass" id="conf_pass">
				   <input type="submit" name="changpass_btn" value="Change Password">
				   
		</form>
		<a href = "login.php"><input type="submit" value="Cancel">
	</div>

</body>
</html>