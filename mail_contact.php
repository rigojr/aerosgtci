<?php
if ($_POST['g-recaptcha-response']!='') {

	$email_to = "rigojr@aeros.io";
	$email_subject = $_POST['name-contact-1']."\t from ";
	$email_from = "brian@aeros.io"
	
	$email_message .= "Full Name: " . $_POST['name-contact-1'] . "\n";
	$email_message .= "Phone: " . $_POST['phone-contact'] . "\n";
	$email_message .= "Email: " . $_POST['mail-contact-1'] . "\n";
	$email_message .= "Interest: " . $_POST['interest-contact']. "\n";
	
	$headers = 'From: rigojr@aeros.io\r\n'.
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	header("Location: ?TRUE");
}else{
	header("Location: ?FALSE");
}
?>