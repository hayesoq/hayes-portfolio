<?php
	session_start();
	include ("functions.php");
?>
<!--contact start -->
<section id="contact" class="contact">
	<div class="section-heading text-center">
		<h2>contact me</h2>
	</div>
	<div class="container">
		<div class="contact-content">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-form">
							<?php
								if (isset($_GET['msg']) && $_GET['msg'] == "error")
									echo '<div class="alert alert-danger">You must fill out the contact form before viewing the results!</div>';
							?>
							<?php
								if (!isset($_POST['submit'])) {
									echo '<form method="post" action="">';
									
									if (isset($_GET['error']) && strstr($_GET['error'], "name")) {
										if (strstr($_GET['error'], "nameNull")) {
											echo '<div class="row">';
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group has-error">';
											echo '<input type="text" class="form-control" id="name" placeholder="Name*" name="name">';
										}
										if (strstr($_GET['error'], "nameInvalidChar")) {
											echo '<div class="row">';
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group has-error">';
											echo '<input type="text" class="form-control" id="name" placeholder="Name*" name="name" value="'.$_SESSION['nameData'].'">';
										}
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
									}
									else // no error
									{
										if ($_SESSION['nameData'] != "")
										{
											echo '<div class="row">';
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group has-success">';
											echo '<input type="text" class="form-control" id="name" placeholder="Name*" name="name" value="'.$_SESSION['nameData'].'">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
										}
										else
										{
											echo '<div class="row">';
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group">';
											echo '<input type="text" class="form-control" id="name" placeholder="Name*" name="name">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
										}
									}
									if (isset($_GET['error']) && strstr($_GET['error'], "email")) {
										if (strstr($_GET['error'], "emailNull")) {
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group has-error">';
											echo '<input type="text" class="form-control" id="email" placeholder="Email*" name="email">';
										}
										if (strstr($_GET['error'], "emailInvalid")) {
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group has-error">';
											echo '<input type="text" class="form-control" id="email" placeholder="Email*" name="email" value="'.$_SESSION['emailData'].'">';
										}
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div><!--/.row-->';
									}
									else
									{
										if ($_SESSION['emailData'] != "")
										{
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group has-success">';
											echo '<input type="text" class="form-control" id="email" placeholder="Email*" name="email" value="'.$_SESSION['emailData'].'">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
										else
										{
											echo '<div class="col-sm-6 col-xs-12">';
											echo '<div class="form-group">';
											echo '<input type="text" class="form-control" id="email" placeholder="Email*" name="email">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									if (isset($_GET['error']) && strstr($_GET['error'], "subject")) {
										if (strstr($_GET['error'], "subjectNull"))
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-error">';
											echo '<input type="text" class="form-control" id="subject" placeholder="Subject*" name="subject">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									else
									{
										if ($_SESSION['subjectData'] != "")
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<input type="text" class="form-control" id="subject" placeholder="Subject*" name="subject" value="'.$_SESSION['subjectData'].'">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
										else
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<input type="text" class="form-control" id="subject" placeholder="Subject*" name="subject">';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									if (isset($_GET['error']) && strstr($_GET['error'], "comment")) {
										if (strstr($_GET['error'], "commentNull")) {
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-error">';
											echo '<input class="form-control" rows="8" id="comment" placeholder="Message*" name="comment"></input>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									else
									{
										if ($_SESSION['commentData'] != "") {
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<input class="form-control" rows="8" id="comment" placeholder="Message*" name="comment" value="'.$_SESSION['commentData'].'"></input>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
										else
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<input class="form-control" rows="8" id="comment" placeholder="Message*" name="comment"></input>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									echo '<div class="row">';
									echo '<div class="col-sm-12">';												
									echo '<div class="single-contact-btn">';
									echo '<button type="submit" name="submit" value="submit1" class="contact-btn" href="#" role="button">Submit</button>';
									echo '</div><!--/.single-single-contact-btn-->';
									echo '</div><!--/.col-->';
									echo '</div><!--/.row-->';
									echo '</form><!--/form-->';

									if (isset($_GET['error'])) {
										if (strstr($_GET['error'], "nameNull"))
											echo '<div class="alert alert-danger">Name can not be blank!</div>';
										if (strstr($_GET['error'], "nameInvalidChar"))
											echo '<div class="alert alert-danger">Name can not contain invalid characters!</div>';
										if (strstr($_GET['error'], "emailNull"))
											echo '<div class="alert alert-danger">Email can not be blank!</div>';
										if (strstr($_GET['error'], "emailInvalid"))
											echo '<div class="alert alert-danger">Email must be valid!</div>';
										if (strstr($_GET['error'], "subjectNull"))
											echo '<div class="alert alert-danger">Subject can not be blank!</div>';
										if (strstr($_GET['error'], "commentNull"))
											echo '<div class="alert alert-danger">Comment can not be blank!</div>';
									}
								}
								else {
									ini_set('display_errors', 1);
									ini_set('display_startup_errors', 1);
									error_reporting(E_ALL);
									$errors = "";
									$name = $_POST['name'];
									$email = $_POST['email'];
									$subject = $_POST['subject'];
									$comment = addslashes($_POST['comment']);

									$_SESSION['nameData'] = $name; // save name input to session superglobal
									$_SESSION['emailData'] = $email; // save email input to session superglobal
									$_SESSION['subjectData'] = $subject; // save subject input to session superglobal
									$_SESSION['commentData'] = $comment; // save comment input to session superglobal
									if (empty($name)) {
										$errors .="nameNull";
									} elseif (!preg_match("/^[a-zA-Z' -]+$/", $name)) {
										$errors .= "nameInvalidChar";
									}

									if (empty($email)) {
										$errors.="emailNull";
									} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
										$errors.="emailInvalid";
									}

									if (empty($subject)) {
										$errors.="subjectNull";
									}

									if (empty($comment)) {
										$errors.="commentNull";
									}

									if ($errors!="")
										redirect("index.php?page=contact&error=$errors");

									$dblink = db_connect("contact_data");
									$sql = "Insert into `contact_info`
									(`name`, `email`, `subject`, `comment`) values
									('$name', '$email', '$subject', '$comment')";
									$dblink->query($sql) or
										die("<h2>Something went wrong with:<br>$sql<br>".$dblink->error);
									echo '<br><h2>Data collected succcessfully</h2><br>';
								}
							?>
						</div><!--/.contact-form-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-adress">
							<div class="contact-add-head">
								<h3>Hayes O'Quinn</h3>
								<p>Computer Science Student</p>
							</div>
							<div class="contact-add-info">
								<div class="single-contact-add-info">
									<h3>phone</h3>
									<p>210-510-9405</p>
								</div>
								<div class="single-contact-add-info">
									<h3>email</h3>
									<p>mhoquinn@icloud.com</p>
								</div>
								<div class="single-contact-add-info">
									<h3>website</h3>
									<p>hayesoquinn.com</p>
								</div>
							</div>
						</div><!--/.contact-adress-->
						<div class="hm-foot-icon">
							<ul>
								<li><a href="https://www.instagram.com/hayesoquinn" target="_blank"><i class="fa fa-instagram"></i></a></li><!--/li-->
								<li><a href="https://www.linkedin.com/in/hayesoquinn" target="_blank"><i class="fa fa-linkedin"></i></a></li><!--/li-->
							</ul><!--/ul-->
						</div><!--/.hm-foot-icon-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.contact-content-->
	</div><!--/.container-->
</section><!--/.contact-->
<!--contact end -->
