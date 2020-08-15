<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gmail do ktorego idą maile'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'xxxxxxxx'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('gmail do ktorego idą maile'); // Gmail address which you used as SMTP server
    $mail->addAddress('gmail do którego idą maile'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Formularz kontaktowy';
    $mail->Body = "<h3>Imię : $name <br>Email: $email <br>Wiadomość : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Wiadomośc wysłana. Skontaktujemy się niebawem!</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>