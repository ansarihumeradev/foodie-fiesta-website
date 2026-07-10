<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);

    $email = htmlspecialchars($_POST["email"]);

    $subject = htmlspecialchars($_POST["subject"]);

    $message = htmlspecialchars($_POST["message"]);

    $to = "ansarihumera920@gmail.com";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {

        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";

    } else {

        echo "<script>alert('Error sending message. Please try again later.');</script>";

    }

}

?>
