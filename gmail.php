<?php
$to = "amitpatelgurjar07@gmail.com";
$subject = "test mail";
$message = "hello! this is a sample email message";
$from= "07amitpatel2003@gmail.com";
$headers = "from: $from";
mail($to,$subject,$message,$headers);
echo"mail sent";
?>