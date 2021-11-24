<?php
	session_start();
	require_once("connect.php");
	
	
	/*echo md5(sha1(""));
	echo "<br>";
	echo md5(sha1("".""));*/
?>

<!doctype html>
<html>
<head>
	<title> goldenrice/Home  </title>
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
					<li><a href="goldenrice_home.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="goldenrice_home.php#about_us"> ABOUT  </a></li>
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

	<section id="some_products"  >
		<div >
			<div >
				<img src = "../image/atash.jpg" >
			</div>
			
			<div >
				<img src = "../image/atash.jpg" >
			</div>
			
			<div >
				<img src = "../image/atash.jpg" >
			</div>
		</div>
			
		<div  >
			<div>
				<img src = "../image/atash.jpg" >
			</div>
			
			<div >
				<img src = "../image/atash.jpg" >
			</div>
			
			<div >
				<img src = "../image/atash.jpg" >
			</div>
		</div>
	</section>
	
	
	<section id = "services">
		<div>
			<h2>services</h2>
			<p>we have some few services
				<ul>they are
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
				</ul>
			</p>
			
		</div>
	
	</section>

	<section id = "address">
		<div>
			<h2>address</h2>
			<p>we have some shops
				<ul>they are
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</p>
		</div>
	</section>

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
					<li><a href="goldenrice_home.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="goldenrice_home.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>