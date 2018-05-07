<?php
require_once '/var/www/html/web1/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $device = $_POST['device'];
  $request = $_POST['request'];
  $other = $_POST['other'];

	$email_from = $visitor_email;

	$email_subject = "New Request from $name";

	$email_body = "$name ($visitor_email) has submitted a request. Device - $device. Request - \n \n $message \n \n Other - \n \n $other"


$to = "repairbox4@gmail.com, azhangvo@gmail.com";

$headers = "From: $name \r\n";

$headers .= "Reply-To: $visitor_email \r\n";



$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('Repairbox4@gmail.com')
  ->setPassword('Repairbox2018');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('Repairbox4@gmail.com' => 'Repair Box'))
  ->setTo(array('azhangvo@gmail.com', 'Repairbox4@gmail.com'))
  ->setBody($email_body);

$result = $mailer->send($message);

//mail($to,$email_subject,$email_body,$headers);
//header("Location: ./index.html");
?>
