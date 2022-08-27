<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fitforcodings2try@outlook.com';                     //SMTP username
    $mail->Password   = '**99**99**';                               //SMTP password
    $mail->SMTPSecure = 'STARTTLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fitforcodings2try@outlook.com', 'Fit');
    $mail->addAddress($_POST['email'], $_POST['name']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail->Subject = $subject;
    $mail->Body    =
        "<div>
    <h3>Thank you $name $surname</h3>
    <p>Your message had been sent </p>
    <p>name: $name</p>
    <p>surname: $surname</p>
    <p>phone: $phone</p>
    <p>email: $email</p>
    <p>subject: $subject</p>
    <p>message: $message</p>
    </div>";

    $mail->AltBody = "
    Thank you $name $surname
    Your message had been sent 
    name: $name
    surname: $surname
    phone: $phone
    email: $email
    subject: $subject
    message: $message";



    $mail->send();
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    echo "<div>
    <h3>Thank you $name $surname</h3>
    <p>Your message had been sent </p>
    <p>name: $name</p>
    <p>surname: $surname</p>
    <p>phone: $phone</p>
    <p>email: $email</p>
    <p>subject: $subject</p>
    <p>message: $message</p>
    </div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
