<?php 
	require_once('header.php'); // call header.php
	$page_name = 'success.php';
?>

	<!-- Suceess Message -->
	<section id="sucess-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div  class="alert alert-success edit-aleart feb_relative">
						<span id="icon-load" class="fa fa-spinner fa-spin fa-fw feb_absolute"></span>
						<div id="myProgress">
						  <div id="myBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="success-message text-center">
						<div class="col-md-12">
							<div id="check-before" class="text-center">
								<span class="fa fa-spinner fa-spin fa-fw"></span><span> Checking...</span>
							</div>
							<div id="check-after">
								<span  class="fa fa-check" aria-hidden="true"></span><span class="check2"> Checked! Data base Connected Successfully.</span>
								<p><i class="fa fa-smile-o"></i> Thanks. For connecting your database.<br>Now go to for <a href="install.php"><abbr title="Install for click here or click Install now! Button">Install</abbr></a> your <strong><abbr title="Author Al Mamun - (asifulmamun). Contact: asifulmamun@gmail.com">February Results Management System</abbr></strong> Script.</p>
								<div class="install-button text-center">
									<span><a href="install.php">Install Now !</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 
	require_once('footer.php'); // call footer.php 
?>