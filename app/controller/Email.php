<?php
namespace App\Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class Email {
    private $mail;

    public function __construct() {
        $host = 'smtp.hostinger.com';
        $username = 'support@nukshatra.in';
        $password = '[mpHsGg@4O';
        $port = 587;
        $encryption = 'tls';
    
        $this->mail = new PHPMailer(true);
    
        try {
            //Server settings
            $this->mail->SMTPDebug = 0; // Enable verbose debug output (0 = off)
            $this->mail->isSMTP(); // Set mailer to use SMTP
            $this->mail->Host = $host; // Specify main and backup SMTP servers
            $this->mail->SMTPAuth = true; // Enable SMTP authentication
            $this->mail->Username = $username; // SMTP username
            $this->mail->Password = $password; // SMTP password
            $this->mail->SMTPSecure = $encryption; // Enable TLS encryption, `ssl` also accepted
            $this->mail->Port = $port; // TCP port to connect to
    
            // From email and name
            $this->mail->setFrom($username, 'Nukshatra');
        } catch (Exception $e) {
            throw new Exception('Mail initialization error: ' . $this->mail->ErrorInfo);
        }
    }
    
    // Method to set email parameters
    public function setEmailDetails($to, $subject, $body, $isHTML = true, $altBody = '') {
        try {
            // Recipients
            $this->mail->addAddress($to); // Add a recipient
            $this->mail->Subject = $subject; // Email subject
            $this->mail->Body    = $body; // Email body
            $this->mail->isHTML($isHTML); // Set email format to HTML

            if (!$isHTML) {
                $this->mail->AltBody = $altBody; // Alternative plain text body
            }

            return true;
        } catch (Exception $e) {
            throw new Exception('Error setting email details: ' . $this->mail->ErrorInfo);
        }
    }

    // Method to send the email
    public function send() {
        try {
            $this->mail->send();
            return true;
        } catch (Exception $e) {
            throw new Exception('Message could not be sent. Mailer Error: ' . $this->mail->ErrorInfo);
        }
    }
}


?>
