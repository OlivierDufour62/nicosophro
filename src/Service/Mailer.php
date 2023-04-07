<?php

namespace App\Service;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

define('GMailUser', 'olivier.dufour62320@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'TdYd:0324'); // Mot de passe Gmail


class Mailer
{
    

    public function sendMail($from)
    {
        $sendMail = new PHPMailer(true);

        try {
            // configuration
            $sendMail->SMTPDebug = SMTP::DEBUG_CLIENT;
            $sendMail->isSMTP();
            $sendMail->Mailer = "smtp";
            $sendMail->Host = "smtp.gmail.com";
            $sendMail->SMTPAuth = true;

            $sendMail->Username   = 'olivier.dufour62320@gmail.com';                     //SMTP username
            $sendMail->Password   = 'TdYd:0324';
            $sendMail->SMTPSecure = 'SSL';                         //SMTP password
            $sendMail->Port = 465;

            $sendMail->CharSet = "utf-8";

            //destinataire
            $sendMail->addAddress("djpillz@hotmail.fr");
            // $sendMail->addAddress("couco")
            //expéditeur
            $sendMail->setFrom('olivier.dufour62320@gmail.com');

            //contenu
            $sendMail->Subject = "coucou c'est nous";
            $sendMail->Body = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatibus, in laboriosam cupiditate sapiente fugiat dolore quisquam porro possimus, voluptatum debitis sed repudiandae laudantium quasi, ea delectus ipsum harum. Dolorum.";

            $sendMail->send();
        } catch (Exception) {
            echo "Message non envoyé";
        }
    }
   
    function smtpMailer($to, $from, $from_name, string $subject, string $body)
    {
        $mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
        $mail->IsSMTP(); // active SMTP
        $mail->SMTPDebug = SMTP::DEBUG_CLIENT;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
        $mail->SMTPAuth = true;  // Authentification SMTP active
        $mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'olivier.dufour62320@gmail.com';
        $mail->Password = 'TdYd:0324';
        $mail->SetFrom($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if (!$mail->Send()) {
            return 'Mail error: ' . $mail->ErrorInfo;
        } else {
            return true;
        }
    }
}
