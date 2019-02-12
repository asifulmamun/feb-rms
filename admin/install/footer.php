	<!-- jQuery -->
    <script src="../../assest/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="../../assest/js/bootstrap.min.js"></script>
    <!-- jquery ui -->
    <script src="../../assest/js/jquery-ui.min.js"></script>
    <!-- success or failled statment -->
    <?php 
	    if ($page_name ==  "success.php") {
			include ('success-js.php'); // Include js for success page
	    } elseif ($page_name ==  "failled.php") {
	    	include ('failled-js.php'); // Include js for failled page
	    } elseif ($page_name ==  "install.php") {
	    	include ('install-js.php'); // Include js for install page
	    }
	    // For failled and success both hide and
	    if ($page_name == "success.php" or $page_name ==  "failled.php") {
	    	echo '
			    <script>
					$(document).ready(function(){
					    $("#check-before").slideUp(4000,0);
					    $("#check-after").fadeIn(4000,0); // Use in style.css default property:value; display: none; && the fadein event show after and overwrite this css display none.
					    $("#icon-load").hide(8000,0);
					});
				</script>';
	    } else{

	    }
     ?>
</body>
</html>