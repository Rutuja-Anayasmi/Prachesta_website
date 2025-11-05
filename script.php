<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'config.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendMail($subject, $body, $replyEmail = null, $replyName = null){
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->Host       = 'smtp.gmail.com';
        $mail->Username   = 'website.anayasmi@gmail.com';
        $mail->Password   = 'wrkf oevv vazo fbxt'; // ✅ app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('website.anayasmi@gmail.com', 'Website Contact');
        if ($replyEmail && $replyName) {
            $mail->addReplyTo($replyEmail, $replyName);
        }

        $mail->addAddress("rutujag2407@gmail.com"); // ✅ Your main inbox

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = strip_tags(str_replace("<br>", "\n", $body));

        if ($mail->send()) {
            echo "success";
        } else {
            echo "Email failed: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Error: " . $mail->ErrorInfo;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ Distinguish which form submitted
    if (isset($_POST["formType"]) && $_POST["formType"] === "volunteer") {
        // Volunteer form fields
        $name     = $_POST["name"];
        $email    = $_POST["email"];
        $phone    = $_POST["phone"];
        $city     = $_POST["city"];
        $interest = $_POST["interest"];
        $message  = $_POST["message"];

        $subject = "New Volunteer Signup from $name";
        $body = "<strong>Name:</strong> $name <br>
                 <strong>Email:</strong> $email <br>
                 <strong>Phone:</strong> $phone <br>
                 <strong>City:</strong> $city <br>
                 <strong>Interest:</strong> $interest <br>
                 <strong>Message:</strong> $message <br>";

        sendMail($subject, $body, $email, $name);

    } else {
        // Contact form fields
        $name    = $_POST["name"];
        $email   = $_POST["email"];
        $mobile  = $_POST["mobile"];
        $sender  = $_POST["sender"];
        $message = $_POST["message"];

        $subject = "Prachesta Contact Form Submission";
        $body = "<strong>Name:</strong> $name <br>
                 <strong>Email:</strong> $email <br>
                 <strong>Mobile:</strong> $mobile <br>
                 <strong>Sender:</strong> $sender <br>
                 <strong>Message:</strong> $message <br>";

        sendMail($subject, $body, $email, $name);
    }
}
