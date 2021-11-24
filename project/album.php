<?php
	session_start();
	require_once("connect.php");
?>
<!doctype html>
<html>
<head>
	<title> goldenrice/Album  </title>
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

.i{
 width: 100%;
 border-radius: 4px;

}

.container{
	max-width:1200px;
	margin:auto;
	background:black;
	overflow:auto;
}
.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 350px;
}
.gallery img {
  width: 100%;
  height: auto;
}


.gallery:hover {
  border: 1px solid #777;

  transform: scale(1.3,1.3);
  transition: .3s transform;


}
</style>
<body>
<div class="topnav">
                    <a href="goldenrice_home.php" style="width:10.5%"> HOME </a>
					<a href="all_products.php" style="width:10.5%"> PRODUCTS </a>
					<a href="goldenrice_home.php#services" style="width:10.5%"> SERVICES </a>
					<a class="active" href="album.php" style="width:10.5%"> ALBUM </a>
					<a href="goldenrice_home.php#cont_shop" style="width:10.5%"> CONTACT </a>
					<a href="goldenrice_home.php#address" style="width:10.5%"> ADDRESS </a>
					<a href="journal.php" style="width:10.5%"> JOURNALS </a>
					<a href="goldenrice_home.php#about_us" style="width:10.5%"> ABOUT  </a>
					<?php
						require_once("show_profileName.php");
					?>
					
	</div><br> <!-- end of header-->

<div class="gallery">
  <a target="_blank" href="image/r1.jpg">
    <img src="image/r1.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
 
</div>

<div class="gallery">
  <a target="_blank" href="image/r2.jpg">
    <img src="image/r2.jpg" alt="Forest" width="600" height="400">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="image/r3.jpg">
    <img src="image/r3.jpg" alt="Northern Lights" width="600" height="400">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="image/r4.jpg">
    <img src="image/r4.jpg" alt="Mountains" width="600" height="400">
  </a>

</div>
<div class="gallery">
  <a target="_blank" href="image/r5.jpg">
    <img src="image/r5.jpg" alt="Mountains" width="600" height="400">
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="image/r6.jpg">
    <img src="image/r6.jpg" alt="Mountains" width="600" height="400">
  </a>

</div>
<div class="gallery">
  <a target="_blank" href="image/r7.jpg">
    <img src="image/r7.jpg" alt="Mountains" width="600" height="400">
  </a>

</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="image/img_5terre.jpg" alt="Mountains" width="600" height="400">
  </a>
  
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