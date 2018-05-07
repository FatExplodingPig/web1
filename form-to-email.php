<?php
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

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'repairbox4@gmail.com',
        'password' => 'Repairbox2018'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

//mail($to,$email_subject,$email_body,$headers);
//header("Location: ./index.html");
?>
