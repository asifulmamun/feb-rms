<?php 
	include 'config.php'; //connection for databas

	/*Database Connected Information*/
	$conn = mysqli_connect($serverName,$databaseUserName,$databasePassword,$databaseName);
		if($conn) {
		    echo ("Connected In Connect.php<br>");
		} 
		else{
			echo("Error Data Base Connection Connection");
			header('location:../');
		}

 ?>