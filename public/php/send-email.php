<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $service_date = $_POST['service_date'];
    $request = $_POST['request'];

    $to = "xedstudios051@gmail.com";
    $subject = "New Service Booking Request";
    $message = "
    <html>
    <head>
        <title>New Service Booking Request</title>
    </head>
    <body>
        <h2>Service Booking Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Service:</strong> $service</p>
        <p><strong>Service Date:</strong> $service_date</p>
        <p><strong>Special Request:</strong> $request</p>
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your booking request has been sent successfully!";
    } else {
        echo "Failed to send your booking request. Please try again later.";
    }
}
?>
