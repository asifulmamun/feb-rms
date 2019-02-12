	<script>
	function validateForm() {
		/* for user name */
	    var mainAdminUserName = document.forms["install"]["mainAdminUserName"].value;
	    if (mainAdminUserName == "") {
	        document.getElementById('mainAdminUserName_alert').innerHTML = "Please Inser Your User Name.";
	        var mainAdminUserName_alert_brdr = document.getElementById('mainAdminUserName_alert_brdr');
			mainAdminUserName_alert_brdr.classList.add('red_brdr');
	        return false;
	    }
	  	else if (mainAdminUserName !== "") {
	        document.getElementById('mainAdminUserName_alert').innerHTML = "";
	        var mainAdminUserName_alert_brdr = document.getElementById('mainAdminUserName_alert_brdr');
			mainAdminUserName_alert_brdr.classList.add('green_brdr');
	    }

	    /* for user password */
	    var mainAdminPassword = document.forms["install"]["mainAdminPassword"].value;
	    if (mainAdminPassword == "") {
	        document.getElementById('mainAdminPassword_alert').innerHTML = "Please Insert your password.";
	        var mainAdminPassword_alert_brdr = document.getElementById('mainAdminPassword_alert_brdr');
			mainAdminPassword_alert_brdr.classList.add('red_brdr');
	        return false;
	    }
	    else if (mainAdminPassword !== "") {
	        document.getElementById('mainAdminPassword_alert').innerHTML = "";
	        var mainAdminPassword_alert_brdr = document.getElementById('mainAdminPassword_alert_brdr');
			mainAdminPassword_alert_brdr.classList.add('green_brdr');
	    }

	    /* for user password - 2 */
	    var mainAdminPassword2 = document.forms["install"]["mainAdminPassword2"].value;
	    if (mainAdminPassword2 == "") {
	        document.getElementById('mainAdminPassword_alert2').innerHTML = "Please Insert your password.";
	        var mainAdminPassword_alert_brdr2 = document.getElementById('mainAdminPassword_alert_brdr2');
			mainAdminPassword_alert_brdr2.classList.add('red_brdr');
	        return false;
	    }
	    else if (mainAdminPassword2 !== "") {
	        document.getElementById('mainAdminPassword_alert2').innerHTML = "";
	        var mainAdminPassword_alert_brdr2 = document.getElementById('mainAdminPassword_alert_brdr2');
			mainAdminPassword_alert_brdr2.classList.add('green_brdr');
			/* validation for matching password */
			if (mainAdminPassword2 !== mainAdminPassword) {
				document.getElementById('mainAdminPassword_alert2').innerHTML = "Password Both Doesn't Matching.";
				return false;
			}
			else if((mainAdminPassword2 == mainAdminPassword)){
				document.getElementById('mainAdminPassword_alert2').innerHTML = "";
			}  
		}

		/* for user pin */
		var mainAdminPin = document.forms["install"]["mainAdminPin"].value;
	    if (mainAdminPin == "") {
	        document.getElementById('mainAdminPin_alert').innerHTML = "Please Insert your Pin.";
	        var mainAdminPin_alert_brdr = document.getElementById('mainAdminPin_alert_brdr');
			mainAdminPin_alert_brdr.classList.add('red_brdr');
	        return false;
	    }
	}
	</script>