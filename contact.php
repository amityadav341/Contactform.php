<?php
 $name=$_POST['name'];
 $sender_email=$_POST['email'];
 $message=$_POST['message'];

 $email_from ="from: $name \n Message: $message";
$to ="rockamit341@gmail.com";
$subject="Contact form submission";
$headers="from: $sender_email \r\n";
mail($to,$subject,$email_from,$headers)or die("Error");
echo "Thank You";
?>