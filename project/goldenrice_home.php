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
}

</style>
<body>
<div class="topnav">
                    <a class="active" href="goldenrice_home.php" style="width:10.5%"> HOME </a>
					<a href="all_products.php" style="width:10.5%"> PRODUCTS </a>
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
    <img src="image/r1.jpg" height="310" alt="banner" />
	<img src="image/inrice.jpg"  height="310" alt="banner" />
	<img src="image/golden-paddy-field-house.jpg"  height="310" alt="banner" />
	<img src="image/mini600.1.jpg"  height="310" alt="banner" />
  </marquee>
	
	<div class="row" >
   <div class="column">
   <a href="all_products.php"> <img src="image/kalijira.jpg" style="width:70%"></a>
	<h1 style="background-color:grey;color:black;font-size:150%"><center>Kalijira Rice<br>100tk per kg</center></h1>
  </div>
  <div class="column">
   <a href="all_products.php"> <img src="image/Chinigura.jpg" style="width:70%"></a>
	<h1 style="background-color:grey;color:black;font-size:150%"><center>Chinigura Rice<br>95tk per kg</center></h1>
  </div>
  <div class="column">
    <a href="all_products.php"> <img src="image/minicate.jpg" style="width:70%"></a>
	<h1 style="background-color:grey;color:black;font-size:150%"><center>Minicate Rice<br>52tk per kg</center></h1>
  </div>
  
 
</div>
<div class="row" style="background-color:lightblue" >
   <div class="column" id="about_us">
   <h1 style="color:black;font-size:200%"><center>ABOUT</center></h1>
	<p><center>kichu kotha about dokan<center></p>
   
  </div> 
  
  <div class="column" id = "services">
   <h1 style="color:black;font-size:200%"><center>SERVICES</center></h1>
	
			<p><center>We have some few services</center></p>
				<ul>
					<li>We have some few services</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
				</ul>
   
  </div> 
 
  <div class="column" id = "address">
   <h1 style="color:black;font-size:200%"><center>Address</center></h1>
	
			
			<p>we have some shops
				<ul>they are
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</p>
   
  </div> 
</div>
<div class="row" style="background-color:white" >
 <div class="column">
 </div>
</div>
	
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
  <div class="column" id="cont_shop">
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
 
 
</body>
</html>