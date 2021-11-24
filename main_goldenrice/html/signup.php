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
					<li><a href="signup.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="signup.php#about_us"> ABOUT  </a></li>
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
		<form method="POST" action="savedata_core.php">
			<table style="width:75%";>
				<tr>
					<td><label for="user_type"> Select a user type : </label><br></td>
					<td></td>
					<td><select required name="user_type" id="user_type" >
						<option value = ""></option>
						<option value = "regular" >Regular user (can order from 5 kg to 50kg) </option>
						<option value = "platinum" >Platinum user (can't order less than 50kg) </option>
					</select><br></td>
			
				</tr>	
				<tr>
					<td><label for="Name">Name : </label><br></td>
					<td></td>
					<td><input  type="text" required autocomplete="off" name="Name" id="Name"><br></td>
					
				</tr>
				<tr>
					
					<td><label for="E-mail">E-mail : </label><br></td>
					<td></td>
					<td><input placeholder="example@gmail.com" type="email" required  autocomplete="off" name="E-mail" id="E-mail"><br></td>
					<td>
						<?php
							if(isset($_REQUEST["email_error"]))
							{
								echo "<font color='red'>Sorry.....This email already taken</font>";
							}
							
		
						?>
					</td>
					
				</tr>
				
				
				
				<tr>
					
					<td><label for="Phone">Phone number : </label><br></td>
					<td></td>
					<td><input type="tel" required  id="Phone" name="Phone" placeholder="01915-678124" pattern="[0-9]{5}-[0-9]{6}" required><br></td>
					<td>
						<?php
							if(isset($_REQUEST["phn_error"]))
							{
								echo "<font color='red'>Sorry.....This phone number already taken</font>";
							}
							
		
						?>
					</td>
					
				</tr>
				<tr>
					<td><label for="Address">Address : </label><br></td>
					<td></td>
					<td><input type="text" required  autocomplete="off" name="Address" id="Address"><br></td>
				</tr>
				<tr>
					<td><label for="password">Password : </label><br></td>
					<td></td>
					<td><input type="password" required name="password" id="password"><br></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
					<td><a href="login.php"> Already have an account? go to login </a></td>
				</tr>
			</table>
		</form>
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
					<li><a href="signup.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="signup.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>