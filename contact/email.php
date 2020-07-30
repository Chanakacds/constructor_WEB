<?php 
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;
  require 'vendor/autoload.php'; 
  
$mail = new PHPMailer();

$Yourname = $_POST['text-142'];
$email = $_POST['email-800'];
$phonenumber = $_POST['text-143'];
$Subject = $_POST['text-144'];
$massage = $_POST['textarea-945'];
var_dump($Yourname);
$subj= "Contact list";
$body = " <br> Name ".$Yourname." <br> Email ".$email." <br> Phone Number : ".$phonenumber."<br> Subject : ".$Subject. " <br> Massage :".$massage;

  
try {
                                   
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                              
    $mail->UserName = 'Email our';    /*our Email  */             
    $mail->Password = 'Password';     /*Password */                   
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;
    
    $mail->setFrom('helloascbr21building@gmail.com',"Admin ASCBR");
    $mail->addAddress('hello@ascbr.co.nz'); /* add owner email*/
              
    $mail->isHTML(true);                                 
    $mail->Subject = "$subj";
    $mail->Body    = "$body";

    $mail->send();
        echo"<script>alert(\"Your email has been sent, thank you!\")</script>";
        header("Location:constructor\contact\index.html");/* after email send load page path*/
    }
 catch (Exception $e) {
        echo"<script>alert(Please try again!\")</script>";
}