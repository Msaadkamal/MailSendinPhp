<?php

$to= "M";
$subject="Test mail";
$message="This  is simple email message";
$from=""
$header="From : $from";
mail($to ,$subject, $message,$header);
echo"Mail send";








?>