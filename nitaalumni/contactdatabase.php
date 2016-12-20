<?php
 error_reporting(0);
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$message=$_POST["message"];
	$conn=new PDO("mysql:host=localhost;dbname=nita","root","") or die("failed");
	$stmt = $conn->prepare("INSERT INTO contact (name,email,phone,message) VALUES (?,?,?,?)");
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$email);
	$stmt->bindParam(3,$phone);
	$stmt->bindParam(4,$message);
	$stmt->execute();
	if($stmt)
		echo header("location:index.php");
	else
	echo "unsuccessfully store data in database";

?>