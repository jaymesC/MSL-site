<?php
//get data from form
$company = $_POST['company'];  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "mbarieservices@gmail.com";
$subject = "Mail From Client";
$txt ="Company = " .$company . " \r\n Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC:info@mbarieservicesltd.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
