<?php

// Check if required fields are filled
if (!empty($_POST['pickup']) && !empty($_POST['drop']) && !empty($_POST['passenger']) && !empty($_POST['pickdate']) && !empty($_POST['picktime'])) {
    $pickup = $_POST['pickup'];
    $drop = $_POST['drop'];
    $passenger = $_POST['passenger'];
    $pickdate = $_POST['pickdate'];
    $picktime = $_POST['picktime'];
    $email = $_POST['email']; // Ensure to capture user's email if needed

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Email to admin
    $email_to_admin = 'jayanta.adret@gmail.com';
    $subject_admin = 'New booking form submitted';
    $body_admin = '
    <html>
    <head>
        <style>
            body {font-family: Arial, sans-serif;}
            .container {padding: 20px; background-color: #f4f4f4; border: 1px solid #ddd;}
            .header {background-color: #4CAF50; color: white; padding: 10px;}
            .content {padding: 20px; background-color: white;}
            .footer {background-color: #4CAF50; color: white; text-align: center; padding: 10px; margin-top: 20px;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Taxi Booking Form Submission</h2>
            </div>
            <div class="content">
                <p><strong>Pickup Location:</strong> ' . $pickup . '</p>
                <p><strong>Drop Location:</strong> ' . $drop . '</p>
                <p><strong>Passengers:</strong> ' . $passenger . '</p>
                <p><strong>Pickup Date:</strong> ' . $pickdate . '</p>
                <p><strong>Pickup Time:</strong> ' . $picktime . '</p>
            </div>
            <div class="footer">
                <p>© All Star Bharat</p>
            </div>
        </div>
    </body>
    </html>';

    $success_admin = mail($email_to_admin, $subject_admin, $body_admin, $headers);

    // Email to user
    $email_to_user = $email;
    $subject_user = 'Thank you for booking with us';
    $body_user = '
    <html>
    <head>
        <style>
            body {font-family: Arial, sans-serif;}
            .container {padding: 20px; background-color: #f4f4f4; border: 1px solid #ddd;}
            .header {background-color: #4CAF50; color: white; padding: 10px;}
            .content {padding: 20px; background-color: white;}
            .footer {background-color: #4CAF50; color: white; text-align: center; padding: 10px; margin-top: 20px;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Thank you for your booking</h2>
            </div>
            <div class="content">
                <p>Dear Customer,</p>
                <p>Thank you for choosing our service. Here are your booking details:</p>
                <p><strong>Pickup Location:</strong> ' . $pickup . '</p>
                <p><strong>Drop Location:</strong> ' . $drop . '</p>
                <p><strong>Passengers:</strong> ' . $passenger . '</p>
                <p><strong>Pickup Date:</strong> ' . $pickdate . '</p>
                <p><strong>Pickup Time:</strong> ' . $picktime . '</p>
            </div>
            <div class="footer">
                <p>© Your Company Name</p>
            </div>
        </div>
    </body>
    </html>';

    $success_user = mail($email_to_user, $subject_user, $body_user, $headers);

    if ($success_admin && $success_user) {
        echo 200;
    } else {
        echo '<p class="alert alert-danger">Failed to send message</p>';
    }
} else {
    echo '<p class="alert alert-warning">Please fill all the fields</p>';
}
?>
