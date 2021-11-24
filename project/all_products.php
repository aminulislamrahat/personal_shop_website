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

</style>
<body>
<div class="topnav">
                    <a  href="goldenrice_home.php" style="width:10.5%"> HOME </a>
					<a class="active" href="all_products.php" style="width:10.5%"> PRODUCTS </a>
					<a href="goldenrice_home.php#services" style="width:10.5%"> SERVICES </a>
					<a href="album.php" style="width:10.5%"> ALBUM </a>
					<a href="goldenrice_home.php#cont_shop" style="width:10.5%"> CONTACT </a>
					<a href="goldenrice_home.php#address" style="width:10.5%"> ADDRESS </a>
					<a href="journal.php" style="width:10.5%"> JOURNALS </a>
					<a href="goldenrice_home.php#about_us" style="width:10.5%"> ABOUT  </a>
					<?php
						require_once("show_profileName.php");
					?>
					
	</div><br>
	<marquee behavior="scroll" direction="left" scrollamount="12">
    <img src="image/Posh-Rice_Rice-Varieties-1.jpg" height="310" alt="banner" />
	<img src="image/inrice.jpg"  height="310" alt="banner" />
	<img src="image/download.jpg"  height="310" alt="banner" />
	<img src="image/mini600.1.jpg"  height="310" alt="banner" />
  </marquee>

<div class="mid">
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
								'
								<a href="individual_product.php?product='.$pdata["product_id"].'"> 
								
								
                                  <div class="column">
									 <img src = "image/'.$pdata["product_img"].'" alt="productpic" width="350px" height="350px"><br>
								
								 <div style="background-color : grey;color:black;font-size:150%;font-weight: bold;" align="center" >
								
									<p1> '.$pdata["product_name"].' Rice</p1><br>
								
									<p1> '.$pdata["product_price"].' tk</p1><br>
								
								</div>
								</div>
								';
								
							
							//$pcook = "p".$num;
							//echo $pcook;
							//$_SESSION['variable'] = $pdata["product_id"];
							echo '</a>';	
						}
						
					}
				?>
		</div>
	</section>
	
</div>	
	

	

<footer >
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
					<a href="login.php" style="color:white;text-decoration:none"> LOGIN </a>
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