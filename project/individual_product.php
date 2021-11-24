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
				<a href="goldenrice_home.php"> <img src = "image/goldenrice_logo2.png" alt="logo" width="400"  > </a>
				
			</div>
			</header> <!-- end of header-->
</body>
	
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
  text-align:center;
}
.col {
  float: left;
  width: 46%;
  height:400px;
  padding: 5px;
  text-align:center;
}
.order{
	 float: left;
  width: 9%;
  height:400px;
  padding: 5px;
  text-align:center;
  font-size:20px;
  font-weight:bold;
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
.bg-modal{
	width:100%;
	height:400%;
	background-color:rgba(0,0,0,0.7);
	position:absolute;
	top:0;
	display:flex;
	justify-content:center;
	align-items:center;
	display:none;
}
.modal-content
{
	width:80%;
	height:50%;
	background-color:white;
	text-align:center;
	padding:20px;
	position:relative;
}

.close{
	position:absolute;
	top:0;
	right:14px;
	font-size:42px;
	 font-weight: bold;
	transform: rotate(45deg);
	cursor: pointer;
}
</style>
<body>
<div class="topnav">
                    <a href="goldenrice_home.php" style="width:11%"> HOME </a>
					<a class="active" href="all_products.php" style="width:11%"> PRODUCTS </a>
					<a href="goldenrice_home.php#services" style="width:11%"> SERVICES </a>
					<a href="album.php" style="width:11%"> ALBUM </a>
					<a href="goldenrice_home.php#cont_shop" style="width:11%"> CONTACT </a>
					<a href="goldenrice_home.php#address" style="width:11%"> ADDRESS </a>
					<a href="journal.php" style="width:11%"> JOURNALS </a>
					<a href="goldenrice_home.php#about_us" style="width:11%"> ABOUT  </a>
					<?php
						require_once("show_profileName.php");
					?>
	</div>
	<br>

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
								'
								<div class="row"> 
								<div class="col">
									 <img src = "image/'.$qdata["product_img"].'" alt="productpic" width="300px" height="300px"><br>
								</div>
								
								<div class="col" style="background-color :#820404;color:white;font-size:150%;font-weight: bold;">
								<div style="color:white">
									 '.$qdata["product_name"].' <br>
								
							         
									 <p1>'.$qdata["product_price"].' tk</p1><br><br>
								 </div>
								  
									 '.$qdata["product_info"].' <br><br>
							
							
							<div align="left">
		                    <form method="POST" action="#box">
		                     <table style="width:40%";id="box">
							 <tr>
			             <td>  <label for="product_kg"> KG/UNIT   : </label></td>
			
			
					<td><select required name="product_kg" style="width:120%;height:30px;font-size:15px;" id="product_kg" >
						<option value = "10" >10 KG </option>
						<option value = "25" > 25 KG </option>
						<option value = "50" >50 KG </option>
					</select></td>
					</tr>
					
				   <tr>
					
					<td><label for="product_quantity"> QUANTITY : </label></td>
				
					
					<td><input type="number" style="width:120%;height:30px;font-size:15px;" id="product_quantity" required name="product_quantity" min="1" max="100" value ="1"><br>
				    </td>
					</tr>
				 </table> 	<br>
						
	
			<input type="submit" style="background-color:#33cfff;color:black;border:none;height:40px;width:25%;font-size:18px;font-weight:bold;" name="orderNow_btn" value="ORDER NOW">
				
					&nbsp; 
			<input type="submit" style="background-color:#f5ca20;color:black;border:none;height:40px;width:25%;font-size:18px;font-weight:bold;" name="addToCart_btn" value="ADD TO CART">
				
				
           
				 </table> 
			
		</form>
	</div>
								</div>
		
							</div>
								';
								$product_price = $qdata["product_price"];
								
						}
						
					}
				?>
		</div>
			<div class="row"> 
								<div class="col" style="height:100px;">
									 
								</div>
	<div class="col" style="background-color:#820404;text-align:left;height:70px;color:white;font-size:20px;font-weight:bold;" >
	   	<?php
			$product_kg = $_POST["product_kg"];
			$product_quantity = $_POST["product_quantity"];
			//$product_price = $qdata["product_price"];
			$total_price = $product_kg * $product_quantity * $product_price;
			
			echo '<h1> Total Price: '.$total_price.'</h1>';
			
		?>
	</div>
	</div>

	</section>

	<footer>
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
  <div class="column">
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
</div>	
	</footer>

</body>
</html>