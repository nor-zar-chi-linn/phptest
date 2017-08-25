<?php
$to      = 'starlight.laypyay@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: zarzar@global-connect.asia' . "\r\n" .
    'Reply-To: zarzar@global-connect.asia' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>