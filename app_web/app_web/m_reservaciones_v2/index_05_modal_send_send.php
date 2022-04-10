<?php
include '../00_includes/00_session.php';
require '../../PHPMailer/PHPMailer/src/Exception.php';
require '../../PHPMailer/PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/PHPMailer/src/SMTP.php';
//date_default_timezone_set('Etc/UTC');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['enviar'])){


    $nombre = $_POST['nombre'];
    $email = $_POST['email'];



//Create a new PHPMailer instance
    $mail = new PHPMailer(true);
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages


    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = SMTP::DEBUG_OFF;


//Set the hostname of the mail server

    //$mail->Host = 'mail.catuses.com';
    $mail->Host = 'a2plcpnl0799.prod.iad2.secureserver.net';

    $mail->SMTPSecure = 'ssl';
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 465;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    //$mail->Username = 'dvivas@catuses.com';
    $mail->Username = 'notificaciones@cresesa.com';


//Password to use for SMTP authentication
    //$mail->Password = 'Hitman-47g-15-16';
    $mail->Password = 'aa&lN8IaLHIV';

//Set who the message is to be sent from
    $mail->setFrom("notificaciones@cresesa.com", "CRESE - SISTEMA DE RECORDATORIO");
//Set an alternative reply-to address

//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to

//$mail->addAddress('whoto@example.com', 'John Doe');
    $mail->addAddress($email, "Estimados Colaboradores");

//Set the subject line
    $mail->Subject = 'CRESE. S,A. - RECORDATORIO';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
    $mail->AltBody = 'ESTE MENSAJE ES ENVIADO POR UN SITEMA automatico NO ES NECESARIO RESPONDER DIRECTAEMNTE A ESTE EMAIL';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');


// $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Recordatorio - test de envio';
    $mail->Body    = 'Estimado '.$nombre.'. Reciba Coordiales saludos de su empresa CRESE en pro de mejorar y garantizar nuestra calidad en nuestros servicios por medio de este Correo le recordamos que pronto sera su proxima fecha mensual de pago. El envio de este correo es automatico favor no responder a este correo si desea contactar directamente con nosotros lo puede hacer por medio de nuestro whatsapp 12341234 ejemplo';

//send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        $_SESSION['error'] = 'ERROR DURANTE EL ENVIO DEL MENSAJE';
    } else {
        echo 'Message sent!';
        $_SESSION['success'] = 'Mensaje enviado con éxito ';//.$modulo;//.$sql;
    }

    $mail->smtpClose();
    header('location: index.php');


}
else{
    $_SESSION['error'] = 'Seleccionar  para editar primero'.$sql;
    header('location: index.php');
}
header('location: index.php');
?>

