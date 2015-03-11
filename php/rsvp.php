<?php
$attend = $_POST["attend"];
$name = $_POST["name"];
$guests = $_POST["guests"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$notes = $_POST["notes"];
$text = "ATTEND?: $attend<br>
 NAME: $name<br>
 GUESTS: $guests<br>
 PHONE: $phone<br> 
 EMAIL: $email<br>
 NOTES: $notes<br><hr><br><br><br>";
 $file = fopen("../contactrequests.html","a+");
 fwrite($file, $text);
 fclose($file);

print "<meta http-equiv=\"refresh\" content=\"0;URL=../contactthanks.html\">";
?>
