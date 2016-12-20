<?php
	$val = $_POST['mobile'];
	$otp = $_POST['otp'];
	if(is_numeric($val))
	{
		if(($val/1000000000)>1 && $val<100000000000)
		{
		header("Location: ../sms_api/nimcet/oneapi-sample-app/send-custom-message-single.php?cutomerid=NIMCET&mobileno=$val&message=Dear User OTP(verification code) for your signup is $otp -- india post shopping &redirecturl=http://localhost", true, 303);
		echo "1";
		}
		else
			echo "10";
	}
	else if(filter_var($val,FILTER_VALIDATE_EMAIL))
	{

		require 'class.phpmailer.php';
		require 'class.smtp.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = 'smtp';
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com (ssl://smtp.gmail.com)" didn't worked
		$mail->Port = 465;
		$mail->SMTPSecure = 'ssl';
		// or try these settings (worked on XAMPP and WAMP):
		// $mail‐>Port = 587;
		// $mail‐>SMTPSecure = 'tls';
		$mail->Username = "raman25bca@gmail.com";
		$mail->Password = "9472640225";
		$mail->IsHTML(true); // if you are going to send HTML formatted emails
		$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one‐by‐one.
		$mail->From = "raman25bca@gmail";
		$mail->FromName = "India_Post_Shopping";
		$mail->addAddress($val,"User 1");
		//$mail->addAddress("raman22bca@gmail.com","User 2");
		//$mail->addCC("user.3@ymail.com","User 3");
		//$mail->addBCC("user.4@in.com","User 4");
		$mail->Subject = "Verification for valid User";
		$mail->Body = "Hi,<br /><br />This system is working perfectly.".$otp." is your verification number";
		if(!$mail->Send())
			echo '10';
		else
			echo "1";
	}
	else
		echo "10";
?>