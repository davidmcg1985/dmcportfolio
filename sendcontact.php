<?php

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_tel = $_POST['phone'];
$field_message = $_POST['message'];

$mail_to = 'david@dmcportfolio.co.uk, dmcgweb101@gmail.com';
$subject = 'Enquiry from a dmcportfolio.co.uk visitor '.$field_name;

$body_message = 'You have received an enquiry'."\n";
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Telephone: '.$field_tel."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you within 24 Hours.');
		window.location = 'index.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to dmc-webdesign@live.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>