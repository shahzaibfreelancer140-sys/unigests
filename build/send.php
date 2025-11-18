<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'] ?? '';
    $last_name  = $_POST['last_name'] ?? '';
    $email      = $_POST['email'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $message    = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username = "treeconnectsarl@gmail.com";
        $mail->Password = "badt nrpr rced uyed";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->SMTPDebug = 0;

        // EMAIL SETTINGS
        $mail->setFrom($email, $first_name . ' ' . $last_name);
        $mail->addAddress('unigesta@unigesta.ch');

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";

        $mail->Body = "
            <h2>New Contact Message</h2>
            <p><strong>Prénom:</strong> {$first_name}</p>
            <p><strong>Nom de famille:</strong> {$last_name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Téléphone:</strong> {$phone}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();

        // ✅ SUCCESS REDIRECT
        header("Location: contact.php?status=success");
        exit;

    } catch (Exception $e) {

        // ✅ CAPTURE REAL ERROR MESSAGE
        $error = urlencode($mail->ErrorInfo);

        // ✅ REDIRECT AND PASS ERROR TO CONSOLE
        header("Location: contact.php?status=error&msg={$error}");
        exit;
    }
}
?>
