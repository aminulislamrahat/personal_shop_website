<?php
	session_start();
	require_once("connect.php");
?>
<?php

	setcookie("adminUser","",time()+(21600*20));
	setcookie("platiUser","",time()+(21600*20));
	setcookie("reguUser","",time()+(21600*20));
	header("location:goldenrice_home.php");


?>