<?php
require '../PHPMailer/PHPMailer/src/PHPMailer.php';
require '../PHPMailer/PHPMailer/src/SMTP.php';
require '../PHPMailer/PHPMailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'mail.catuses.com';                  // Set the SMTP server to send through
    $mail->SMTPAuth   = "true";                                   // Enable SMTP authentication
    //$mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->SMTPSecure = 'ssl';
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = "465";                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->Username = 'dvivas@catuses.com';                   // SMTP username
    $mail->Password = 'Hitman-47g-15-16';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //Recipients
    $mail->setFrom("dvivas@catuses.com", "CRESE - SISTEMA DE RECORDATORIO");
    $mail->addAddress("gerenciageneral@cresesa.com.ni", "Estimados Colaboradores");     // Add a recipient
    $mail->addAddress("lapto2006@gmail.com", "Ing Danilo Oswaldo Berroteran Vivas - Catuses");     // Add a recipient
        $mail->addAddress("creseaire@yahoo.com", "ING. ERICK FAJARDO - CRESE ");     // Add a recipient
            $mail->addAddress("daniloberroteranv@hotmail.com", "Ing Danilo Oswaldo Berroteran Vivas - Catuses");     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recordatorio - test de envio';
    $mail->Body    = 'Estimado CLiente. Reciba Coordiales saludos de su empresa CRESE en pro de mejorar y garantizar nuestra calidad en nuestros servicios por medio de este Correo le recordamos que pronto sera su proxima fecha mensual de pago. El envio de este correo es automatico favor no responder a este correo si desea contactar directamente con nosotros lo puede hacer por medio de nuestro whatsapp 12341234 ejemplo';


    $mail->send();
    echo 'Mensaje enviado correctamente Enviar Email Prueba # 1 #';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$mail->smtpClose();
