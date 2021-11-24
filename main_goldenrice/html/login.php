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
<html lang = "en-US">
<head>
	<meta charset = "UTF-8">
	<title> goldenrice/Login  </title>
</head>

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
					<li><a href="login.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="login.php#about_us"> ABOUT  </a></li>
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
	
	<div >
		<form method="POST" action="logindata_core.php">
			<table>
				<tr>
					<td><label for="E-mail">E-mail : </label><br></td>
					<td><input placeholder="example@gmail.com" type="email" required  name="E-mail" id="E-mail"><br></td>
				</tr>
				<tr>
					<td><label for="password">Password : </label><br></td>
					<td><input type="password" required name="password" id="password"><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit_bt" value="login" id="submit_bt"></td>
					<td><a href="signup.php"> Don't have any account? Create one </a></td>
				</tr>
			
			
			</table>
		</form>
		<div>
			<?php
				if(isset($_REQUEST["info_error"]))
				{
					echo "<font color='red'>ERROR email or password.... TRY AGAIN </font>";
				}
			?>
		</div>
	</div>
	<div>
		<?php
			if(isset($_REQUEST["action"])== "true")
			{
				echo "<font color='green'><h2>Signed up successfully! You can login now</h2></font>";
			}
		?>
	</div>
	
	
	
	
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
					<li><a href="login.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="login.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer> 



</body>
</html>