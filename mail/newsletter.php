<?php 
if( empty($_POST['newsmail']) || !filter_var($_POST['newsmail'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$newsmail = strip_tags(htmlspecialchars($_POST['newsmail']));

$to = "info@mkornamental.com"; // Change this email to your //
$to = "mulungijehushalom@gmail.com"; // Change this email to your //
$subject = "Subscrpution";
$body = "You have recived a Subscrpution request from Mk Ornamental Engeering.\n\n"."Here are the details:\n\n\nEmail: $newsmail\n\nSubject: Subscrpution";
$header = "From: $newsmail";
$header .= "Reply-To: $newsmail";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
