<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$textarea= $_POST['textarea'];
$to = "birkhraj0007@gmail.com";
$subject = "Mail From website codeconia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject =" . $subject. "\r\n textarea =" . $textarea;
$headers = "From: clients@000webhost.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){ 
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>