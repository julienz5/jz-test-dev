<?php

// Define some constants
define( "RECIPIENT_NAME", "CONTACT iso institut" );
define( "RECIPIENT_EMAIL", "contact@isolation-institut.fr" );

// Read the form values
$success = false;

$type = htmlspecialchars( $_POST['type'] );
$energie = htmlspecialchars( $_POST['energie'] );
$propr = htmlspecialchars( $_POST['propr'] );
$fname = htmlspecialchars( $_POST['fname'] );
$depart = htmlspecialchars( $_POST['depart'] );
$senderPhone = htmlspecialchars( $_POST['phone'] );
$senderEmail = htmlspecialchars( $_POST['email'] );

// If necessary values exist, send the email
if ($type && $energie && $senderPhone && $senderEmail)
{
	$recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
	$headers = "From: " . $senderEmail . " <" . $senderPhone . ">";
	$msgBody = " Nom contact: " . $fname . "\n Type: " . $type . "\n  Energie: " . $energie . "\n  Proprio/loc?: " . $propr . "\n  Département: " . $depart . "\n  Phone Number: " . $senderPhone . "" ;
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
