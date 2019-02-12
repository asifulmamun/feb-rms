<!DOCTYPE html>
<html>
<head>
	<title>db check</title>
</head>
<body>
	<?php
		session_start();
	echo 'helo';
	echo $_SESSION['username'];

	 ?>
	<form action="signup.php" method="post" style="text-align: center;">
		<br><br><input type="text" name="Class_Roll" placeholder="Class Roll"><br><br>
		<input type="text" name="Bangla" placeholder="Bangla"><br><br>
		<input type="text" name="English" placeholder="English"><br><br>
		<input type="submit" name="" value="Sign Up">
	</form>



</body>
</html>