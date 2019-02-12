	<!-- Check Connection For Database -->
	<?php
		include '../../configaration/config.php'; //connection for databas

		/*Database Connected Information*/
		$conn = mysqli_connect($serverName,$databaseUserName,$databasePassword,$databaseName);
			if ($conn) {
				header('location:success.php'); // Redirect in Connection Failed page
			} else {
				header('location:failled.php'); // Redirect in Connection Failed page
			}
	 ?>