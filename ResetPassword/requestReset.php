<?php
include  "PHPMailer/src/PHPMailer.php";
include  "PHPMailer/src/Exception.php";
include  "PHPMailer/src/OAuth.php";
include  "PHPMailer/src/POP3.php";
include  "PHPMailer/src/SMTP.php";
include "config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// echo"hi";
// die;
if(isset($_POST["email"])){
    $emailTo = $_POST["email"];
    $code = uniqid(true);
    $query = mysqli_query($con,"INSERT INTO resetPassword(code,email) VALUES ('$code','$emailTo')");
    if(!$query){
        exit("Error");
    }
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'trantuananh100119999@gmail.com';                 // SMTP username
    $mail->Password = 'tuananh1001';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('trantuananh100119999@gmail.com', 'Insight Company');
    $mail->addAddress($emailTo);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $url = "http://".$_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) ."/resetPassword.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your password reset link!';
    $mail->Body    = "<h1> You request a password reset</h1>
    click <a href='$url'>this link</a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    // echo "A Reset Email has been sent! Please check your Email!";
    // echo '<script>alert("A Reset Email has been sent! Please check your Email!")</script>'; 
    // header("location:../login.php");
    // echo "A Reset Email has been sent! Please check your Email!";

    echo "<script>
    alert('A Reset Email has been sent! Please check your Email!');
    window.location.href='../pages/index.php';
    </script>";
    
} catch (Exception $e) {
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
   echo "<script>
   alert('Message could not be sent. Mailer Error: ');
   window.location.href='forgotPassword.php';
   </script>";
}
}
?>