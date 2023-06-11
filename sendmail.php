<?php
// include "mail/PHPMailer/src/PHPMailer.php";
// include "mail/PHPMailer/src/Exception.php";
// include "mail/PHPMailer/src/OAuth.php";
// include "mail/PHPMailer/src/POP3.php";
// include "mail/PHPMailer/src/SMTP.php";
 
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// $mail = new PHPMailer(true);
// try {
    //Server settings
    // $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
   //$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    //$mail->SMTPAuth = true;                               // Enable SMTP authentication
   // $mail->Username = 'ble07983@gmail.com';                 // SMTP username
   // $mail->Password = 'zbrmtpwkyfxzfdnp';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
   // $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    //$mail->setFrom('ble07983@gmail.com','Mailer');
    //$mail->addAddress('Ny22167@gmail.com','Như Y');     // Add a recipient
   // $mail->addAddress('baobuiii2003@gmail.com','Bao bui');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
   // $mail->isHTML(true);                                  // Set email format to HTML
   // $mail->Subject = 'Test Mail';
    //$mail->Body    = 'New content test mail';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
   // $mail->send();
   // echo 'Message has been sent';
//} catch (Exception $e) {
  //  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
//}
if(isset($_POST['btns']) == true){
GuiMail();
}
function GuiMail(){   



    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
//  include "mail/PHPMailer/src/POP3.php";
//  include "mail/PHPMailer/src/SMTP.php";
//     require "PHPMailer-master/mail/src/PHPMailer.php"; 
//     require "PHPMailer-master/mail/src/SMTP.php"; 
//     require 'PHPMailer-master/mail/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'ble07983@gmail.com'; // SMTP username
        $mail->Password = 'fectutuexnkcfqsa';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('ble07983@gmail.com', 'EMAIL CÔNG TY' ); 
        $mail->addAddress('baole28082003@gmail.com', 'NHU HEO'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi từ from Liên hệ';
        // $noidungthu = "
        // <h3>Thư liên hệ từ khách hàng</h3>
        // <p> Email khách hàng: <br>{$_POST['Email']} </p>
        // <p> Nội dung liên hệ: <br>{$_POST['txtnoidung']} </p>";
        $noidungthu = file_get_contents("noidungthulienhe.txt");
$noidungthu = str_replace(
	[ '{email}' , '{noidung}','{DT}','{hoten}'], 
	[$_POST['Email'], $_POST['txtnoidung'],$_POST['dt'],$_POST['hoten']]
	, $noidungthu);
        $mail->Body = nl2br($noidungthu) ;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        header("location: LienHe.php");
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
 }//function GuiMail
?>