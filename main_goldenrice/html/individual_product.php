<?php
	session_start();
	require_once("connect.php");
	$pp = $_GET['product'];
	if(filter_var($pp, FILTER_VALIDATE_INT) === false )
	{
		die("NO VALID PRODUCT");
	}
	
	$product_price = "";
?>
<!doctype html>
<html>
<head>
	<title> goldenrice/Products  </title>
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
					<li><a href="individual_products.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="individual_products.php#about_us"> ABOUT  </a></li>
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

	<section id="one_products"  >
		<div >
				<?php
					

					
					$showproductQuery = "SELECT * FROM product WHERE product_id = '".$pp."'" ;
					$run_showproductQuery = mysqli_query ($connect,$showproductQuery);
					if ($run_showproductQuery == true)
					{
						while($qdata = mysqli_fetch_array($run_showproductQuery))
						{
							echo
								'<div style="background-color : yellow;">
									'.$qdata["product_id"].' <br>
								 </div>
								<div>
									 <img src = "../image/'.$qdata["product_img"].'" alt="productpic" width="300px"><br>
								</div>
								<div>
									 '.$qdata["product_name"].' <br>
								</div>
								<div>
									 '.$qdata["product_price"].' <br>
								</div>
								<div>
									 '.$qdata["product_info"].' <br>
								</div>';
								$product_price = $qdata["product_price"];
						}
						
					}
				?>
		</div>
		<div >
		<form method="POST" action="">
			<table border="1px" style="width:75%";>
				<tr>
					<td><label for="product_kg"> KG/UNIT : </label><br></td>
					<td></td>
					<td><select required name="product_kg" id="product_kg" >
						<option value = "10" >10 KG </option>
						<option value = "25" > 25 KG </option>
						<option value = "50" >50 KG </option>
					</select><br></td>
					
					<td><label for="product_quantity"> QUANTITY : </label><br></td>
					<td></td>
					<td><input type="number" id="product_quantity" required name="product_quantity" min="1" max="100" value ="1"><br></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="orderNow_btn" value="ORDER NOW"></td>
					<td></td>
					<td></td>
					<td><input type="submit" name="addToCart_btn" value="ADD TO CART"></td>
				</tr>

				
			</table>
		</form>
	</div>
	
	<div>
		<?php
			$product_kg = $_POST["product_kg"];
			$product_quantity = $_POST["product_quantity"];
			//$product_price = $qdata["product_price"];
			$total_price = $product_kg * $product_quantity * $product_price;
			echo '<h1>'.$total_price.'</h1>';
			
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
					<li><a href="individual_products.php#cont_shop"> CONTACT </a></li>
					<li><a href="goldenrice_home.php#address"> ADDRESS </a></li>
					<li><a href="journal.php"> JOURNALS </a></li>
					<li><a href="individual_products.php#about_us"> ABOUT  </a></li>
					
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>