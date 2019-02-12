<?php 
	require_once('header.php'); // call header.php
	$page_name = 'failled.php';
?>

	<!-- Suceess Message -->
	<section id="sucess-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div  class="alert alert-success edit-aleart feb_relative">
						<span id="icon-load" class="fa fa-spinner fa-spin fa-fw feb_absolute"></span>
						<div id="myProgress">
						  	<div style="height:30px !important;" class="progress">
							  <div id="failledbar" class="progress-bar progress-bar-striped active failled_bar" style="width: 20%"></div>
							  <div id="failledbar" class="progress-bar progress-bar-striped active" style="width: 10%;background-color:rgba(255, 0, 0, 0.81);"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="success-message text-center">
						<div class="col-md-12">
							<div id="check-before" class="text-center">
								<span class="fa fa-spinner fa-spin fa-fw"></span><span> Checking...</span>
							</div>
							<div id="check-after" class="check-after">
								<span  class="fa fa-times-circle" aria-hidden="true"></span><span class="check2"> Failled! Data Base Connection Isn't Successfully Yet.</span>
								<p>Please Setup your database Connection from <abbr title="Path:Yourdomain.com/resultsfeb/configaration/config.php">config.php</abbr> then open with text editor and change value with your information.<br>If you try but failled please go to our <abbr title="Frequently Asked Questions - February Results Management System">faq</abbr> option and <a href="https://facebook.com/febrms" title="https://facebook.com/febrms - February Results Management System">facebook page</a> or <abbr title="asifulmamun@gmail.com">mail</abbr> Us.<br>If you follow our documentation you can do install easily step by step or follow our videos documentation step by step.<br>Find our videos from our <a href="https://facebook.com/febrms" title="https://facebook.com/febrms - February Results Management System">Facebook Page</a>, <a href="https://facebook.com/groups/febrms" title="https://facebook.com/groups/febrms - February Results Management System">Facebook Group</a>, <a href="https://github.com/asifulmamun/February-Results-Management-System-febrms">Github Documentation</a>, <abbr title="Frequently Asked Questions - February Results Management System"><a href="#">Faq</a></abbr> Option or help section.<br> Thank You.</p>
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