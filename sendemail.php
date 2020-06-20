<?php

// Define some constants
define( "RECIPIENT_NAME", "CONTACT isoXXX" );
define( "RECIPIENT_EMAIL", "contact@ISOXXX.fr" );

// Read the form values
$success = false;

$type = htmlspecialchars( $_POST['type'] );
$energie = htmlspecialchars( $_POST['energie'] );
$propr = htmlspecialchars( $_POST['propr'] );
$fname = htmlspecialchars( $_POST['fname'] );
$senderPhone = htmlspecialchars( $_POST['phone'] );
$senderEmail = htmlspecialchars( $_POST['email'] );

// If necessary values exist, send the email
if ($type && $$energie && $phone && $email)
{
	$recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
	$headers = "From: " . $senderEmail . " <" . $senderPhone . ">";
	$msgBody = " Nom contact: " . $fname . " Type: " . $type . " Energie: " . $energie . " Proprio/loc?: " . $propr . " Phone Number: " . $senderPhone . "" ;
	$success = mail( $recipient, $headers, $msgBody );

	// If necessary values exist, send the email
	if ($success)
	{
		header('Location: index.html?message=Success');
	}
	else{
		header('Location: index.html?message=Failed');
	}
}
else{
  	header('Location: index.html?message=Invalid');
}

?>
