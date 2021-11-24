	<?php
		
	
		// data base connection 
		$Host = "localhost";
		$DbUser = "goldenrice";
		$DbPass = "Covid19@2020";
		$DbName = "goldenrice";
		
		$connect = mysqli_connect ($Host,$DbUser,$DbPass,$DbName);
		if ($connect == false)
		{
			echo "something is wrong in database connection";
		}
		
	
	?>