<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com (ssl://smtp.gmail.com)" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = "dprasad8877@gmail.com";
$mail->Password = "diwakar1991";
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one‐by‐one.
$mail->From = "dprasad8877@gmail.com";
$mail->FromName = "diwakar";
$conn=new PDO("mysql:host=localhost;dbname=nita","root","") or die("failed");
$sql = "select email from register";
$res =$conn->query($sql);
while($data=$res->fetch())
$mail->addAddress($data[0],"User 1");
$mail->addAddress("diwakarp74@gmail.com","User 2");
//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");
$mail->Subject = $_POST['head'];
$mail->Body = $_POST['msg'];
if(!$mail->Send())
echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
echo "Message has been sent";
?>