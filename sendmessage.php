<?php header('Content-type: text/html; charset=utf-8')?>
<?php

// Define some constants
$sendto   = "kiev.tatuazh@gmail.com";
$subject  = "Call me back";

// Read the form values
$phone = $_POST['user_phone'];
$name  = nl2br($_POST['name']);

$success = false;


$headers  = "From: " . strip_tags($phone) . "\r\n";
$headers .= "Reply-To: ". strip_tags($phone) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New User Feedback</h2>\r\n";
$msg .= "<p><strong>Sent by:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$name."</p>\r\n";
$msg .= "</body></html>";


$success = mail( "kiev.tatuazh@gmail.com", $subject, $msg, $headers );

//Sending
if($success ) {
	echo "true";
} else {
	echo "false";
}

?>