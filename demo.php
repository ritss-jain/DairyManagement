<?php
$to = "ritiktarun1903@gmail.com";
$subject = "Hello World";
$txt = "Hello Ritik";
$headers = "From: tarunritik@gmail.com" . "\r\n" .
"CC: ritik.pj@somaiya.edu";

mail($to,$subject,$txt,$headers);
?>