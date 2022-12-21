<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/SMTP.php';
    
    $mail = new PHPMailer(true);
    
    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adamodamiang6@gmail.com';
        $mail->Password = 'Damian2530';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('adamodamian6@gmail.com', 'damian');
        $mail->addAddress('adamodamian6@gmail.com', 'Cliente');

        // $mail->addAttachment();

        $mail->isHTML(true);
        $mail->Subject = 'Correo de Prueba';
        $mail->Body    = 'Mensaje de Prueba';
        $mail->send();

        echo 'Correo Enviado';

    }catch(Exeption $e){
        echo 'Mensaje'.$mail->ErrorInfo;
    }
    
?>