<?php
	session_start();
	require_once("connect.php");
	
?>
<!doctype html>
<html>
<head>
	<title> goldenrice/Products  </title>
</head>

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
					<li><a href="all_products.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="all_products.php#about_us"> ABOUT  </a></li>
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
	<?php
		
	
	
	?>


	<section id="some_products"  >
		<div >
				<?php
					$showproductQuery = "SELECT * FROM product";
					$run_showproductQuery = mysqli_query ($connect,$showproductQuery);
					if ($run_showproductQuery == true)
					{
	
						while($pdata = mysqli_fetch_array($run_showproductQuery))
						{
							echo 
								'<a href="individual_product.php?product='.$pdata["product_id"].'"> 
								<div style="background-color : yellow;">
									'.$pdata["product_id"].' <br>
								 </div>
								<div>
									 <img src = "../image/'.$pdata["product_img"].'" alt="productpic" width="170px"><br>
								</div>
								<div>
									 '.$pdata["product_name"].' <br>
								</div>
								<div>
									 '.$pdata["product_price"].' <br>
								</div>';
							echo '</a>';	
						}
						
					}
				?>
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
					<li><a href="all_products.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="all_products.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>