<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Correo {

        function cargaCorreo($file_name){

            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';

            

            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'garciaquinteroga@gmail.com';
                $mail->Password   = 'cvueigooddvmxcio';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = '587';
                //Recipients

                $mail->setFrom('garciaquinteroga@gmail.com', 'Recuperacion de Cuenta');
                $mail->addAddress('garciaquinteroga@gmail.com', '');

            
                // Content
                $mail->isHTML(true);
                $mail->AddAttachment($file_name);
                $mail->Subject = 'Customer Details';			//Sets the Subject of the message
                $mail->Body = 'Please Find Customer details in attach PDF File.';				//An HTML or plain text message body
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                $mail->ClearAddresses(); 
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
                        
        }



}

