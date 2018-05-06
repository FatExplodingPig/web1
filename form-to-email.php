<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $device = $_POST['device'];
  $request = $_POST['request'];
  $other = $_POST['other'];
?>
<?php
	$email_from = $visitor_email;

	$email_subject = "New Request from $name";

	$email_body = "$name ($visitor_email) has submitted a request. Device - $device. Request - \n \n $message \n \n Other - \n \n $other"
?>
<?php

$to = "repairbox4@gmail.com, azhangvo@gmail.com";

$headers = "From: $name \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
