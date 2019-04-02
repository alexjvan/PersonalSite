<?php $title = "Contact"; $prefix = "../" ?>
<?php
	$message = "";
	$success = null;
	if(isset($_POST['email'])) {
		$email_to = "contact@alexvanmatre.com";
		$email_subject = "Contact form submission.";

		function died($error) {
			$message = "We are very sorry, but there were error(s) found with the form you submitted. <br />These errors appear below.<br /><br />$error.<br /><br />Please go back and fix these errors.<br /><br />";
			$success = false;
		}

		// validation expected data exists
		if(!isset($_POST['first_name']) ||
			!isset($_POST['last_name']) ||
			!isset($_POST['email']) ||
			!isset($_POST['comments'])) {
			died('We are sorry, but there appears to be a problem with the form you submitted.');
		}

		$name = $_POST['name']; // required
		$subject = $_POST['subject']; // required
		$email_from = $_POST['email']; // required
		$message = $_POST['message']; // required

		$error_message = "";
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

		if(!preg_match($email_exp,$email_from))
			$error_message .= 'The Email Address you entered does not appear to be valid.<br />';

		$string_exp = "/^[A-Za-z .'-]+$/";

		if(!preg_match($string_exp,$name))
			$error_message .= 'The First Name you entered does not appear to be valid.<br />';

		if(strlen($message) < 2)
			$error_message .= 'The message you entered does not appear to be valid.<br />';

		if(strlen($error_message) > 0)
			died($error_message);

		$email_message = "Form details below.\n\n";

		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}

		$email_message .= "Name: ".clean_string($name)."\n";
		$email_message .= "Subject: ".clean_string($subject)."\n";
		$email_message .= "Email: ".clean_string($email_from)."\n";
		$email_message .= "Message:\n ".clean_string($message)."\n";

		// create email headers
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n";
		
		@mail($email_to, $email_subject, $email_message, $headers);

		// success message
		$message = "Message successfully sent!";
		$success = true;
	}
?>
<!DOCTYPE html>
<html>
	<style>
		.gr-top-z-index.gr-top-zero {
			display: none!important;
		}
	</style>
	<link rel="stylesheet" href="index.css" type="text/css" />
	<?php include $prefix."globals/head.php" ?>
	<body>
		<?php include $prefix."globals/header.php" ?>
		<div id="body">
			<div id="contactform">
				<div id="title">
					Contact
				</div>
			    <div id="cf-message" <?php if($success) {echo 'class="success"';} else if($success != null) {echo 'class="error"';} ?>>
					<?php echo $message ?>
			    </div>
				<?php
					$name = "";
					if(isset($_POST['name'])) {$name = $_POST['name'];}
					$subject = "";
					if(isset($_POST['subject'])) {$subject = $_POST['subject'];}
					$email = "";
					if(isset($_POST['email'])) {$email = $_POST['email'];}
					$msg = "";
					if(isset($_POST['message'])) {$msg = $_POST['message'];}
					if(!$success) {
						echo '
							<form id="cf-form" method="post" action="">
								<div class="formitem">
									<div class="fi-label">
						                Name<span class="req"><sup>*</sup></span>
									</div>
									<div class="fi-input">
										<input id="name" name="name" class="fi-i-field" required value='.$name.' />
									</div>
								</div>
								<div class="formitem">
									<div class="fi-label">
						                Subject
									</div>
									<div class="fi-input">
										<input id="subject" name="subject" class="fi-i-field" value='.$subject.' />
									</div>
								</div>
								<div class="formitem">
									<div class="fi-label">
						                Email<span class="req"><sup>*</sup></span>
									</div>
									<div class="fi-input">
										<input type="email" id="email" name="email" class="fi-i-field" required value='.$email.' />
									</div>
								</div>
								<div class="formitem">
									<div class="fi-label">
						                Message<span class="req"><sup>*</sup></span>
									</div>
									<div class="fi-input">
									    <textarea class="fi-i-field textarea" id="message" name="message" rows=10 required value='.$msg.' ></textarea>
									</div>
								</div>
								<input id="submit" type="submit" value="Submit" />
							</form>
						';
					}
				?>
				<script>
					$(document).ready(function() {
						$('.fi-i-field').each(function() {
							if($(this).val() == "/") $(this).val("");
						});
					});
				</script>
			</div>
		</div>
		<?php include $prefix."globals/footer.php" ?>
	</body>
</html>
