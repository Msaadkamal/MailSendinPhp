<?php

$to= "msaadkamal1999@gmail.com";
$subject="Test mail";
$message="This  is simple email message";
$from="ammarmughal698@gmail.com"
$header="From : $from";
mail($to ,$subject, $message,$header);
echo"Mail send";








?>