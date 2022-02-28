<?php
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
require 'PHPMailer/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'mail.catuses.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'dvivas@catuses.com';
	$mail->Password = 'Hitman-47g-15-16';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = '465';

//Recipients
    $mail->setFrom("dvivas@catuses.com", "SISTEMA DE RECORDATARIO - CRESE  build by Catuses");
    //$mail->addAddress("lapto2006@gmail.com", "Ing Danilo Catuses");     // Add a recipient
    $mail->addAddress("lapto2006@gmail.com", "Estimado Cliente Danilo");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Aviso de Pago';
    $mail->Body    = 'Esta es una prueba de envio de correo para notificacion de cobro autmatico por parte del sistema CRESE';


    $mail->send();
    echo 'Mensaje enviado correctamente Enviar Email Prueba # 1 #';
} catch (Exception $e) {
    echo "Error al intentar enviar el correo: Detalles del error: [".$mail->ErrorInfo.']';
}
$mail->smtpClose();