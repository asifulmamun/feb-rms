<?php
	session_start();
	include '../configaration/connect.php'; // Connect With Database

	$userNameMainAdminHead = 'ummaymim';
	$userPasswordMainAdminHead = "mim";
	$userPinMainAdminHead = 6268;
	$userRuleMainAdminHead = "mainAdmin";

	$query = "SELECT * FROM admin where usernamemainadmin='$userNameMainAdminHead' and passwordmainadmin=MD5('$userPasswordMainAdminHead') and pinmainadmin=MD5('$userPinMainAdminHead') and permission='$userRuleMainAdminHead';";

	$result = mysqli_query($conn, $query);

	if ($row = mysqli_fetch_assoc($result)) {
		// Session Variable
		$_SESSION['username'] = $userNameMainAdminHead;
		$_SESSION['password'] = $userPasswordMainAdminHead;
		$_SESSION['pin'] = $userPinMainAdminHead;
		$_SESSION['power'] = $userRuleMainAdminHead;
		header('location:dashboard.php');
	} else {
		echo 'You Are Not Member This Site. Please Contact Administrator.';
	}
	

 ?>