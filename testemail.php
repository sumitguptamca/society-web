<?

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
//require $_SERVER['DOCUMENT_ROOT'].'/engine/vendor/phpmailer/phpmailer/src/Exception.php';
//require $_SERVER['DOCUMENT_ROOT'].'/engine/vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require $_SERVER['DOCUMENT_ROOT'].'/engine/vendor/phpmailer/phpmailer/src/SMTP.php';
  
//require '/home/tecksoch/techsochss.com/vendor/egulias/email-validator/src/Exception.php';
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Exception;

use Illuminate\Support\Facades\PHPMailer;
use Illuminate\Support\Facades\SMTP;


 $mail = new PHPMailer();
 echo '<pre>';print_r($mail);
 die('kk');
    $mail->SMTPDebug = 1;
    $mail->isSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Host = 'mail.techsochss.com';
    $mail->Port = 465;
    $mail->Username = 'sumit@techsochss.com';
    $mail->Password = 'sumit#$123';
  
    
  
  
    $mail->setFrom('sumit@techsochss.com');            
    $mail->addReplyTo('dilip@techsochss.com');
    $mail->addAddress('sumitgupta.mca@gmail.com');
    $mail->Subject = "Test123";
    $mail->Body = "TEST TEST TEST";
    $mail->isHTML(true);
    if(!$mail->send($to_addr,$template_info,$message_body,$headers,$sender)){
        $mail_error = ob_get_contents();
        $mail->error = 'Unable to send e-mail message using template ' .
            $mail->name.' to '.$to_addr;
        if ($mail_error) $mail->error .= ': '.$mail_error;
        return false;
    }
  