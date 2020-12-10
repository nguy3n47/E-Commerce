<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

class SendMailController extends Controller
{
    public function sendEmail($to, $name, $subject, $content)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
        $mail->isSMTP();                                         // Send using SMTP
        $mail->CharSet    = 'UTF-8';
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                // Enable SMTP authentication
        $mail->Username   = 'nguy3n.web1.hcmus@gmail.com';       // SMTP username
        $mail->Password   = 'bmd1eTNu';                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                 // TCP port to connect to

        //Recipients
        $mail->setFrom('nguy3n.web1.hcmus@gmail.com', 'NGUY3N47');
        $mail->addAddress($to, $name);                           // Add a recipient

        // Content
        $mail->isHTML(true);                                     // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        $mail->AltBody = $content;

        $mail->send();
        return true;
    }

    public function generateRandomString($length)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function sendCodeResetPassword(Request $request)
    {
        $email = $request->email;
        $code = $this->generateRandomString(6);
        $bodyContent = "We received a request to reset your password.<br />Enter the following password reset code:<br /> <strong>$code</strong><br />" . "Alternatively, you can directly change your password.<br />" . "<a href='BASE_URL/reset-password.php?code=$code' style='background-color:#166fe5;border:1px ;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;line-height:44px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;' target='_blank'>Change Password</a>";
        $this->sendEmail($email, 'Name', $code . ' is your account recovery code', $bodyContent);
    }

    public function create()
    {
        //
        return view('../Auth/forgotPass');
    }
}