<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "abdullahiabbas@gmail.com"; // Your email
    $subject = "New Contact Message from " . $name;
    $body = "Message from: " . $name . "\nEmail: " . $email . "\n\nMessage: \n" . $message;

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
