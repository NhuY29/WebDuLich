<?php
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
            $mail->setFrom('ble07983@gmail.com', 'EMAIL CÔNG TY TRAVELS' ); 
            $mail->addAddress($_POST['email'], $_POST['hoten']); //mail và tên người nhận  
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi Cảm ơn khách hàng';
            // $noidungthu = "
            // <h3>Thư liên hệ từ khách hàng</h3>
            // <p> Email khách hàng: <br>{$_POST['Email']} </p>
            // <p> Nội dung liên hệ: <br>{$_POST['txtnoidung']} </p>";
            $noidungthu = file_get_contents("thuguikhachhang.txt");
    $noidungthu = str_replace(
        [ '{email}' , '{hoten}'], 
        [$_POST['email'],$_POST['hoten']]
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
            header("location: DatHang.php");
        } catch (Exception $e) {
            echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
     }//function GuiMail
    ?>