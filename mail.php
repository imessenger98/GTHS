<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['Message'];
$to = "gthsadimali@gmail.com";
$subject = "Mail From GTHS Adimali";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: admin@gthsadimali.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>