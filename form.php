<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $email = urldecode($email);
    $message = urldecode($message);

    $name = trim($name);
    $email = trim($email);
    $message = trim($message);

    if (mail("egor5980001@gmail.com",
        "New Letter",
        "Name: " . $name . "\n" .
        "Email: " . $email . "\n" .
        "Message: " . $message . "\n")
    ) {
        header('Location: ../done.html');
    } else {
        header('Location: ../error.html');
    }
?>