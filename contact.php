<?php

if($_POST["submit"]) {
    $recipient="henrik.holmlund@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["field1"];
    $senderEmail=$_POST["field2"];
    $senderPhone=$_POST["field3"];
    $message=$_POST["Message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
</body>
</html>
