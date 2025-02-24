<?php
require 'PHPMailer/src/Exception.php'; // Exception class
require 'PHPMailer/src/PHPMailer.php'; // PHPMailer class
require 'PHPMailer/src/SMTP.php'; // SMTP class

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $firstName = htmlspecialchars(trim($_POST['name'])); // Changed from firstName
    $companyName = htmlspecialchars(trim($_POST['company-name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $service = htmlspecialchars(trim($_POST['service'])); // Changed from interest
    $terms = isset($_POST['terms']) ? 'Yes' : 'No'; // Handling terms checkbox

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'hamzashakeelqureshi63@gmail.com';           // SMTP username
        $mail->Password   = 'jsrr jcla aicd jgyx';        // SMTP password (use app password for Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
        $mail->Port       = 587;                              // TCP port to connect to

        // Recipients
        $mail->setFrom($email, "$firstName");
        $mail->addAddress('hamzashakeelqureshi63@gmail.com');          // Add a recipient (your email)

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "New Subscription from $firstName";
        $mail->Body    = "<p>First Name: $firstName</p>
                          <p>Company Name: $companyName</p>
                          <p>Email: $email</p>
                          <p>Email: $mobile</p>
                          <p>Service: $service</p>
                          <p>Agreed to Terms: $terms</p>";
        $mail->AltBody = "First Name: $firstName\nCompany Name: $companyName\nEmail: $email\nService: $service\nAgreed to Terms: $terms";

        $mail->send();
        echo "Email sent successfully.";
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
