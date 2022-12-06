<?php
include  "PHPMailer/src/PHPMailer.php";
include  "PHPMailer/src/Exception.php";
include  "PHPMailer/src/OAuth.php";
include  "PHPMailer/src/POP3.php";
include  "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public function dat_hang($tieu_de, $noi_dung, $mail_dat_hang)
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        // print_r($mail);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'phamanhtuan1628@gmail.com';                 // SMTP username
            $mail->Password = 'mopjlyuwsujdcdip';                          // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('phamanhtuan1628@gmail.com', 'Beeta-Store');
            $mail->addAddress($mail_dat_hang, '');     // Add a recipient
            // $mail->addAddress('phamanhtuan1628@gmail.com', 'Anh Tuấn');               // Name is optional

            // $mail->addReplyTo('info@example.com', 'Information');
            
            // $mail->addCC('tuanpaph20520@fpt.edu.vn');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $tieu_de;
            $mail->Body    = $noi_dung;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            // echo 'Tin nhắn đã được gửi';
        } catch (Exception $e) {
            echo 'Không thể gửi email. Lỗi người gửi thư: ', $mail->ErrorInfo;
        }
    }
}
