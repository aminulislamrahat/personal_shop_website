<?php
	session_start();
	require_once("connect.php");
?>
<!doctype html>
<html>
<head>
	<title> goldenrice/Journal  </title>
	<link rel = "stylesheet" href = "../css/bootstrap.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
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

.col {
  float: left;
  width: 62%;
  height:320px;
  padding: 5px;
  text-align:center;
   margin: 0px;
 
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
                    <a  href="goldenrice_home.php" style="width:10.5%"> HOME </a>
					<a href="all_products.php" style="width:10.5%"> PRODUCTS </a>
					<a href="goldenrice_home.php#services" style="width:10.5%"> SERVICES </a>
					<a href="album.php" style="width:10.5%"> ALBUM </a>
					<a href="goldenrice_home.php#cont_shop" style="width:10.5%"> CONTACT </a>
					<a href="goldenrice_home.php#address" style="width:10.5%"> ADDRESS </a>
					<a class="active" href="journal.php" style="width:10.5%"> JOURNALS </a>
					<a href="goldenrice_home.php#about_us" style="width:10.5%"> ABOUT  </a>
					<?php
						require_once("show_profileName.php");
					?>
					
	</div><br> <!-- end of header-->
	
	
	<div class="row">
	<div class="col" style="width:38%">
	<img src="image/v3.jpg"  height="310" alt="banner" />
	
	</div>
	<div class="col" style="background-color:lightblue;text-align:left;padding:3px;">
	<h1>Genome Editing</h1>
<p1 style="font-size:150%">This special issue of Rice covers the use of genome editing technology, its use to better understand rice plants,
	and how applications of the technology can improve crop yield 
	and increase quality. Masaki Endo and Seiichi Toki are Guest Editors for the series. </p1>
	
	</div>
	</div>
	<br>
	
	
	
	
	<div class="footer">
 <div class="row">
   <div class="column">
     <h1></h1><br>
	 <h1 style="color:white;font-size:200%"><center>Follow Us</center></h1>
	<div align="center"><br>
     
                 <a href="#"> <img src = "image/facebook2.png" alt="logo" width="42"  > </a>
				<a href="#"> <img src = "image/insta.png" alt="logo" width="50"  > </a>
				<a href="#"> <img src = "image/twitter.png" alt="logo" width="45"  > </a>
				<a href="#"> <img src = "image/gmail.png" alt="logo" width="45"  > </a>
			
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