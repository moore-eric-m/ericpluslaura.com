<?php
$first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$company = $_POST["company"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$text = "NAME: $first    $last <br>
 EMAIL: $email<br>
 COMPANY: $company<br>
 TELEPHONE NUMBER: $phone<br>    
 MESSAGE: $message<br><hr><br><br><br>";
 $file = fopen("contactrequests.html","a+");
 fwrite($file, $text);
 fclose($file);

?>
