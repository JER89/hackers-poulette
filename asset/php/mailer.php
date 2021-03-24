<?
use PHPMailer \ PHPMailer \ PHPMailer ;
use PHPMailer \ PHPMailer \ SMTP ;
use PHPMailer \ PHPMailer \ Exception ;

function sendMail($targetMail, $targetName) {
    $mail = new PHPMailer(true);

try {

    $mail -> SMTPDebug = SMTP :: DEBUG_SERVER;                     
    $mail -> isSMTP ();                                            
    $mail -> Host        = 'smtp.gmail.com';                     
    $mail -> SMTPAuth    = true ;                                   
    $mail-> Username    = 'JJ@gmail.com';                     
    $mail -> Password     = 'secret';                               
    $mail -> SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;         
    $mail -> Port        = 587;                                     

    // Destinataires 
    $mail -> send ();
    $mail -> addAddress ( $targetMail, $targetName );
}catch (Exception $e) {
    $debugMail =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
?>