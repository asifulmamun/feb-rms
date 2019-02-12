<?php 
	include 'init.php'; // for databas info
	include $config;

	/*Database Connected Information*/
	$conn = mysqli_connect($serverName,$databaseUserName,$databasePassword,$databaseName);
		if($conn) {
		    echo ("Connected In Connect.php<br>");
		} 
		else{
			echo("Error Data Base Connection Connection");
		}

 ?>