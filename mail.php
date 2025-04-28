<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "fahad4bangladesh@gmail.com";
    $mailSub = $subject . " - " . $name;
    $headers = "From: $email" . "\r\n" . "CC: From my Portfolio fahadbd.com";

    $mail = mail($to, $mailSub, $message, $headers);
    if ($mail) {
        header("Location: index.php?message_send_successfully");
    } else {
        header("Location: index.php?message_not_sent");
    }
} else {
    header("Location: index.php");
}

?>