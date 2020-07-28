<?php $name = $_POST['cf_name'];
$email = $_POST['cf_email'];
$message = $_POST['cf_message'];
$formcontent="From: $name \n Message: $message";
$recipient = "gutoperon@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
