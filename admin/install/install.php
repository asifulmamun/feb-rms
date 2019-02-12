<?php 
	require_once('header.php'); // call header.php
	$page_name = 'install.php';
?>
<br><br>
	<!-- Install  -->
	<section id="install">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form name="install" action="install-proccess.php" onsubmit="return validateForm()" method="post" style="text-align: center;">
						<div style="cursor:pointer;" class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
						  <input tabindex="1" id="mainAdminUserName_alert_brdr" type="text" name="mainAdminUserName" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
						</div>
						<span class="clr_red only_left" id="mainAdminUserName_alert"></span>
<br>
						<div style="cursor:pointer;" class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><span title="Minimum 4 password." class="fa fa-key"></span></span>
						  <input tabindex="2" id="mainAdminPassword_alert_brdr" type="password" name="mainAdminPassword" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
						</div>
						<span class="clr_red only_left" id="mainAdminPassword_alert"></span>
<br>
						<div style="cursor:pointer;" class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><span title="Minimum 4 password." class="fa fa-key"></span></span>
						  <input tabindex="3" id="mainAdminPassword_alert_brdr2" type="password" name="mainAdminPassword2" class="form-control" placeholder="Re-Type Password" aria-describedby="basic-addon1">
						</div>
						<span class="clr_red only_left" id="mainAdminPassword_alert2"></span>
						<!-- password Matching alert -->
						<span class="clr_red only_left" id="passwordMatchingAlert"></span>
<br>
						<div style="cursor:pointer;" class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><span title="Minimum 2 digit and 4 Digit Numaric Number Maximum." class="fa fa-keyboard-o"></span></span>
						  <input tabindex="4" id="mainAdminPin_alert_brdr" type="text" name="mainAdminPin" class="form-control" placeholder="Fill Up Pin 4 Digit Numaric Number Maximum" aria-describedby="basic-addon1">
						</div>
						<span class="clr_red only_left" id="mainAdminPin_alert"></span>
<br>
						<input tabindex="5" class="btn btn-primary sub-feb" type="submit" name="" value="Install">
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</section>

<?php 
	require_once('footer.php'); // call footer.php 
?>