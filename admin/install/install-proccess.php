<?php
	include 'init.php';
	include $conn2; //connection for database
	$mainAdminUserName = $_POST['mainAdminUserName'];
	$mainAdminPassword = $_POST['mainAdminPassword'];
	$mainAdminPin = $_POST['mainAdminPin'];
	if (!empty($mainAdminUserName)) {
		echo 'User Name Is '.$mainAdminUserName.'<br>';
		if (!empty($mainAdminPassword) && $_POST['mainAdminPassword2'] == $mainAdminPassword) {
			echo 'User PassWord Is '.$mainAdminPassword.'<br>';			
				if (!empty($mainAdminPin)) {
					echo 'User Pin Is '.$mainAdminPin.'<br>';
						/* Create New Table */
						$tablecreatemainadmin = "CREATE TABLE `resultswkc`.`admin` ( `useridmainadmin` INT(1) NOT NULL AUTO_INCREMENT , `usernamemainadmin` VARCHAR(50) NOT NULL , `passwordmainadmin` VARCHAR(200) NOT NULL , `pinmainadmin` INT(4) NOT NULL , PRIMARY KEY (`useridmainadmin`)) ENGINE = InnoDB;";
							if (mysqli_query($conn, $tablecreatemainadmin)) {
							    echo "New Table created successfully";
							    /* New Data Insert In Admin Table */
								$mainadmintableinsertdata = "INSERT INTO `admin` (`useridmainadmin`, `usernamemainadmin`, `passwordmainadmin`, `pinmainadmin`) VALUES (NULL, '$mainAdminUserName', MD5('$mainAdminPassword'), '$mainAdminPin');";
								if (mysqli_query($conn, $mainadmintableinsertdata)) {
								    echo "New Data created successfully in admin table";
								    /* Create User Rules Row in table column */
								    $permissionfortableadminindata = "ALTER TABLE `admin` ADD `permission` VARCHAR(20) NOT NULL ;";
								    if (mysqli_query($conn, $permissionfortableadminindata)) {
								    	echo "<br> And Now Add permission Row The Admin of ".$mainAdminUserName."  Created";
								    	/* Updata Row Data in Admin Table Rules Create */
								    	$addrulesmainadmininpermissionrow = "UPDATE `admin` SET `permission` = 'mainAdmin' WHERE `admin`.`useridmainadmin` = 1;";
								    	if (mysqli_query($conn, $addrulesmainadmininpermissionrow)) {
								    		echo "<br> Main Admin Permission Create successfully In Table Admin Column Permission and row mainAdmin";
								    		echo '<br>Please Now go to your <a href="admin.php">dashboard</a>';
								    	} else {
								    		echo "<br> No Permission mainAdmin Create in Admin Table Permission Column and value that means Row mainAdmin Creating So Deleted All Data and this table.";
											/* Drop Main Admin Table */
										    $dropadmintable = "DROP TABLE `admin`";
										    if (mysqli_query($conn, $dropadmintable)) {
										    echo "<br>The Table Admin Deleted successfully Because Data Has Not Inserted";
											} else{
												echo "<br>Admin Table Deleting Failed";
											}
								    	}
									} else{
										echo "<br> No Permission Row Created So Deleted All Data and this table.";
										/* Drop Main Admin Table */
									    $dropadmintable = "DROP TABLE `admin`";

									    if (mysqli_query($conn, $dropadmintable)) {
									    echo "<br>The Table Admin Deleted successfully Because Data Has Not Inserted";
										} else{
											echo "<br>Admin Table Deleting Failed";
										}
									}
								} else {
								    echo "Error Insert Data in admin table ".mysqli_error($conn);

								    /* Drop Main Admin Table */
								    $dropadmintable = "DROP TABLE `admin`";
								    if (mysqli_query($conn, $dropadmintable)) {
								    echo "<br>The Table Admin Deleted successfully Because Data Has Not Inserted";
									} else{
										echo "<br>Admin Table Deleting Failed";
									}
								}
							} else {
							    echo "Error Create table admin ".mysqli_error($conn);
							    echo '<br>Please If you Already Register As Admin Or Any rules go to your <a href="'.$adminUrl.'">dashboard</a>'; // init.php
							}
				} else{
					echo "User Name And PassWord Filled Pin does not set up.";
				}
		} else{
			echo 'User Name Filled Up But Password Setup Failed Or Password Does not match, Please Fill Up This';
		}
	} else{
		echo 'Please Fill Up User Name';
	}
 ?>