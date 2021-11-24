<?php
	session_start();
	require_once("connect.php");
	
?>

<!doctype html>
<html>
<head>
	<title> goldenrice/Signup  </title>
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
					<li><a href="changepassword.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="changepassword.php#about_us"> ABOUT  </a></li>
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
	
	<div >
		<form method="POST" action="changepassword_core.php">
			<table style="width:75%";>
					
				<tr>
					<td><label for="old_pass">Old password : </label><br></td>
					<td></td>
					<td><input placeholder="OLD PASSWORD" type="password" required  autocomplete="off" name="old_pass" id="old_pass"><br></td>
					
				</tr>
				<tr>
					
					<td><label for="new_pass">New password : </label><br></td>
					<td></td>
					<td><input placeholder="NEW PASSWORD" type="text" required  autocomplete="off" name="new_pass" id="new_pass"><br></td>
				</tr>
				<tr>
					
					<td><label for="conf_pass">Confirm password : </label><br></td>
					<td></td>
					<td><input placeholder="CONFIRM PASSWORD" type="text" required  autocomplete="off" name="conf_pass" id="conf_pass"><br></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="changpass_btn" value="confirm"></td>
				</tr>
			</table>
		</form>
		<div><a href = "login.php"><button>Cancel</button></a><div>
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
					<li><a href="changepassword.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="changepassword.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>